<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $data['result'] = Produk::where(function($query) use ($q) {
            $query->where('kategori_produk', 'like', '%' . $q . '%');
            $query->orWhere('nama_produk', 'like', '%' . $q . '%');
            $query->orWhere('stok', 'like', '%' . $q . '%');
            $query->orWhere('harga_produk', 'like', '%' . $q . '%');

        })->paginate();

        $data['q'] = $q;

        return view('produk.list', $data);
    }
    public function create()
    {
        return view('produk.form');
    }
    public function store(Request $request)
    {
        $rules = [
            'kategori_produk' => 'required',
            'harga_produk' => 'required|numeric|max:3'
        ];
        $this->validate($request, $rules);
        $data =$request->all();
        return view('produk.show',$data);

        dd($request->all());
    }
}

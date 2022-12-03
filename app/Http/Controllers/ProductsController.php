<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function GetProductsByCategory($cid){
        $datas = Products::all()->where('CategoryID',$cid);
        return view('list-produk',['datas'=>$datas]);
    }

    public function GetProductByID($pid){
        $datas = Products::all()->find($pid);
        return view('detail-produk',['data'=>$datas]);
    }
    public function AddToCart($id){
        // var_dump(request()->post('quantity',''));
        $carts = session('cart');
        $product = Products::all()->find($id);
        $carts[$product->ProductName]=[
            'Products' => $product,
            'Qty' => request()->post('quantity','0')
        ];
        session()->put('cart',$carts);
        return redirect()->back();
    }
}

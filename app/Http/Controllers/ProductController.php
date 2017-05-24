<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	/*
	public function index(){
    	return 'products.index';
    }
    */	
    public function index(){
    	$products=Product::orderBy('id','DESC')->paginate();
    	//se puede escribir de estas 3 formas!!!!
    	//return view('products.index', compact('products'));
    	//return view('products.index',['products'=>$products]);
    	//return view('products.index')->with(['products'=>$products]);
        session()->flash('info',"Esta es la lista de Productos");
        return view('products.index', compact('products'));
    }

    /*
    public function show($id){
    	
    	$product= Product::find($id);
        return view('products.show', compact('product'));
    }
    */
    public function show(Product $product){//como antepuse la clase Product, por defecto la carga!!!
    	
    	//$product= Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit(Product $product){       
    	
    	//$product= Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function destroy(Product $product){
        
        $product->delete();
        session()->flash('info',"Producto Borrado Correctamente");
        return redirect()->route('products.index');
    }
    public function create(){       
        dd("crear producto");
        session()->flash('info',"Producto Creado Correctamente");
        //$product= Product::find($id);
        return view('products.edit', compact('product'));
    }
    
}

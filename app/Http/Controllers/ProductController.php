<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
        $products = Product::paginate(10);
        return view('products', [
            'products' => $products,
        ]);
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
        return view('products.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */

      public function store(Request $request)
     {
        $this->validate($request,[
          'Nombre'=>'required',
          'Precio'=> 'required',
          'Stock'=>'required',]);


         $product = Product::create([
           'Nombre'=> $request->input('Nombre'),
           'Precio'=> $request->input('Precio'),
           'Stock'=> $request->input('Stock')]
           );


           $product->save();



         return view('index');
     }



      /**
       * Display the specified resource.
       *
       * @param  \App\product  $product
       * @return \Illuminate\Http\Response
       */
      public function show(product $product)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\product  $product
       * @return \Illuminate\Http\Response
       */
      public function edit(product $product)
      {
          //
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\product  $product
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, product $product)
      {
          //
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  \App\product  $product
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
        $product = Product::find($id);
        dd($product);
        $product->delete();

        return view ('index');
      }
}

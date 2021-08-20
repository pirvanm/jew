<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        // Product::where( '')
        // with () , 
//->get() 
        
        return view('products.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // pentru crearea de produse
    public function create()
    {
        // lsiteaza categoriile , lista lor 
        $categories = Category::get();

        // incarca categoriile din tabele de categorii si o trimite
        // in formularul de creare produse
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifica daca :
          
           
  
        $request->validate([
              // campul titlu este completat si unic
            'title' => 'required|unique:products',
             // campul price este completat si intreg
            'price' => 'required|integer',
                      // forteaza alegerea unei categorii
            'categories' => 'required',
        ]);

        // afiseaza toate categoriile 
        foreach ($request->categories as $category) {
            $category = Category::findOrFail($category);
        }

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->save();

        // in momentul in care adaugi un produs, acesta apartine unei categorii
        $product->categories()->attach($request->categories);

      
        return back()->with('success', 'The product has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

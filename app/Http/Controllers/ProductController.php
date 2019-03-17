<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $page = [
        'name' => 'Продукты',
        'route' => 'products',
        'default' => 'index',
        'id' => '1',
        'action' => 'index'
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $products)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;

        $products = Product::paginate(25);

        return view('admin.products.index', compact('page', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;
        return view('admin.products.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required',
            'code' => 'required|string|max:255',
            'price' => 'required',
            'main_image' => 'mimes:jpeg,bmp,png',
        ]);
        $errors = $validator->errors();


        $product = new Product($request->all());
        $product->saveImage($request);
        $product->price = (int)$request->input('price');
        $result = $product->save();
        if ($result) {
            return redirect(route('products.index'))->with('errors', $errors);
        }
        return redirect()->route('products.create')
            ->with('errors', $errors)
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;
        $page['id'] = $product->id;
        if ($product) {
            return view('admin.products.show', compact('page', 'product'));
        }
        return redirect()->back(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;
        if ($product) {
            return view('admin.products.edit', compact('page', 'product'));
        }
        return redirect()->back(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            $product->delete();
            return redirect(route('products.index'));
        }
        return redirect()->back(404);
    }

    public function search(Request $request)
    {
        $products = Product::where('code', 'like', '%' . $request->input('query') . '%')->get();
        return response()->json($products);
    }
}

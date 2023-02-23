<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        // Product::create(
        //     [
        //         'name'=>$request->input('name'),
        //         'description'=>$request->input('description'),
        //         'price'=>$request->input('price'),
        //         'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
        //         'user_id'=> Auth::user()->id
        //     ]
        // );

        Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
            ]
        );

        return redirect()->route('homepage');

    }

    /**
     * Display the specified resource.: Response
     */
    public function show(Product $product)
    {
        return view('product/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        //
    }

    public function getProductByUser(User $user){
        // $user = User::find($id);
        // $products = $user->products;
         return view('product/productUser', compact('user'));
        // dd($user);
        }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::all()->sortDesc();
        $products = Product::all();
        return view('welcome', compact('articles', 'products'));
    
    }

    // public function home(){
    //     $products = Product::all();
    //     return view('welcome', compact('products'));
    // }

    public function contacts(){
        return view('contacts');
    }

    public function submit(Request $request){
        $email = $request->email;
        $name = $request->name;
        $body = $request->body;
        $user = compact('name', 'email', 'body');
        Mail::to($email)->send(new ContactMail($user));
        // dd($request->all(),$email, $name, $body, $user);
        return redirect(route('homepage'))->with('message', 'La tua mail è stata inviata');
    }
}

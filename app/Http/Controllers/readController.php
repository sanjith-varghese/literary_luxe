<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class readController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.index');
    }
    public function register()
    {
        return view('frontend.register');
    }

    public function login()
    {
        return view('frontend.login');
    }
    public function home()
    {
        return view('frontend.home');
    }

    public function comic()
    {
        $comicBooks['ccat'] = Book::where('category', 'Comics')->get();
        return view('frontend.comic', $comicBooks);
    }
    public function horror()
    {
        $horrorBooks['hcat'] = Book::where('category', 'Horror')->get();
        return view('frontend.horror', $horrorBooks);
    }
    public function romance()
    {
        $romanceBooks['rcat'] = Book::where('category', 'Romance')->get();
        return view('frontend.romance', $romanceBooks);
    }
    public function mystry()
    {
        $mystryBooks['mcat'] = Book::where('category', 'Mystery')->get();
        return view('frontend.mystry', $mystryBooks);
    }

    public function searchAction(Request $req)
    {
        $search=$req->input('search');

        $bookname=Book::where('bookname','LIKE',"%{$search}%")->get();
        return view('frontend.bookresult',compact('bookname'));
    
    }
    
    
    
    public function text()
    {
        return view('frontend.text');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

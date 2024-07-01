<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\adminlogin;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminindex()
    {
        return view('admin.adminindex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addbook(Request $request)
    {
        return view('admin.addbook');
    }

    public function addbookAction(Request $request)
     {
        $bookname=$request->input('bookname');
        $desciption=$request->input('description');
        $authorname=$request->input('authorname');
        $publishername=$request->input('publishername');
        $category=$request->input('category');
        $file1 = $request->file('inputFileUpload');

        $filename=$file1->getClientOriginalName();
        $file1->move(public_path().'/bookimg/',$filename);

        $data=[
            'bookname'=>$bookname,
            'description'=>$desciption,
            'authorname'=>$authorname,
            'publishername'=>$publishername,
            'category'=>$category,
            'inputFileUpload'=>$filename,
           
        ];
          book::insert($data);
          return redirect('/addbook');

    }

    public function view(Request $request)
    {
      
      
            $view1['data']=book::get();
          return view('admin.view',$view1);
    
    }
    public function adminlogin()
    {
        return view('admin.adminlogin');

    }
    public function loginAction(Request $req)
    {
        $username=$req->input('username');
        $password=$req->input('password');
        
        $log=adminlogin::where('username',$username)->where('password',$password)->first();
        if(isset($log))
        {
            $req->session()->put(array('sessid'=>$log->id));
            return redirect('/adminindex');
        }
        else{
            return redirect('/adminlogin')->with('error','invalid data');
        }
    }


    public function logout(Request $request)
    {
        $request->session()->forget('sessid');
      return redirect('/adminlogin');
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

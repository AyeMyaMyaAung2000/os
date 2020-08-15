<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $categories=Category::all();
         return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
        return view('backend.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // return view('backend.brands.show');
         $request->validate([
           
            'name'=>'required',
            'photo'=>'required',
            
        ]);

        // If include file(filename)
        $imageName=time().'.' .$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg/'),$imageName);
        $myfile='backend/categoryimg/' .$imageName;

        $category=new Category;//<==Items (model name)
       
        $category->name = $request->name; 
        $category->photo = $myfile;
        
        $category->save();

        // Redirect

        return redirect()->route('categories.index');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('backend.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $category=Category::find($id); 
          return view('backend.categories.edit',compact('category'));
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
       $request->validate([
            
            'name'=>'required',
            'photo'=>'sometimes',
          
        ]);
        //if include file,upload
        if ($request->hasFile('photo')){
             $imageName=time().'.' .$request->photo->extension();
      

        
        $request->photo->move(public_path('backend/categoryimg/'),$imageName);
        $myfile='backend/categoryimg/' .$imageName;
         @unlink($request->oldphoto);
    }else{
        $myfile=$request->oldphoto;
    }

         //data update
        $category=Category::find($id);//<==Items (model name)
      
        $category->name = $request->name; 
        $category->photo = $myfile;
       
        $category->save();

         // Redirect
         return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
      $category->delete();
      //redirect
      return redirect()->route('categories.index');
    }
}

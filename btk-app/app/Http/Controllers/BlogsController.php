<?php


namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource. Blok listeleme işlemi.
     */
    public function index()
    {
        $blogs = Blogs::all();
        //$blogs = Blogs::orderBy('title','desc')->get();
        //$blogs = Blogs::where('title','laravel dersleri')->get();
        //$blogs = Blogs::latest()->get();

        return view('blogs.index', ['blogs' => $blogs]);}
    
    /**
     * Show the form for creating a new resource. Veritabanına kayıt ekleme.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Kayıt işlemi.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. id ile eşleşen içeriği getir.
     */
    public function show(int $id)
    {
     $blog = Blogs::find($id);
    return view('blogs.show', ['blog' => $blog]);

}
   /**
     * Show the form for editing the specified resource. Güncelleme işlemi.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. Post Request ile 
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. Veriyi silme işlemi.
     */
    public function destroy(string $id)
    {
        //
    }
}

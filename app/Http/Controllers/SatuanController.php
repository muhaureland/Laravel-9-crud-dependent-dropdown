<?php

namespace App\Http\Controllers;

use App\Http\Requests\SatuanRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Satuan;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('satuan.index', [
            'satuans' => Satuan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satuan.create',[
            'satuan'  => new Satuan,
            'categories'   => Category::all(),
            'courses' => Course::all(),
            'submit'=> 'Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SatuanRequest $request)
    {
        $validatedData = $request->all();
        $validatedData['slug'] = SlugService::createSlug(Satuan::class, 'slug', $request->nama);
        Satuan::create($validatedData);
        return redirect('/satuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(Satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Satuan $satuan)
    {
         return view('satuan.edit',[
            'satuan'  => $satuan,
            'categories'   => Category::all(),
            'courses'   => Course::all(),
            'submit'=> 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(SatuanRequest $request, Satuan $satuan)
    {
        $validatedData = $request->validated();
        $validatedData['slug'] = SlugService::createSlug(Satuan::class, 'slug', $request->nama);
        Satuan::where('id', $satuan->id)->update($validatedData);
        return redirect('/satuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satuan $satuan)
    {
        Satuan::destroy($satuan->id);
        return redirect('/satuan');
    }

    public function course($id)
    {
        $course = Course::where('category_id',$id)->get();
        return response()->json($course);
    }
}

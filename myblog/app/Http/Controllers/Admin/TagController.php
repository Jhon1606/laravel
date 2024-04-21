<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags',
            // 'slug' => 'required|unique:tags'
            'color' => 'required'
        ]);

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'color' => $request->color
        ]);

        return redirect()->route('admin.tags.index')->with('info', 'La etiqueta fue creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($tag)
    {
        $tag = Tag::find($tag);
        return response()->json($tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        // unique significa único (el nombre tiene que ser único)
        $request->validate([
            'name' => 'required:unique:tags',
            // 'slug' => 'required:unique:tags'
            'color' => 'required'
        ]);

        $tag = Tag::find($request->editId);
        
        $tag->name = $request->editName;
        $tag->slug = $request->slug;
        $tag->color = $request->color;
        $tag->save();

        return redirect()->route('admin.tags.index')->with('info', 'La etiqueta fue atualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}

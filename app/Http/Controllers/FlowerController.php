<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::all();
        return view("flowers.index", compact("flowers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("flowers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $image_url = $request->input('image_url');

        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
        ]);
        DB::table('flowers')->insert([
            'name' => $name,
            'description' => $description,
            'image_url' => $image_url,
        ]);
        return redirect()->route('flowers.index')->with('success','Flower Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('flowers.show',compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('flowers.edit',compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $image_url = $request->input('image_url');

        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
        ]);

        $flower->update([
            'name' => $name,
            'description' => $description,
            'image_url' => $image_url,
        ]);
        return redirect()->route('flowers.index')->with('success','Flower Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with('success','Flower Data deleted successfully');
    }
}

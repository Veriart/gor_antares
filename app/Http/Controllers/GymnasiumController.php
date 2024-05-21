<?php

namespace App\Http\Controllers;

use App\Models\Gymnasium;
use Illuminate\Http\Request;

class GymnasiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gymnasium = Gymnasium::first();

        return view('admin.gymnasium.index', compact('gymnasium'));
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
    public function show(Gymnasium $gymnasium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gymnasium $gymnasium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gymnasium $gymnasium)
    {
        $gymnasium->name = $request->name;
        $gymnasium->type = $request->type;
        $gymnasium->update();

        return redirect('/admin/gymnasium')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gymnasium $gymnasium)
    {
        //
    }
}

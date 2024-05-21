<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(){
        $fields = Field::all();
        return view('admin.field.index', compact('fields'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'status' => 'required'
        ]);

        $field = Field::create($request->all());

        return redirect('admin/field')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Field $field, Request $request){
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'status' => 'required'
        ]);

        $field->name = $request->name;
        $field->number = $request->number;
        $field->status = $request->status;
        $field->update();

        return redirect('admin/field')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(Field $field){
        $field->delete();

        return redirect('admin/field')->with('success', 'Data berhasil dihapus.');
    }
}

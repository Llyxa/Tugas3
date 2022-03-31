<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        // $data = Hotel::all();

        return view('home');
    }

    public function hotels(){
        $data = Hotel::all(); //Hotel ini adalah model

        return view('hotels', compact('data'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function insertdata(Request $request){
        $data = Hotel::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('iniimg/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('hotels')->with('success ',' Data Berhasi di Tambahkan. ');
    }

    public function tampilkandata($id){
        $data = Hotel::find($id);
        return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Hotel::find($id);
        $data->update($request->all());
        return redirect()->route('hotels')->with('berhasil', 'Hotel berhasil diedit.');
    }

    public function delete($id){
        $data = Hotel::find($id);
        $data->delete();
        return redirect()->route('hotels')->with('berhasil', 'Hotel berhasil dihapus.');  
    }

    public function show($id)
    {
        $data = Hotel::find($id);
        return view('detail',compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index',[
            'title' => 'Home'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('create');
        return view('create',[
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token']);
        M_Mahasiswa::insert($data);
        $data = M_Mahasiswa::all();
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = M_Mahasiswa::all();
        return view('mahasiswa')->with([
            'title' => 'List Mahasiswa',
            'data' => $data
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = M_Mahasiswa::findOrFail($id);
        return view('show')->with([
            'title' => 'Edit Mahasiswa',
            'data' => $data
        ]);
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
        //
        $item = M_Mahasiswa::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect("/mahasiswa");
        // $data = M_Mahasiswa::all();
        // return view('index',[
        //     'title' => 'List Mahasiswa',
        //     'data' => $data
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = M_Mahasiswa::findOrFail($id);
        $item->delete();
        // return redirect("/");
        $data = M_Mahasiswa::all();
        return redirect('/mahasiswa');
    }
}

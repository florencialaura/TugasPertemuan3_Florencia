<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matakuliahController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $matakuliah =[                
                 1=> ['nomor matakuliah'=>'SYS07801','nama matakuliah'=>'Technopreneurship','sks'=>'3 sks'],              
                 2=> ['nomor matakuliah'=>'SYS07802','nama matakuliah'=>'Business Intelligence & Data Analytics','sks'=>'4 sks'],
                 3=> ['nomor matakuliah'=>'SYS07803','nama matakuliah'=>'Kapita Selekta','sks'=>'3 sks '],
                 4=> ['nomor matakuliah'=>'SYS07804','nama matakuliah'=>'Perancangan Strategis Sistem Informasi','sks'=>'3 sks'],
                 5=> ['nomor matakuliah'=>'SYS07805','nama matakuliah'=>'Metodologi Riset Sistem Informasi','sks'=>'3 sks'],
                 6=> ['nomor matakuliah'=>'SYS0781B','nama matakuliah'=>'Supply Chain Management','sks'=>'4 sks ']
                 
             ];

    public function index()
    {
        return view('listMatakuliah')->with('matakuliah',$this->matakuliah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMatakuliah');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
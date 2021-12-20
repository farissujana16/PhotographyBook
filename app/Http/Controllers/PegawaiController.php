<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peg = Pegawai::where('posisi', 'pegawai')->get();
        return view('back/pegawai', ['isi' => $peg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Pegawai;
        $tambah->nama_peg = $request->nama;
        $tambah->tgl_lahir = $request->tanggal;
        $tambah->email = $request->email;
        $tambah->pass = $request->password;
        $tambah->posisi = 'pegawai';
        $tambah->tim = $request->tim;
        $tambah->alamat = $request->alamat;
        $tambah->save();

        return redirect('/pegawai')->with('status', 'Data Berhasil Ditambahkan');
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
    public function edit($up)
    {
        $update = Pegawai::where('id_peg', $up)->get();
        return view('back/update', ['baru' => $update]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;


        Pegawai::where('id_peg', $id)
              ->update([
                'nama_peg' => $request->nama,
                'tgl_lahir' => $request->tanggal,
                'email' => $request->email,
                'pass' => $request->password,
                'alamat' => $request->alamat
              ]);

        return redirect('/pegawai')->with('status', 'Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $id = $request->id;
      Pegawai::destroy($id);
      return redirect('/pegawai');
    }
}

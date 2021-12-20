<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layan;
use App\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Layan::where('status', 'Pending')->get();
        return view('back/pesan', ['data' => $pesan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($pesan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pesan)
    {
        $coba = Layan::where('id_pesan', $pesan)->get();
        $coba2 = Pesanan::where('id_pesan', $pesan)->get();
        return view('back/edit', ['update' => $coba] , ['update2' => $coba2]);
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


        Pesanan::where('id_pesan', $id)
              ->update([
                'tim' => $request->tim,
                'status' => $request->status
              ]);


        return redirect('/pesan')->with('status', 'Pesanan Berhasil Diproses');

        // 'nama_cus' => $request->nama,
        // 'no_hp' => $request->hp,
        // 'lokasi' => $request->lokasi,
        // 'tanggal' => $request->tanggal,
        // 'nama_paket' => $request->paket,
        // 'harga_paket' => $request->harga,
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
        Pesanan::destroy($id);
        return redirect('/pesan');
    }
}

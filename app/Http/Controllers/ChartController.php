<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layan;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $satu = Layan::where('tanggal', 'like', '%2020%')->count();
      $dua = Layan::where('tanggal', 'like',  '%2021%')->count();
      $tiga = Layan::where('tanggal', 'like',  '%2022%')->count();
      $empat = Layan::where('tanggal', 'like',  '%2023%')->count();
      $lima = Layan::where('tanggal', 'like',  '%20204')->count();
      $enam = Layan::where('tanggal', 'like',  '%2025%')->count();
      $tujuh = Layan::where('tanggal', 'like',  '%2026%')->count();
      $delapan = Layan::where('tanggal', 'like',  '%2027%')->count();
      $sembilan = Layan::where('tanggal', 'like', '%2028%')->count();
      $sepuluh = Layan::where('tanggal', 'like', '%2029%')->count();
      $jumlah = $satu.", ".$dua.", ".$tiga.", ".$empat.", ".$lima.", ".$enam.", ".$tujuh.", ".$delapan.", ".
      $sembilan.", ".$sepuluh;
        return view('back/chart', ['tahun' => $jumlah]);
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

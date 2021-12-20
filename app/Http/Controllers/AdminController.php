<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Layan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now()->format('Y');
        $data = Layan::where('status', 'Success')->get();
        
        $jan = Layan::where('tanggal', 'like', '%Januari '.$now.'%')->count();
        $feb = Layan::where('tanggal', 'like', '%Februari '.$now.'%')->count();
        $mar = Layan::where('tanggal', 'like', '%Maret '.$now.'%')->count();
        $apr = Layan::where('tanggal', 'like', '%April '.$now.'%')->count();
        $mai = Layan::where('tanggal', 'like', '%Mai '.$now.'%')->count();
        $jun = Layan::where('tanggal', 'like', '%Juni '.$now.'%')->count();
        $jul = Layan::where('tanggal', 'like', '%Juli '.$now.'%')->count();
        $agus = Layan::where('tanggal', 'like', '%Agustus '.$now.'%')->count();
        $sep = Layan::where('tanggal', 'like', '%September '.$now.'%')->count();
        $okt = Layan::where('tanggal', 'like', '%Oktober '.$now.'%')->count();
        $nov = Layan::where('tanggal', 'like', '%November '.$now.'%')->count();
        $des = Layan::where('tanggal', 'like', '%Desember '.$now.'%')->count();
        $jumlah = $jan.", ".$feb.", ".$mar.", ".$apr.", ".$mai.", ".$jun.", ".$jul.", ".$agus.", ".
        $sep.", ".$okt.", ".$nov.", ".$des;
        return view('back/dashboard', ['tampil' => $data], ['jum' => $jumlah]);
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

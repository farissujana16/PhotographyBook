<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Paket;
use App\Customer;
use App\Pesanan;
use App\Foto;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      $paket = Paket::all();
      $foto = Foto::all();

        return view('front/welcome', ['data1' => $paket], ['gambar' => $foto]);
    }

    public function tampil($data)
    {

        return view('front/order', ['id' => $data ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cus = new Customer;
        $cus->nama_cus = $request->nama;
        $cus->alamat_cus = $request->alamat;
        $cus->no_hp = $request->telp;
        $cus->lokasi = $request->lokasi;
        $cus->tanggal = $request->tanggal;
        $cus->pesan = $request->pesan;
        $cus->save();

        $user = Customer::orderBy('id_cus', 'desc')->get()->first();

        $pes = new Pesanan;
        $pes->id_cus = $user->id_cus;
        $pes->id_paket = $request->id;
        $pes->tim = 'None';
        $pes->status = 'Pending';
        $pes->save();

        return redirect('/')->with('status', 'Pemesanan Berhasil Dilakukan');
    }
}

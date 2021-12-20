<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $email = $request->email;
        $pass = $request->pass;

        $login = Pegawai::where(['email'=>$email])->first();
        if (!$login) {
            return redirect('/admin')->with('status', 'Akun Tidak Terdaftar');
        }else {
          if ($login->email == $email AND $login->pass == $pass AND $login->posisi == 'admin'){
            return redirect('/dashboard');
          }elseif ($login->email == $email AND $login->pass == $pass AND $login->posisi == 'pegawai') {
            return redirect("/member/$login->id_peg");
          }else{
            return redirect('/admin')->with('status', 'Password atau e-mail salah');
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('back/login');
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

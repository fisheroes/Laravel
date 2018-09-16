<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CRUDcontroller extends Controller
{
    public function form(Request $r) {
        
        if($r->isMethod('post')){
            $nama = $r->input('nama');
            $email = $r->input('email');
            $tanggalLahir = $r->input('tanggalLahir');
            $alamat = $r->input('alamat');
            $data = $nama.', '.$email.', '.$tanggalLahir.', '.$alamat;
            
            $filename = $nama.' - '.date('dmYHis').'.txt';
            $save=Storage::disk('public')->put($filename,$data);
            if($save){
                return view('feedb', ['filename'=>$filename]);
            } else {
                echo'<div class="alert alert-warning alert-dismissible" align="center">
                 <strong>Gagal Tambah Data !</strong> Cek kembali username / password 
                 </div>';
                return View ('form');
            }
        }
        return View('form');
    }
    public function feedb($filename) {
        return View ('feedb',['filename' => $filename]);
    }
}
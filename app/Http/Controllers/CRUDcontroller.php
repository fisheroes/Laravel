<?php

namespace App\Http\Controllers;

use App\crudModel;
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
            
            $rules = [
                'nama' => 'required',
                'email' => 'required|email',
                'tanggalLahir' => 'required|date|date_format:Y-m-d|before:now|after:1900-01-01',
                'alamat' => 'required'];
            $msg = [
                'nama.required' => 'NAMA tidak boleh kosong',
                'email.required' => 'EMAIL tidak boleh kosong',
                'email.email' => 'format EMAIL salah',
                'tanggalLahir.required' => 'TANGGAL LAHIR tidak boleh kosong',
                'tanggalLahir.date' => 'format TANGGAL LAHIR salah',
                'tanggalLahir.before' => 'TANGGAL LAHIR harus sebelum hari ini',
                'tanggalLahir.after' => 'TANGGAL LAHIR harus diatas 01 Januari 1900',
                'alamat.required' => 'ALAMAT tidak boleh kosong'];
            $this->validate($r, $rules, $msg);
            
            $content = $nama.', '.$email.', '.$tanggalLahir.', '.$alamat;
            $filename = $nama.' - '.date('dmYHis').'.txt';
            $save=Storage::disk('public')->put($filename,$content);
            $data = array(
                'nama' => $nama,
                'email' => $email,
                'tanggalLahir' => $tanggalLahir,
                'alamat' => $alamat,
                'filename' => $filename
            );
            $savedb= crudModel::insert($data);
            if($save&&$savedb){
                return redirect()->action('CRUDcontroller@feedb', ['filename' => $filename]);;
            }
            
        }
        return View('form');
    }
    public function feedb($filename) {
        $data = crudModel::all();
        return View ('feedb')->with('filename',$filename)->with('crud',$data);
    }
    
    public function error(){
        return View ('error');
    }
    
    protected function failedValidation(Validator $validator)
{
    throw new HttpResponseException(response()->json($validator->errors(), 422));
}
}
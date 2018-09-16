@extends('layout')
@section('title')
Login
@endsection

@section('content')
<div class="">
    <h1>TERIMA KASIH TELAH MENGISI FORM</h1><br>
    <h5>Klik link dibawah ini untuk membuka File hasil</h5>
    <td><a href="{{asset('app/public/'.$filename)}}" align='center'>{{$filename}}</a></td>
</div>
        
<br><br>
<a href="{{url()->previous()}}">Kembali</a>
@endsection
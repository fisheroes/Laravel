@extends('layout')
@section('title')
Login
@endsection

@section('content')
<div class="">
    <h1>TERIMA KASIH TELAH MENGISI FORM</h1><br>
    <h5>Klik link dibawah ini untuk membuka File hasil</h5>
    <td><a href="{{asset('app/public/'.$filename)}}" align='center'>{{$filename}}</a></td>
</div><br>
<a href="{{ url('/') }}">Kembali</a><br><br>
<table class="table table-dark table-hover table-bordered text-body" style="text-align: center">
    <tr class="text-white">
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>File</th>
    </tr>
@foreach($crud as $row)
    <tr class="text-white">
        <td>{{$row->nama}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->tanggalLahir}}</td>
        <td>{{$row->alamat}}</td>
        <td><a href="{{asset('app/public/'.$row->filename)}}">{{$row->filename}}</a></td>
        </tr>
@endforeach
</table>
@endsection
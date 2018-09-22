@extends('layout')
@section('title')
Login
@endsection

@section('content')

<form method='post'>
    {{csrf_field()}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <table class="table table-dark col-7" align="center">
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="tanggalLahir">Tanggal Lahir :</label></td>
            <td><input type="date" id="tanggalLahir" name="tanggalLahir" value="{{ old('tanggalLahir') }}" class="form-control "></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat :</label></td>
            <td><textarea id="alamat" name="alamat" class="form-control" rows="4">{{ old('alamat') }}</textarea></td>
        </tr>
    </table>
    <br>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
@endsection
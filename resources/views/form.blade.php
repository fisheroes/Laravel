@extends('layout')
@section('title')
Login
@endsection

@section('content')

<form method='post'>
    {{csrf_field()}}
    <table class="table table-dark col-7" align="center">
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" id="nama" name="nama" class="form-control" required
                       oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong !')"
                       oninput="setCustomValidity('')"></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" id="email" name="email" class="form-control" required></td>
        </tr>
        <tr>
            <td><label for="tanggalLahir">Tanggal Lahir :</label></td>
            <td>
                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control " required
                           oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong !')"
                           oninput="setCustomValidity('')">
            </td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat :</label></td>
            <td><textarea id="alamat" name="alamat" class="form-control" rows="4" required
                        oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong !')"
                        oninput="setCustomValidity('')"></textarea></td>
        </tr>
    </table>
    <br>
    <div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="berhasil">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        
        <div class="modal fade" role="dialog" id="berhasil">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Info</h4>
                    </div>
                    <div class="modal-body">
                        <p>Data Berhasil Ditambahkan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" role="dialog" id="gagal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Info</h4>
                    </div>
                    <div class="modal-body">
                        <p>Data Gagal Ditambahkan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</form>
@endsection
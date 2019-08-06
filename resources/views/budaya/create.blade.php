@extends('layouts.dashboard')


@section("title") Tambah Seni Budaya @endsection 

@section('pageTitle') Tambah Seni Budaya @endsection

@section('content')

    <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <form enctype="multipart/form-data"  action="{{route('budaya.store')}}"  method="POST">
            @csrf
            <div>
            <label>Nama Seni Budaya</label>
                <input class="form-control" type="text" name="name">
            </div><br>

            <div>
            <label>Jenis Ragam Seni Budaya</label>
                <input type="text" name="jenis" class="form-control">
            </div><br>

            <div>
            <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div><br>

            <div>
            <label>Digunakan</label>
                <input type="number" name="digunakan" class="form-control">
            </div><br>

            <div>
            <label>Tersedia</label>
                <input type="number" name="tersedia" class="form-control">
            </div><br>

            <div class="form-row">
                <label>Gambar 1</label>
                <div class="col-md-12 mb-3">
                    <input type="file" class="form-control" id="gmbr1" name="gmbr1" placeholder="Gambar 1" >
                </div>

                <label>Gambar 2</label>
                <div class="col-md-12 mb-3">
                    <input type="file" class="form-control" id="gmbr2" name="gmbr2" placeholder="Gambar 2" >
                </div>

                <label>Gambar 3</label>
                <div class="col-md-12 mb-3">
                    <input type="file" class="form-control" id="gmbr3" name="gmbr3" placeholder="Gambar 3" >
                </div>

                <label>Gambar 4</label>
                <div class="col-md-12 mb-3">
                    <input type="file" class="form-control" id="gmbr4" name="gmbr4" placeholder="Gambar 4" >
                </div>

            </div>


            <input type="submit" class="btn btn-primary" value="Tambah">
            </form> 
            </div>
    </div>
@endsection

@extends('layouts.dashboard')


@section("title") Ubah Seni Budaya @endsection 

@section('pageTitle') Ubah Seni Budaya @endsection

@section('content')

    <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <form enctype="multipart/form-data" action="{{route('budaya.update', ['id' => $budaya->id])}}" method="POST">
                    @csrf
            <input type="hidden"  value="PUT"  name="_method">

            <div>
            <label>Nama Seni Budaya</label>
                <input class="form-control" type="text" name="name" value="{{$budaya->nama}}">
            </div><br>

            <div>
            <label>Jenis Ragam Seni Budaya</label>
                <input type="text" name="jenis" class="form-control" value="{{$budaya->jenis}}">
            </div><br>

            <div>
            <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control" value="{{$budaya->jumlah}}">
            </div><br>

            <div>
            <label>Digunakan</label>
                <input type="number" name="digunakan" class="form-control" value="{{$budaya->digunakan}}">
            </div><br>

            <div>
            <label>Tersedia</label>
                <input type="number" name="tersedia" class="form-control" value="{{$budaya->tersedia}}">
            </div><br>

             <div class="form-row">
                    
                    <div class="col-md-12 mb-4">
                    <label for="gambar">Gambar 1 :</label>
                    <br>
                    @if($budaya->gambar1)
                    <img  src="{{asset('storage/'.$budaya->gambar1)}}" width="120px" />
                    <br>
                    @else 
                        No Gambar
                    @endif
                    <small  class="text-muted">Kosongkan jika tidak ingin mengubah baju</small>
                    <br> 
                    <div class="row">
                        <div class="col-md-4"> <input   id="gmbr1"   name="gmbr1"    type="file"  class="form-control"> </div>
                    </div>
                    </div>

                    <div class="col-md-12 mb-4">
                    <label for="gambar">Gambar 2 :</label>
                    <br>
                    @if($budaya->gambar2)
                    <img  src="{{asset('storage/'.$budaya->gambar2)}}" width="120px" />
                    <br>
                    @else 
                        No Gambar
                    @endif
                    <small  class="text-muted">Kosongkan jika tidak ingin mengubah baju</small>
                    <br> 
                    <div class="row">
                        <div class="col-md-4"> <input   id="gmbr2"   name="gmbr2"    type="file"  class="form-control"> </div>
                    </div>
                    </div>

                    <div class="col-md-12 mb-4">
                    <label for="gambar">Gambar 3 :</label>
                    <br>
                    @if($budaya->gambar3)
                    <img  src="{{asset('storage/'.$budaya->gambar3)}}" width="120px" />
                    <br>
                    @else 
                        No Gambar
                    @endif
                    <small  class="text-muted">Kosongkan jika tidak ingin mengubah baju</small>
                    <br> 
                    <div class="row">
                        <div class="col-md-4"> <input   id="gmbr3"   name="gmbr3"    type="file"  class="form-control"> </div>
                    </div>
                    </div>

                    <div class="col-md-12 mb-4">
                    <label for="gambar">Gambar 4 :</label>
                    <br>
                    @if($budaya->gambar4)
                    <img  src="{{asset('storage/'.$budaya->gambar4)}}" width="120px" />
                    <br>
                    @else 
                        No Gambar
                    @endif
                    <small  class="text-muted">Kosongkan jika tidak ingin mengubah baju</small>
                    <br> 
                    <div class="row">
                        <div class="col-md-4"> <input   id="gmbr4"   name="gmbr4"    type="file"  class="form-control"> </div>
                    </div>
                    </div>

                </div>

            <input type="submit" class="btn btn-primary" value="Ubah">
            </form> 
            </div>
    </div>
@endsection

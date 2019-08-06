@extends('layouts.dashboard')


@section("title") Tampil Seni Budaya @endsection 

@section('pageTitle') Tampil Seni Budaya @endsection

@section('content')

    @if(session('status'))
    <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            </div>
    </div>
    @endif 
            
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="input-group-append">
                    <a href="{{route('budaya.create')}}" class="btn btn-primary btn-sm">Tambah Seni Budaya</a>
                </div>
            </div>
            <div class="card-body">
                <hr class="border-bottom-primary">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th><b>Nama</b></th>
                        <th><b>Jenis</b></th>
                        <th><b>Jumlah</b></th>
                        <th><b>Digunakan</b></th>
                        <th><b>Tersedia</b></th>
                        <th><b>Actions</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($budaya as $budaya)
                        <tr>
                            <td>{{$budaya->nama}}</td>
                            <td>{{$budaya->jenis}}</td>
                            <td>{{$budaya->jumlah}}</td>
                            <td>{{$budaya->digunakan}}</td>
                            <td>{{$budaya->tersedia}}</td>
                            <td>
                            <form  class="d-inline" action="{{route('budaya.destroy', ['id' => $budaya->id])}}" 
                            method="POST" onsubmit="return confirm('Hapus Seni Budaya?')">
                            @csrf 
                            <input type="hidden"  value="DELETE"  name="_method">
                            <a href="{{route('budaya.show', ['id' => $budaya->id])}}" class="btn btn-info btn-sm mt-1"> Detail </a>
                            <a href="{{route('budaya.edit', ['id' => $budaya->id])}}" class="btn btn-info btn-sm mt-1"> Ubah </a>
                            <input  type="submit"  class="btn btn-danger btn-sm mt-1"  value="Hapus">
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                        <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
                    </table>
                </div>
        </div>
    </div>

@endsection

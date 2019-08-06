@extends('layouts.dashboard')


@section("title") Detail Seni Budaya @endsection 

@section('pageTitle') Detail Seni Budaya @endsection

@section('content')

    <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            @csrf
            <div>
            <label>Nama Seni Budaya : </label>
                <input class="form-control" value="{{$budaya->nama}}" readonly>
            </div><br>

            <div>
            <label>Jenis Ragam Seni Budaya : </label>
              <input class="form-control" value="{{$budaya->jenis}}" readonly>
            </div><br>

            <div>
            <label>Jumlah : </label>
              <input class="form-control" value="{{$budaya->jumlah}}" readonly>
            </div><br>

            <div>
            <label>Digunakan : </label>
              <input class="form-control" value="{{$budaya->digunakan}}" readonly>
            </div><br>

            <div>
            <label>Tersedia : </label>
              <input class="form-control" value="{{$budaya->tersedia}}" readonly>
            </div><br>

            <label>Gambar : </label>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <a href="{{asset('storage/'.$budaya->gambar1)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-3">
                            <img src="{{asset('storage/'.$budaya->gambar1)}}" class="img-fluid">
                        </a>
                        <a href="{{asset('storage/'.$budaya->gambar2)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-3">
                            <img src="{{asset('storage/'.$budaya->gambar2)}}" class="img-fluid">
                        </a>
                        <a href="{{asset('storage/'.$budaya->gambar3)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-3">
                            <img src="{{asset('storage/'.$budaya->gambar3)}}" class="img-fluid">
                        </a>
                        <a href="{{asset('storage/'.$budaya->gambar4)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-3">
                            <img src="{{asset('storage/'.$budaya->gambar4)}}" class="img-fluid">
                        </a>
                    </div>
                </div>
        </div>
<br>

            
                            <a href="{{route('budaya.edit', ['id' => $budaya->id])}}" class="btn btn-primary"> Ubah </a>
                            <a href="{{route('budaya.index'"  class="btn btn-primary"> Kembali </a>
            </div>
    </div>
@endsection

@section('footer-script')


<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

@endsection
@extends('layout.template')

@section('activeDataLaporan')
    activeku
@endsection

@section('title')
    Dashboard
@endsection

@section('namaMenu')
    <i class="fa fa-lg fa-angle-double-right"></i> Laporan
@endsection

@section('link')
    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
    {{-- <li class="breadcrumb-item active">Home</li> --}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="my-0 py-0">Form Cetak</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('cetak.peminjaman', []) }}" >
                    @csrf
                    <div class="modal-body text-left">
                        <div class='form-group'>
                            <label for='fortanggalawal' class='text-capitalize'>Tanggal Awal</label>
                            <input type='date' name='tanggalawal' id='fortanggalawal' class='form-control' placeholder='masukan tanggal awal'>
                        </div>
                        <div class='form-group'>
                            <label for='fortanggalakhir' class='text-capitalize'>Tanggal Akhir</label>
                            <input type='date' name='tanggalakhir' id='fortanggalakhir' class='form-control' placeholder='masukan tanggal akhir'>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection



@section('chart')
@endsection







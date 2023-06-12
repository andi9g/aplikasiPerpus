@extends('layout.template')

@section('activeDataPerpus')
    activeku
@endsection
@section('activeDataAnggota')
    activeku2
@endsection

@section('title')
    Data Anggota
@endsection



@section('namaMenu')
    <i class="fa fa-lg fa-angle-double-right"></i> Data Anggota
@endsection



@section('link')
    <li class="breadcrumb-item"><a href="{{ url('/', []) }}">Home</a></li>
    <li class="breadcrumb-item active">Data Anggota</li>
@endsection



@section('content')

<div class="card card-outline card-secondary">
  <div class="card-header">
      <div class="row">
        <div class="col text-left">
          <a href="{{ route('anggota.create') }}" class="btn btn-success">
              <i class="fa fa-plus"></i> &nbsp;Tambah Anggota
          </a>

        </div>
        <div class="col text-right">

        </div>



      </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="{{ url()->current() }}" class="d-inline">
          <div class="form-group top_search">
            <div class="input-group">
                <input type="text" class="form-control bgku3" name="keyword" value="{{empty($_GET['keyword'])?'':$_GET['keyword']}}" placeholder="Search for...">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"  type="button">Search</button>
                </span>
              </div>
            </div>
          </form>
      </div>
    </div>


    <table id="example2" class="table table-sm table-hover table-bordered table-striped tabelku">
      <thead>
      <tr align="center">
        <th>Nis</th>
        <th>Nama Anggota</th>
        <th>Posisi</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($anggota as $tampil)
        <tr style="text-transform: capitalize">
          <td align="center">{{$tampil->nis}}</td>
          <td nowrap>{{$tampil->namaAnggota}}</td>
          <td align="center" nowrap style="text-transform: uppercase">{{$tampil->jurusan}}</td>
          <td align="center" nowrap style="text-transform: uppercase">
            @if (Hash::check('perpus12345', $tampil->password))
              Default
            @else
              -
            @endif
          </td>
          <td nowrap class="text-center">
            <a href="{{ route('anggota.edit', $tampil->nis) }}" class="btn btn-info btn-xs px-2">
              <i class="fa fa-pencil"></i> Edit
            </a>

            <form action="{{ route('anggota.destroy', $tampil->nis) }}" method="post" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Yakin dihapus?..')" class="btn btn-danger btn-xs px-2">
                <i class="fa fa-trash"></i> Hapus
              </button>
            </form>

            <a href="{{ url('anggota/resetPassword/'.$tampil->nis) }}" onclick="return confirm('yakin direset?..')" class="btn btn-primary btn-xs px-2">
              <i class="fas fa-key"></i> RePass
            </a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>

    <div class="row align-content-center justify-content-center">
      <div class="col-12">
        <div class="card-body float-right">
          {{ $anggota->links('vendor.pagination.bootstrap-4') }}
        </div>
      </div>
    </div>


      <script>
        function tampilCetak()
        {
          var tampil = document.getElementById("cetakPilih").value;
          if(tampil=="berdasarkan"){
            document.getElementById("berdasarkanCari").style.display="block";
            document.getElementById("berdasarkanCari").disabled=false;
          }else{
            document.getElementById("berdasarkanCari").style.display="none";
            document.getElementById("berdasarkanCari").disabled=true;

          }
        }

      </script>
  </div>
</div>
@endsection













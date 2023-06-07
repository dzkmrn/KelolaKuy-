@extends('layouts.app')

@section('title', 'Jenis')

@extends('layouts.main')

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
        </div>
        <form class="form-left my-2" method="get" action="">
                    <div class="form-group w-70 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        <a class="btn btn-success right" href="{{ route('jenis.create') }}" style="margin-left:9.6cm">Input Jenis</a>
                    </div>
            </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container-md">
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>JENIS ALAT</th>
        <th>DESKRIPSI ALAT</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($jenis as $jeniss)
    <tr>
        <td>{{ $jeniss->id_jenis }}</td>
        <td>{{ $jeniss->jenis_alat }}</td>
        <td>{{ $jeniss->deskripsi_jenis }}</td>
        <td>
            <form action="{{ route('jenis.destroy',$jeniss->id_jenis) }}" method="POST">

                <a class="btn btn-info" href="{{ route('jenis.show',$jeniss->id_jenis) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('jenis.edit',$jeniss->id_jenis) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
</div>
    @endforeach
</table>
{!! $jenis ->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection
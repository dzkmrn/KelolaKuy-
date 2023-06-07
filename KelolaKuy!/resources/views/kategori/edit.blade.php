@extends('layouts.main')

@section('isi')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Kategori
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('kategori.update', $kategori->id_kategori) }}" id="myForm" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="id_kategori">ID Kategori</label>
                        <input type="text" name="id_kategori" class="form-control" id="id_kategori" value="{{ $kategori->id_kategori }}" ariadescribedby="id_kategori">
                    </div>
                    <div class="form-group">
                        <label for="kategori_alat">Kategori Alat</label>
                        <input type="text" name="kategori_alat" class="form-control" id="kategori_alat" value="{{ $kategori->kategori_alat }}" ariadescribedby="id_kategori">
                    </div>
                    <div class="form-group">
                        <label for="foto">Gambar</label>
                        <input type="file" class="form-control" required="required" name="foto" value="{{$kategori->foto}}"></br>
                        <img width="150px" src="{{asset('storage/'.$kategori->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_kategori">Deskripsi Kategori</label><br>
                        <input type="text" name="deskripsi_kategori" class="form-control" id="deskripsi_kategori" value="{{ $kategori->deskripsi_kategori }}" aria-describedby="deskripsi_kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
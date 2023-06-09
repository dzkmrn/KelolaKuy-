@extends('layouts.main')

@section('isi')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Alat
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
                <form method="post" action="{{ route('alat.update', $alat->id_alat) }}" id="myForm" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="id_alat">ID alat</label>
                        <input type="id_alat" name="id_alat" class="form-control" id="id_alat" value="{{ $alat->id_alat }}" ariadescribedby="id_alat">
                    </div>
                    <div class="form-group">
                        <label for="kategori">ID Kategori</label>
                        <select name="id_kategori" class="form-control">
                            @foreach ($kategori as $Kategori)
                            <option value="{{$Kategori->id_kategori}}">{{$Kategori->kategori_alat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis">ID Jenis</label>
                        <select name="id_jenis" class="form-control">
                            @foreach ($jenis as $Jenis)
                            <option value="{{$Jenis->id_jenis}}">{{$Jenis->jenis_alat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_alat">Nama Alat</label>
                        <input type="text" name="nama_alat" class="form-control" id="nama_alat" value="{{ $alat->nama_alat }}" ariadescribedby="nama_alat">
                    </div>
                    <div class="form-group">
                        <label for="foto_alat">Gambar</label>
                        <input type="file" class="form-control" required="required" name="foto_alat" value="{{$alat->foto_alat}}"></br>
                        <img width="150px" src="{{asset('storage/'.$alat->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="merk_alat">Merk Alat</label>
                        <input type="text" name="merk_alat" class="form-control" id="merk_alat" value="{{ $alat->merk_alat }}" ariadescribedby="merk_alat">
                    </div>
                    <div class="form-group">
                        <label for="stok_alat">Stok Alat</label>
                        <input type="text" name="stok_alat" class="form-control" id="stok_alat" value="{{ $alat->stok_alat }}" ariadescribedby="stok_alat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
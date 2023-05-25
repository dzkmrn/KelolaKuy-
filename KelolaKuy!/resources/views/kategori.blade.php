@extends('layouts.app')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>KelolaKuy!</h2>
 </div>
 
 </div>
 </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif


 <table class="table table-bordered">
 <tr>
 <th>id_kategori</th>
 <th>kategori_alat</th>
 <th>deskripsi_kategori</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($kategori as $kategoris)
 <tr>

 <td>{{ $kategoris->id_kategori }}</td>
 <td>{{ $kategoris->kategori_alat }}</td>
 <td>{{ $kategoris->deskripsi_kategori }}</td>
 <td>
 <form action="{{ route('kategori.destroy',$kategoris->id_kategori) }}" method="POST">

 <a class="btn btn-info" href="{{ route('kategori.show',$kategoris->id_kategori) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('kategori.edit',$kategoris->id_kategori) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 {!! $kategori ->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection
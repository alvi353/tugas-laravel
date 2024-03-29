@extends('template')

@section('main')
<h2>Tambah Data</h2>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">NIS</label>
      <input type="number" class="form-control @error('nis')
      is-invalid @enderror" name="nis" value="{{old('nis')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama')
      is-invalid @enderror" name="nama" value="{{old('nama')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" class="form-control @error('alamat')
      is-invalid @enderror" name="alamat" value="{{old('alamat')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
@endsection
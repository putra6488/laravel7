@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('content')
  <form action="{{route('tambang.s')}}" method="POST">
    @csrf
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Nama Barang @error('nama_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" value="{{old('nama_brg')}}" id="nama_brg" name="nama_brg">
    </div>
    <div class="form-group">
      <label @error('nama_brg')
          class="text-danger"
        @enderror>Tipe Barang @error('tipe_brg')
          {{$message}}
        @enderror </label>
      <input type="text" class="form-control" value="{{old('tipe_brg')}}" id="tipe_brg" name="tipe_brg">
    </div>
    <div class="form-group">
      <label @error('tahun_produksi')
        class="text-danger"
      @enderror>Tahun Produksi @error('tahun_produksi')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" value="{{old('tahun_produksi')}}" id="tahun_produksi" name="tahun_produksi">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
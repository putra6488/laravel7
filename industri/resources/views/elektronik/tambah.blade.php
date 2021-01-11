@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('content')
  <form action="{{route('elektro.s')}}" method="POST">
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
      @enderror>Harga Barang @error('harga_brg')
        {{$message}}
      @enderror </label>
      <input type="numeric" class="form-control" value="{{old('harga_brg')}}" id="harga_brg" name="harga_brg">
    </div>
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Merk Barang @error('merk_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" value="{{old('merk_brg')}}" id="merk_brg" name="merk_brg">
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
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Jumlah Barang @error('jumlah_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" value="{{old('jumlah_brg')}}" id="jumlah_brg" name="jumlah_brg">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
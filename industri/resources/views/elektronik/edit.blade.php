@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('content')
  <form action="{{route('elektro.u', $elektronik->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Nama Barang @error('nama_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" id="nama_brg" name="nama_brg"
      @if (old('nama_brg'))
        value="{{old('nama_brg')}}"
      @else
        value="{{$elektronik->nama_brg}}"
      @endif
      >
    </div>
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Harga Barang @error('harga_brg')
        {{$message}}
      @enderror </label>
      <input type="numeric" class="form-control" id="harga_brg" name="harga_brg"
      @if (old('nama_brg'))
        value="{{old('nama_brg')}}"
      @else
        value="{{ $elektronik->harga_brg }}"
      @endif
      >
    </div>
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Merk Barang @error('merk_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" value="{{$elektronik->merk_brg}}" id="merk_brg" name="merk_brg"
      @if (old('nama_brg'))
        value="{{old('nama_brg')}}"
      @else
        value="{{$elektronik->merk_brg}}"
      @endif>
    </div>
    <div class="form-group">
      <label @error('nama_brg')
          class="text-danger"
        @enderror>Tipe Barang @error('tipe_brg')
          {{$message}}
        @enderror </label>
      <input type="text" class="form-control" id="tipe_brg" name="tipe_brg"
      @if (old('nama_brg'))
        value="{{old('nama_brg')}}"
      @else
      value="{{$elektronik->tipe_brg}}"
      @endif>
    </div>
    <div class="form-group">
      <label @error('nama_brg')
        class="text-danger"
      @enderror>Jumlah Barang @error('jumlah_brg')
        {{$message}}
      @enderror </label>
      <input type="text" class="form-control" id="jumlah_brg" name="jumlah_brg"
      @if (old('nama_brg'))
        value="{{old('nama_brg')}}"
      @else
        value="{{$elektronik->jumlah_brg}}"
      @endif>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
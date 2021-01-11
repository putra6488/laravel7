@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('content')
  <form action="{{route('tambang.u', $pertambangan->id)}}" method="POST">
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
        value="{{$pertambangan->nama_brg}}"
      @endif
      >
    </div>
    <div class="form-group">
      <label @error('nama_brg')
          class="text-danger"
        @enderror>Tipe Barang @error('tipe_brg')
          {{$message}}
        @enderror </label>
      <input type="text" class="form-control" id="tipe_brg" name="tipe_brg"
      @if (old('nama_brg'))
        value="{{old('tipe_brg')}}"
      @else
      value="{{$pertambangan->tipe_brg}}"
      @endif>
    </div>
    <div class="form-group">
        <label @error('nama_brg')
            class="text-danger"
          @enderror>Tahun Produksi @error('tahun_produksi')
            {{$message}}
          @enderror </label>
        <input type="text" class="form-control" id="tahun_produksi" name="tahun_produksi"
        @if (old('tahun_produksi'))
          value="{{old('tahun_produksi')}}"
        @else
        value="{{$pertambangan->tahun_produksi}}"
        @endif>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
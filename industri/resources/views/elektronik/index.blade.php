@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('judul', 'Elektronik')
@section('content')
    <h3>Data Barang Elektronik</h3>
    <a href="{{route('elektro.t')}}" class="btn btn-primary">Add</a>
    @if (session()->get('success'))
        <div class="alert alert-warning alert-dismissible fade show mb-2 mt-2" role="alert">
            <strong>{{ session()->get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Merk</th>
            <th scope="col">Tipe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($elektronik as $no => $elektro)      
                <tr>
                    <td>{{ $elektronik->firstItem()+$no }}</td>
                    <td>{{ $elektro->nama_brg }}</td>
                    <td>{{ $elektro->merk_brg }}</td>
                    <td>{{ $elektro->tipe_brg }}</td>
                    <td>
                        <a href="{{ route('elektro.e', $elektro->id) }}" class="btn btn-success mb-2">Edit</a>
                        <form action="{{route('elektro.d', $elektro->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{ $elektronik->links() }}
@endsection
@extends('layouts.master')
@section('title', 'Home|Industri')
@section('header')
@section('sidebar')
@section('judul', 'Elektronik')
@section('content')
    <h3>Data Barang Pertambangan</h3>
    <a href="{{route('tambang.t')}}" class="btn btn-primary">Add</a>
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
            <th scope="col">Tipe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pertambangan as $no => $tambang)      
                <tr>
                    <td>{{ $pertambangan->firstItem()+$no }}</td>
                    <td>{{ $tambang->nama_brg }}</td>
                    <td>{{ $tambang->tipe_brg }}</td>
                    <td>
                        <a href="{{route('tambang.e', $tambang->id)}}" class="btn btn-success mb-2">Edit</a>
                        <form action="{{route('tambang.d', $tambang->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{ $pertambangan->links() }}
@endsection
@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Alternatif</h4>
                        {{-- <p class="card-category"> More data ?</p> --}}
                    <a href="{{ url('/') }}/alternatives/create" class="btn btn-secondary"> Tambah Data</a>
                    </div>
                    @if (session('pesan'))
                        <div class="alert alert-info">
                            <b>Sukses</b>:{{session('pesan')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Bobot
                                        </th>
                                        <th>
                                            Opsi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatives as $alternatif)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$alternatif->nama}} </td>
                                        <td> {{$alternatif->bobot}} </td>
                                        <td>
                                            <a href="/alternatives/{{$alternatif->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/alternatives/{{$alternatif->id}}" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

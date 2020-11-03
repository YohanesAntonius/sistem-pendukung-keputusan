@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Data Warga</h4>
                        <p class="card-category"> More data ?</p>
                    <a href="{{ url('/') }}/civilians/create" class="btn btn-secondary"> Tambah Data</a>
                    </div>
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
                                            Usia
                                        </th>
                                        <th>
                                            Status Pernikahan
                                        </th>
                                        <th>
                                            Pekerjaan
                                        </th>
                                        <th>
                                            Pendapatan Perbulan
                                        </th>
                                        <th>
                                            Status Tempat Tinggal
                                        </th>
                                        <th>
                                            Tanggungan
                                        </th>
                                        <th>
                                            Opsi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($civilians as $warga)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$warga->nama}} </td>
                                        <td> {{$warga->usia}} </td>
                                        <td> {{$warga->status_pernikahan}} </td>
                                        <td> {{$warga->pekerjaan}} </td>
                                        <td> {{$warga->pendapatan}} </td>
                                        <td> {{$warga->status_tinggal}} </td>
                                        <td> {{$warga->tanggungan}} </td>
                                        <td>
                                            <a href="/civilians/{{$warga->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/civilians/{{$warga->id}}" class="btn btn-sm btn-danger">Hapus</a>
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

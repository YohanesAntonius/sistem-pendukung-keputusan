@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Kriteria</h4>
                        <p class="card-category"> More data ?</p>
                    <a href="{{ url('/') }}/criterias/create" class="btn btn-secondary"> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        {{-- <th>
                                            No
                                        </th> --}}
                                        <th>
                                            Bobot
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
                                    @foreach ($criterias as $kriteria)
                                    <tr>
                                        {{-- <td> {{ $loop->iteration }}</td> --}}
                                        <td> {{$kriteria->bobot}} </td>
                                        <td> {{$kriteria->usia}} </td>
                                        <td> {{$kriteria->status_pernikahan}} </td>
                                        <td> {{$kriteria->pekerjaan}} </td>
                                        <td> {{$kriteria->pendapatan}} </td>
                                        <td> {{$kriteria->status_tinggal}} </td>
                                        <td> {{$kriteria->tanggungan}} </td>
                                        <td>
                                            <a href="/criterias/{{$kriteria->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/criterias/{{$kriteria->id}}" class="btn btn-sm btn-danger">Hapus</a>
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

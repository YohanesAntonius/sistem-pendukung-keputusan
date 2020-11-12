@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Data</h4>
                        {{-- <p class="card-category">Complete your profile</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/civilians">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nama" class="bmd-label-floating">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="usia" class="bmd-label-floating">Usia</label>
                                        <input type="text" id="usia" name="usia" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="status_pernikahan" class="bmd-label-floating">Status Pernikahan</label>
                                        <input type="text" id="status_pernikahan" name="status_pernikahan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="pekerjaan" class="bmd-label-floating">Pekerjaan</label>
                                        <input type="text" id="pekerjaan" name="pekerjaan" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="pendapatan" class="bmd-label-floating">Pendapatan Perbulan</label>
                                        <input type="text" id="pendapatan" name="pendapatan" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="status_tinggal" class="bmd-label-floating">Status Tempat Tinggal</label>
                                        <input type="text" id="status_tinggal" name="status_tinggal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggungan" class="bmd-label-floating">Tanggungan</label>
                                        <input type="text" id="tanggungan" name="tanggungan" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                            {{-- <div class="clearfix"></div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

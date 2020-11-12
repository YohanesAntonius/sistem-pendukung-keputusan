@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Kriteria</h4>
                        {{-- <p class="card-category">Lengkapi Kriterianya</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/criterias">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="bobot" class="bmd-label-floating">Bobot</label>
                                        <br>
                                        <select name="bobot" id="bobot" class="form-control
                                        @error('bobot') is-invalid @enderror" placeholder="Masukkan Bobot ...">
                                        <option value="" disabled selected>Pilih Bobot...</option>
                                        <option value="1" {{ old('bobot') == "1" ? 'selected':'' }} >1</option>
                                        <option value="2" {{ old('bobot') == '2' ? 'selected':'' }} >2</option>
                                        <option value="3" {{ old('bobot') == '3' ? 'selected':'' }} >3</option>
                                        <option value="4" {{ old('bobot') == '4' ? 'selected':'' }} >4</option>
                                        </select>
                                    @error('bobot') <span class="invalid-feedback">{{ $message }}</span> @enderror
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

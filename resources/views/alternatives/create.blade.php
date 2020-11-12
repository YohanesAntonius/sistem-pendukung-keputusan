@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Alternatif</h4>
                        {{-- <p class="card-category">Lengkapi Kriterianya</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/alternatives">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label for="nama" class="bmd-label-floating">Nama</label>
                                    <br>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                    placeholder="Masukkan Nama ...">
                                </div>
                            </div>
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
                            </div>
                              <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                              <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout.app')

@section('title', '1822250042')


@section('header')
<div class="bg-light shadow shadow-sm text-primary">
    <p class="p-1 font-weight-bold pl-3">UNIVERSITAS ABCD</p>
</div>
@endsection

<!-- Sidebar -->
@section('sidebar')
@parent
@endsection
<!-- Sidebar -->

@section('judul')
<h4 class="card-title">Input Data Bimbingan Mahasiswa
    <span>
        <a href="{{ url('/bimbingan') }}" class="btn btn-sm btn-primary float-right">Back</a>
    </span>
</h4>
@endsection

@section('content')
<form action="{{route ('bimbingan.store') }}" method="POST">
    <div class="form-group row">
        <label for="npm" class="col-sm-2 col-form-label">Mahasiswa</label>
        <div class="col-sm-10">
            <input type="text" name="mahasiswa" class="form-control" placeholder="Nama Mahasiswa" required>
        </div>
    </div>
    <div class="form-group row">
        <legend class="col-form-label col-sm-2 pt-0">Prodi</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="AK" checked>
                <label class="form-check-label" for="gridRadios1">
                    Akuntansi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="MJ">
                <label class="form-check-label" for="gridRadios2">
                    Manajemen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="SI">
                <label class="form-check-label" for="gridRadios3">
                    Sistem Informasi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="TI">
                <label class="form-check-label" for="gridRadios4">
                    Teknik Informatika
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Nama Dosen</label>
        <div class="col-sm-10">
            <input type="text" name="dosen" class="form-control" placeholder="Nama Dosen" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Tanggal Bimbingan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{Date("d-m-Y H:i")}}" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Materi Bimbingan</label>
        <div class="col-sm-10">
            <textarea name="materi_bimbingan" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input type="submit" class="float-right btn btn-primary btn-sm" value="Input">
    </div>
</form>
@endsection
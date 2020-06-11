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
<h4 class="card-title">Update Jadwal Bimbingan Mahasiswa
    <span>
        <a href="{{ url('/bimbingan') }}" class="btn btn-sm btn-primary float-right">Back</a>
    </span>
</h4>
@endsection

@section('content')
<form action="{{route ('bimbingan.update', $bimbingan->id) }}" method="POST">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    {{ method_field('PUT') }}
    <div class="form-group row">
        <label for="npm" class="col-sm-2 col-form-label">Mahasiswa</label>
        <div class="col-sm-10">
            <input type="text" name="mahasiswa" class="form-control" value="{{$bimbingan->mahasiswa}}">
        </div>
    </div>
    <div class="form-group row">
        <legend class="col-form-label col-sm-2 pt-0">Prodi</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="AK"
                    {{($bimbingan->prodi == "AK")? "checked":""}}>
                <label class="form-check-label" for="gridRadios1">
                    Akuntansi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="MJ"
                    {{($bimbingan->prodi == "MJ")? "checked":""}}>
                <label class="form-check-label" for="gridRadios2">
                    Manajemen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="SI"
                    {{($bimbingan->prodi == "SI")? "checked":""}}>
                <label class="form-check-label" for="gridRadios3">
                    Sistem Informasi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="prodi" value="TI"
                    {{($bimbingan->prodi == "TI")? "checked":""}}>
                <label class="form-check-label" for="gridRadios4">
                    Teknik Informatika
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2 pt-0">Nama Dosen</label>
        <div class="col-sm-10">
            <input type="text" name="dosen" class="form-control" value="{{$bimbingan->dosen}}" required>
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
            <textarea name="materi_bimbingan" class="form-control">{{$bimbingan->materi_bimbingan}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="float-right btn btn-primary btn-sm" value="Update">
    </div>
 
</form>
@endsection
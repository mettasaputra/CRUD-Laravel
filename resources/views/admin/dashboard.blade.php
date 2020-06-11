@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('header')
    @parent
    <center>Halaman Dashboard Admin</center>
    <hr/>
@endsection

@section('sidebar')
    <div class="col-md-4">
        @parent
        <p>
            <a href="#">Menu 1</a> <br/>
            <a href="#">Menu 2</a>
        </p>
    </div>
@endsection

@section('content')
    <div class="col-md-8">
        <p>Halaman Dashboard</p>
    </div>
@endsection
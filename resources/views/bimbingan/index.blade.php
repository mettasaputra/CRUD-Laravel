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
<h4 class="card-title">Jadwal Bimbingan Mahasiswa
    <span>
        @php
        $domain = explode("@", Auth::user()->email)
        @endphp
        @if($domain[1] == "mhs.mdp.ac.id")
        <a href="{{url('/bimbingan/create')}}" class="btn btn-sm btn-primary float-right">Input Jadwal</a>
        @endif
    </span>
</h4>
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
        {{session('status')}}
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="table-responsive">
    <table class="table table-sm table-hover table-bordered">
        <thead class="bg-primary">
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Prodi</th>
            <th>Dosen</th>
            <th>Materi Bimbingan</th>
            <th>Tanggal Bimbingan</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            @php
            $no = 1
            @endphp
            @foreach($bimbingan as $a)
            <tr>
                <td class="align-middle text-center">{{$no++}}</td>
                <td class="align-middle">{{$a->mahasiswa}}</td>
                @if(($a->prodi) == "TI")
                <td class="align-middle text-center">Teknik Informatika</td>
                @elseif(($a->prodi) == "SI")
                <td class="align-middle text-center">Sistem Informasi</td>
                @elseif(($a->prodi) == "AK")
                <td class="align-middle text-center">Akuntansi</td>
                @else
                <td class="align-middle text-center">Manajemen</td>
                @endif
                <td class="align-middle">{{$a->dosen}}</td>
                <td class="align-middle text-center">{{date("d-m-Y H:i", strtotime($a->tgl_bimbingan))}}</td>
                <td class="align-middle text-center">{{$a->materi_bimbingan}}</td>
                <td class="align-middle text-center">

                    @if($domain[1] == "mhs.mdp.ac.id")
                    <a href="{{ url('/bimbingan/'.$a->id.'/edit') }}" class="btn btn-primary btn-sm">Update</a>
                    @endif

                    @if($domain[1] == "mdp.ac.id" || $domain[1] == "dosen.mdp.ac.id")
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#modelId{{$a->id}}">
                        Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modelId{{$a->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Alert!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-left">
                                    Anda yakin ingin menghapus jadwal ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-dismiss="modal">Close</button>
                                    <form action="{{ route ('bimbingan.destroy', $a->id) }}" method="POST">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
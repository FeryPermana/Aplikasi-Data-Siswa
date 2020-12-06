@php
$no = 1;
@endphp
@extends('layouts/global')
@section('pages')
<h1 class="judul m-0 font-weight-bold text-primary">{{ $PageTitle }}</h1>
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="judul m-0 font-weight-bold text-primary">Data Tables Example</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('kelas.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_kelas" placeholder="Masukan kelas" name="nama_kelas">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection

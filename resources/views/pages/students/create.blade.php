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
                <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" placeholder="Masukan siswa" name="nama_siswa">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Kelas</label>
                        <select class="form-control" name="id_kelas" id="id_kelas" class="form-control select2">
                            <option>-- Pilih Kelas --</option>
                            @foreach ($kelas as $items)
                            <option value="{{ $items->id }}">{{ $items->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor</label>
                        <input type="number" class="form-control" id="no" placeholder="Masukan kelas" name="no">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIS</label>
                        <input type="number" class="form-control" id="nis" placeholder="Masukan nis" name="nis">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection

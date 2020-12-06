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
                <form method="POST" action="{{ route('extrastudents.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Siswa</label>
                        <select class="form-control" name="id_students" id="id_students" class="form-control select2">
                            <option>-- Pilih Nama --</option>
                            @foreach ($students as $items)
                            <option value="{{ $items->id }}">{{ $items->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Extra</label>
                        <select class="form-control" name="id_extra" id="id_extra" class="form-control select2">
                            <option>-- Pilih Extra --</option>
                            @foreach ($extra as $items)
                            <option value="{{ $items->id }}">{{ $items->nama_extra }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection

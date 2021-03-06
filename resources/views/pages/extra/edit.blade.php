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
                <form method="POST" action="{{ route('extra.update', [$items->id]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Extra</label>
                        <input type="text" class="form-control" id="nama_extra" placeholder="Masukan kelas" name="nama_extra" value="{{ $items->nama_extra }}">
                    </div>
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection

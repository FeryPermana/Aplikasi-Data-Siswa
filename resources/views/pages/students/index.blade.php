@php
$no = 1;
@endphp
@extends('layouts/global')
@section('pages')
<h1 class="judul">{{ $PageTitle }}</h1>
<div class="container-fluid">
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="judul m-0 font-weight-bold text-primary">Data Table Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama siswa</th>
                            <th>Nama Kelas</th>
                            <th>Nomor</th>
                            <th>Nis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->no }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>
                                <a href=" {{ route('students.edit',[$item->id]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('students.destroy', [$item->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

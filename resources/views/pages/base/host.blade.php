@extends('template.master')
@section('main')

@php
$i = 1;
@endphp
<div class="d-flex justify-content-between">
    <h4 class="">List Host</h4>
    <div class="mx-4">
        <a href="{{route('main.admin.host.new')}}" class="btn btn-primary">Tambah Host</a>
    </div>
</div>
<hr>
<div class="table col-md-12">
    <table id="myTable">
        <thead class="text-center">
            <tr>
                <th style="width: 50px;">No.</th>
                <th style="width: 150px;">Gambar</th>
                <th style="width: 100px;">Nama</th>
                <th style="width: 50px;">Usia</th>
                <th style="width: 100px;">Jenis Kelamin</th>
                <th style="width: 200px;">Alamat</th>
                <th style="width: 100px;">Hari Kerja</th>
                <th style="width: 150px;">Handphone</th>
                <th style="width: 150px;">Niche</th>
                <th style="width: 200px;">Lain lainnya</th>
                <th style="width: 150px;">Tgl Daftar</th>
                <th style="width: 100px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $host)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $host->images }}</td>
                <td>{{ $host->name }}</td>
                <td>{{ $host->age }}</td>
                <td>{{ $host->kelamin }}</td>
                <td>{{ $host->address }}</td>
                <td>{{ $host->days }}</td>
                <td>{{ $host->handphone }}</td>
                <td>{{ $host->niche }}</td>
                <td>{{ $host->other }}</td>
                <td>{{ $host->created_at->format('Y-m-d') }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('main.admin.host.update', [$host->id])}}" class="mx-1 btn btn-warning btn-sm">Update</a>
                        <a href="{{route('main.admin.host.delete', [$host->id])}}" class="mx-1 btn btn-danger btn-sm">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

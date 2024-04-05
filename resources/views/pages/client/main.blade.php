@extends('template.master')
@section('main')

@php
$i = 1;
@endphp
<div class="d-flex justify-content-between">
    <h4 class="">List Host</h4>
    <div class="mx-4">
        <a href="{{route('client.new')}}" class="btn btn-primary">Tambah Client</a>
    </div>
</div>
<hr>
<div class="table col-md-12">
    <table id="myTable">
            <thead class="text-center">
                <tr>
                    <th>Nama Client</th>
                    <th>Nomor HP Client</th>
                    <th>Link Toko Client</th>
                    <th>Harga & Sesi Live</th>
                    <th>Status Pembayaran</th>
                    <th>Status Live</th>
                    <th>Kategori Produk</th>
                    <th>Host Terpilih</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <tbody class="text-center">
                @foreach($data as $client)
                <tr>
                    <td>{{ $client->nama_client }}</td>
                    <td>{{ $client->hanphone_client }}</td>
                    <td>{{ $client->link_toko_client }}</td>
                    <td>{{ $client->harga_sesi_live }}</td>
                    <td>{{ $client->status_pembayaran }}</td>
                    <td>{{ $client->status_live }}</td>
                    <td>{{ $client->kategori_produk }}</td>
                    @php
                    $host = DB::table('hosts')->where('id', $client->host_terpilih)->first();
                    @endphp
                    <td>{{ $host->name }}</td>
                    <td>

                        <div class="d-flex">
                            <a href="{{route('client.update', [$client->id])}}" class="mx-1 btn btn-warning btn-sm">Update</a>
                            <a href="{{route('client.delete', [$client->id])}}" class="mx-1 btn btn-danger btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>

@endsection

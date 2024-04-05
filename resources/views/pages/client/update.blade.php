@extends('template.master')
@section('main')
<h4>Update Client</h4>
<hr>
<form method="POST" action="{{ route('client.post.update', $client->id) }}">
    @csrf
    @method('PUT')
    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="nama_client" class="m-2">Nama Client</label>
        </div>
        <input type="text" id="nama_client" placeholder="Nama Client" required name="nama_client" value="{{ $client->nama_client }}" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="hanphone_client" class="m-2">Nomor HP Client</label>
        </div>
        <input type="text" id="hanphone_client" placeholder="Nomor HP Client" required name="hanphone_client" value="{{ $client->hanphone_client }}" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="link_toko_client" class="m-2">Link Toko Client</label>
        </div>
        <input type="text" id="link_toko_client" placeholder="Link Toko Client" required name="link_toko_client" value="{{ $client->link_toko_client }}" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="harga_sesi_live" class="m-2">Harga & Sesi Live</label>
        </div>
        <input type="text" id="harga_sesi_live" placeholder="Harga & Sesi Live" name="harga_sesi_live" value="{{ $client->harga_sesi_live }}" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="status_pembayaran" class="m-2">Status Pembayaran</label>
        </div>
        <select id="status_pembayaran" name="status_pembayaran" class="form-control col-md-9">
            <option value="Lunas" @if($client->status_pembayaran == 'Lunas') selected @endif>Lunas</option>
            <option value="Belum Lunas" @if($client->status_pembayaran == 'Belum Lunas') selected @endif>Belum Lunas</option>
        </select>
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="status_live" class="m-2">Status Live</label>
        </div>
        <select id="status_live" name="status_live" class="form-control col-md-9">
            <option value="Aktif" @if($client->status_live == 'Aktif') selected @endif>Aktif</option>
            <option value="Tidak Aktif" @if($client->status_live == 'Tidak Aktif') selected @endif>Tidak Aktif</option>
        </select>
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="kategori_produk" class="m-2">Kategori Produk</label>
        </div>
        <input type="text" id="kategori_produk" placeholder="Kategori Produk" required name="kategori_produk" value="{{ $client->kategori_produk }}" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="host_terpilih" class="m-2">Host Terpilih</label>
        </div>
        <select id="host_terpilih" name="host_terpilih" class="form-control col-md-9">
            <!-- Tambahkan opsi host terpilih di sini -->
          @foreach ($host as $hs)
          <option value="{{$hs->id}}" @if($client->host_terpilih == $hs->id) selected @endif>{{$hs->name}}</option>
          @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection

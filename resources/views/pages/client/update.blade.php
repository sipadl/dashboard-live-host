@extends('template.master')

@section('main')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Update Client</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="POST" action="{{ route('client.post.update', $client->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="nama_client" class="col-md-2 col-form-label">Nama Client</label>
                <div class="col-md-9">
                    <input type="text" id="nama_client" placeholder="Nama Client" required name="nama_client" value="{{ $client->nama_client }}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="hanphone_client" class="col-md-2 col-form-label">Nomor HP Client</label>
                <div class="col-md-9">
                    <input type="text" id="hanphone_client" placeholder="Nomor HP Client" required name="hanphone_client" value="{{ $client->hanphone_client }}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="link_toko_client" class="col-md-2 col-form-label">Link Toko Client</label>
                <div class="col-md-9">
                    <input type="text" id="link_toko_client" placeholder="Link Toko Client" required name="link_toko_client" value="{{ $client->link_toko_client }}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_sesi_live" class="col-md-2 col-form-label">Harga & Sesi Live</label>
                <div class="col-md-9">
                    <input type="text" id="harga_sesi_live" placeholder="Harga & Sesi Live" name="harga_sesi_live" value="{{ $client->harga_sesi_live }}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="status_pembayaran" class="col-md-2 col-form-label">Status Pembayaran</label>
                <div class="col-md-9">
                    <select id="status_pembayaran" name="status_pembayaran" class="form-control">
                        <option value="Lunas" @if($client->status_pembayaran == 'Lunas') selected @endif>Lunas</option>
                        <option value="Belum Lunas" @if($client->status_pembayaran == 'Belum Lunas') selected @endif>Belum Lunas</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="status_live" class="col-md-2 col-form-label">Status Live</label>
                <div class="col-md-9">
                    <select id="status_live" name="status_live" class="form-control">
                        <option value="Aktif" @if($client->status_live == 'Aktif') selected @endif>Aktif</option>
                        <option value="Tidak Aktif" @if($client->status_live == 'Tidak Aktif') selected @endif>Tidak Aktif</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori_produk" class="col-md-2 col-form-label">Kategori Produk</label>
                <div class="col-md-9">
                    <input type="text" id="kategori_produk" placeholder="Kategori Produk" required name="kategori_produk" value="{{ $client->kategori_produk }}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="host_terpilih" class="col-md-2 col-form-label">Host Terpilih</label>
                <div class="col-md-9">
                    <select id="host_terpilih" name="host_terpilih" class="form-control">
                        <!-- Tambahkan opsi host terpilih di sini -->
                        @foreach ($host as $hs)
                        <option value="{{$hs->id}}" @if($client->host_terpilih == $hs->id) selected @endif>{{$hs->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.box-body -->
</div>
@endsection

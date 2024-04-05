@extends('template.master')

@section('main')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Client</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="POST" action="{{ route('client.post.new') }}">
            @csrf
            <div class="form-group">
                <label for="nama_client">Nama Client</label>
                <input type="text" id="nama_client" placeholder="Nama Client" required name="nama_client" class="form-control">
            </div>

            <div class="form-group">
                <label for="hanphone_client">Nomor HP Client</label>
                <input type="text" id="hanphone_client" placeholder="Nomor HP Client" required name="hanphone_client" class="form-control">
            </div>

            <div class="form-group">
                <label for="link_toko_client">Link Toko Client</label>
                <input type="text" id="link_toko_client" placeholder="Link Toko Client" required name="link_toko_client" class="form-control">
            </div>

            <div class="form-group">
                <label for="harga_sesi_live">Harga & Sesi Live</label>
                <input type="text" id="harga_sesi_live" placeholder="Harga & Sesi Live" name="harga_sesi_live" class="form-control">
            </div>

            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran</label>
                <select id="status_pembayaran" name="status_pembayaran" class="form-control">
                    <option value="Lunas">Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status_live">Status Live</label>
                <select id="status_live" name="status_live" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kategori_produk">Kategori Produk</label>
                <input type="text" id="kategori_produk" placeholder="Kategori Produk" required name="kategori_produk" class="form-control">
            </div>

            <div class="form-group">
                <label for="host_terpilih">Host Terpilih</label>
                <select id="host_terpilih" name="host_terpilih" class="form-control">
                    <!-- Tambahkan opsi host terpilih di sini -->
                    @foreach ($host as $hs)
                    <option value="{{ $hs->id }}">{{ $hs->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection

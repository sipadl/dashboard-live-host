@extends('template.master')
@section('main')
<h4>Tambah Client</h4>
<hr>
<form method="POST" action="{{route('client.post.new')}}">
    @csrf
    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="nama_client" class="m-2">Nama Client</label>
        </div>
        <input type="text" id="nama_client" placeholder="Nama Client" required name="nama_client" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="hanphone_client" class="m-2">Nomor HP Client</label>
        </div>
        <input type="text" id="hanphone_client" placeholder="Nomor HP Client" required name="hanphone_client" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="link_toko_client" class="m-2">Link Toko Client</label>
        </div>
        <input type="text" id="link_toko_client" placeholder="Link Toko Client" required name="link_toko_client" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="harga_sesi_live" class="m-2">Harga & Sesi Live</label>
        </div>
        <input type="text" id="harga_sesi_live" placeholder="Harga & Sesi Live" name="harga_sesi_live" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="status_pembayaran" class="m-2">Status Pembayaran</label>
        </div>
        <select id="status_pembayaran" name="status_pembayaran" class="form-control col-md-9">
            <option value="Lunas">Lunas</option>
            <option value="Belum Lunas">Belum Lunas</option>
        </select>
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="status_live" class="m-2">Status Live</label>
        </div>
        <select id="status_live" name="status_live" class="form-control col-md-9">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="kategori_produk" class="m-2">Kategori Produk</label>
        </div>
        <input type="text" id="kategori_produk" placeholder="Kategori Produk" required name="kategori_produk" class="form-control col-md-9">
    </div>

    <div class="row input mb-2">
        <div class="label col-md-2">
            <label for="host_terpilih" class="m-2">Host Terpilih</label>
        </div>
        <select id="host_terpilih" name="host_terpilih" class="form-control col-md-9">
            <!-- Tambahkan opsi host terpilih di sini -->
          @foreach ($host as $hs)
          <option value="{{$hs->id}}">{{$hs->name}}</option>
          @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>
@endsection

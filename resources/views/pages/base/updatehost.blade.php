@extends('template.master')

@section('main')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Update Host</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{ route('main.admin.host.post.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(session()->has('success'))
            <div class="col-md-11">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="form-group">
                <label for="name">Nama Host</label>
                <input type="text" placeholder="Nama Host" required name="name" value="{{$data->name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="images">Gambar Host</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Pilih gambar</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="age">Usia Host</label>
                <input type="number" min="0" placeholder="Usia Host" required name="age" value="{{$data->age}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="gender">Jenis Kelamin Host</label>
                <select name="kelamin" class="form-control">
                    <option value="Laki-laki" {{$data->kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="Perempuan" {{$data->kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="days">Hari Kerja</label>
                <input type="number" min="0" placeholder="Hari Kerja" required name="days" value="{{$data->days}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Alamat Host</label>
                <textarea rows="4" placeholder="Alamat Host" required name="address" class="form-control">{{$data->address}}</textarea>
            </div>

            <div class="form-group">
                <label for="hanphone">No Hanphone</label>
                <input type="text" value="{{$data->handphone}}" placeholder="No Handphone" required name="handphone" class="form-control">
            </div>

            <div class="form-group">
                <label for="niche">Niche Lainnya</label>
                <textarea rows="4" placeholder="Niche Lainnya" required name="niche" class="form-control">{{$data->niche}}</textarea>
            </div>

            <div class="form-group">
                <label for="other">Lain-lain</label>
                <textarea rows="4" placeholder="Lain-lain" required name="other" class="form-control">{{$data->other}}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Simpan Data</button>
                <a class="btn btn-warning mx-1" href="{{route('main.admin.host')}}">Kembali</a>
            </div>
        </form>
    </div>
    <!-- /.box-body -->
</div>
@endsection

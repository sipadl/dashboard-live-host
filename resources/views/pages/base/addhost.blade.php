@extends('template.master')
@section('main')

<div class="">
    <h4>Update Host</h4>
</div>


<hr>
<div class="flex">
    <form action="{{ route('main.admin.host.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if(session()->has('success'))
        <div class="col-md-11">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
        @endif
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Nama Host</label>
            </div>
                <input type="text" placeholder="Nama Host" required name="name" class="form-control col-md-9">
        </div>

        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Usia Host</label>
            </div>
            <div class="col-md-9 custom-file ">
                <div class="mb-3">
                    <input required type="file" name="images" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Usia Host</label>
            </div>
                <input type="number" min=0 placeholder="Usia Host" required name="age" class="form-control col-md-9">
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Jenis Kelamin Host</label>
            </div>
            <select name="gender" id="" class="form-control col-md-9">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Hari Kerja</label>
            </div>
            <input type="number" min=0 placeholder="Hari Kerja" required name="days" class="form-control col-md-9">
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Alamat Host</label>
            </div>
                <textarea rows="4" type="text" placeholder="Alamat Host" required name="address" class="form-control col-md-9"></textarea>
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">No Hanphone</label>
            </div>
                <input type="text" placeholder="No Hanphone" required name="hanphone" class="form-control col-md-9">
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Niche Lainnya</label>
            </div>
                <textarea rows="4" type="text" placeholder="Niche Lainnya" required name="niche" class="form-control col-md-9"></textarea>
        </div>
        <div class="row input mb-2">
            <div class="label col-md-2">
                <label for="" class="m-2">Lain-lain</label>
            </div>
                <textarea rows="4" type="text" placeholder="Lain-lainn" required name="other" class="form-control col-md-9"></textarea>
        </div>
        <div class="row input">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="mt-2" style="float: right">
                    <button class="btn btn-primary btn-lg" type="submit">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

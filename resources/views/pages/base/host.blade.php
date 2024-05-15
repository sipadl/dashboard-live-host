@extends('template.master')

@section('main')
<div class="box">
    <div class="box-header with-border">
        <div class="flex justify-content-between">
            <div>
                {{-- <h4>List Host</h4> --}}
            </div>
            <div class="row">

            <div class="col-xs-1 mx-4 p-2">
                <a href="{{route('main.admin.host.new')}}" class="btn btn-primary">Tambah Host</a>
            </div>
        </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable">
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
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $host)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="{{ @asset($host->image)}}" class="img-responsive img-thumbnail" width="60" height="60" alt="..."></td>
                        <td>{{ $host->name }}</td>
                        <td>{{ $host->age }}</td>
                        <td>{{ $host->kelamin }}</td>
                        <td>{{ $host->address }}</td>
                        <td>{{ $host->days }}</td>
                        <td>{{ $host->hanphone }}</td>
                        <td>{{ $host->niche }}</td>
                        <td>{{ $host->other }}</td>
                        <td>{{ $host->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('client.jadwal', [$host->id])}}" class="mx-1 btn btn-primary btn-sm mt-4">Schedule</a>
                                <a href="{{route('main.admin.host.update', [$host->id])}}" class="mx-1 btn btn-warning btn-sm mt-4">Update</a>
                                <a href="{{route('main.admin.host.delete', [$host->id])}}" class="mx-1 btn btn-danger btn-sm mt-4">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection

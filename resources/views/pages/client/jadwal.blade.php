@extends('template.master')
@section('main')
<style>
    .mx {
        margin-left: 2rem;
        margin-right: 2rem;
    }
</style>
<div class = "" > <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header mx">
                <h3 class="box-title">Kalender Jadwal</h3>
            </div>
            <!-- Button trigger modal -->
            <button
                type="button"
                class="btn btn-primary mx"
                data-toggle="modal"
                data-target="#inputModal">
                Tambah Jadwal
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="inputModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="inputModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="inputModalLabel">Tambah Jadwal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('client.jadwal.post', [$data->id])}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="harga">Tanggal:</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="harga"
                                        placeholder="Masukkan Harga"
                                        name="tanggal"></div>
                                <div class="form-group">
                                    <label for="harga">Harga:</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="harga"
                                        placeholder="Masukkan Harga"
                                        name="harga"></div>
                                    <div class="form-group">
                                        <label for="jadwal">Jadwal:</label>
                                        <select class="form-control" id="jadwal" name="live_session">
                                            <option value="08-10">08:00 - 10:00</option>
                                            <option value="10-12">10:00 - 12:00</option>
                                            <option value="12-14">12:00 - 14:00</option>
                                            <option value="14-16">14:00 - 16:00</option>
                                            <option value="16-18">16:00 - 18:00</option>
                                            <option value="18-20">18:00 - 20:00</option>
                                            <option value="20-22">20:00 - 22:00</option>
                                            <option value="22-00">22:00 - 00:00</option>
                                        </select>
                                    </div>
                                        <div class="form-group">
                                            <label for="notes">Notes:</label>
                                            <input type="text" name="jadwal_notes" class="form-control" id="notes" placeholder="Masukkan Notes"></div>
                                            <div class="form-group">
                                            <label for="paymentStatus">Payment Status:</label>
                                            <select name="payment_status" class="form-control" id="">
                                                <option value="Lunas">Lunas</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="paymentStatus">Live Status:</label>
                                            <select name="live_status" class="form-control" id="">
                                                <option value="Selesai">Selesai</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                            </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table class="table table-bordered mx">
                                            <thead>
                                                <tr>
                                                    <th>Harga</th>
                                                    <th>Live Session</th>
                                                    <th>Client</th>
                                                    <th>Jadwal + Notes</th>
                                                    <th>Nama</th>
                                                    <th>WA</th>
                                                    <th>Payment Status</th>
                                                    <th>Status Live</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $time = ['08-10','10-12','12-14','14-16','16-18','18-20','20-22'];
                                                    $sum = 0
                                                @endphp

                                                @foreach($time as $t)
                                                    @php
                                                        $matched = false;
                                                    @endphp

                                                    @foreach($list as $ls)
                                                        @php

                                                            if ($ls->live_session == $t) {
                                                                $matched = true;
                                                                $host = DB::table('hosts')->where('id', $data->host_terpilih)->first();
                                                                $sum += $ls->harga;
                                                            }
                                                        @endphp

                                                        @if($matched)
                                                            <tr>
                                                                <td>{{ $ls->harga }}</td>
                                                                <td>{{ $ls->live_session }}</td>
                                                                <td>{{ $data->nama_client }}</td>
                                                                <td>{{ $ls->tanggal }}</td>
                                                                <td>{{ $host ? $host->name : '' }}</td>
                                                                <td>{{ $data->hanphone_client }}</td>
                                                                <td>{{ $ls->payment_status }}</td>
                                                                <td>{{ $ls->live_status }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$ls->id}}">
                                                                        Edit
                                                                    </button>
                                                                    <!-- Modal Edit -->
                                                                    <div class="modal fade" id="editModal{{$ls->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$ls->id}}" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="editModalLabel{{$ls->id}}">Edit Data</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <!-- Form untuk mengedit data -->
                                                                                    <form action="{{ route('jadwal.put', $ls->id) }}" method="POST">
                                                                                        @csrf
                                                                                        <!-- Masukkan input untuk setiap kolom yang ingin diedit -->
                                                                                        <div class="form-group">
                                                                                            <label for="jadwal">Jadwal:</label>
                                                                                            <select class="form-control" id="jadwal" name="live_session">
                                                                                                <option value="08-10" {{ $ls->live_session == '08-10' ? 'selected' : '' }}>08:00 - 10:00</option>
                                                                                                <option value="10-12" {{ $ls->live_session == '10-12' ? 'selected' : '' }}>10:00 - 12:00</option>
                                                                                                <option value="12-14" {{ $ls->live_session == '12-14' ? 'selected' : '' }}>12:00 - 14:00</option>
                                                                                                <option value="14-16" {{ $ls->live_session == '14-16' ? 'selected' : '' }}>14:00 - 16:00</option>
                                                                                                <option value="16-18" {{ $ls->live_session == '16-18' ? 'selected' : '' }}>16:00 - 18:00</option>
                                                                                                <option value="18-20" {{ $ls->live_session == '18-20' ? 'selected' : '' }}>18:00 - 20:00</option>
                                                                                                <option value="20-22" {{ $ls->live_session == '20-22' ? 'selected' : '' }}>20:00 - 22:00</option>
                                                                                                <option value="22-00" {{ $ls->live_session == '22-00' ? 'selected' : '' }}>22:00 - 00:00</option>
                                                                                            </select>

                                                                                        <div class="form-group">
                                                                                            <label for="harga">Harga</label>
                                                                                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $ls->harga }}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="paymentStatus">Payment Status:</label>
                                                                                            <select name="live_status" class="form-control" id="">
                                                                                                <option value="Selesai" {{ $ls->payment_status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                                                                                <option value="Pending" {{ $ls->payment_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="paymentStatus">Live Status:</label>
                                                                                            <select name="live_status" class="form-control" id="">
                                                                                                <option value="Selesai" {{ $ls->live_status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                                                                <option value="Pending" {{ $ls->live_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <!-- Tambahkan input untuk kolom-kolom lainnya -->
                                                                                        <!-- Pastikan Anda menyesuaikan atribut name dan value sesuai dengan data yang ingin diedit -->

                                                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </td>
                                                            </tr>
                                                            @break <!-- Keluar dari loop setelah menemukan kesesuaian -->
                                                        @endif
                                                    @endforeach

                                                    @if(!$matched)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $t }}</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                <tr>
                                                    <td colspan="6">Total</td>
                                                    <td colspan="">{{ $sum }}</td>
                                                </tr>
                                            </tbody>




                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                        <!-- /.row -->

                        @endsection

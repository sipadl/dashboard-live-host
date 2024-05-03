@extends('template.master')
@section('main')

<div class = "" > <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="row" style="margin-left:8px">
                <div class="col-xs-1" style="margin: 0px 10px 10px 10px">
            <div class="box-header mx">
                {{-- <h3 class="box-title">Kalender Jadwal</h3> --}}
            </div>
            <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn btn-primary mx"
                        data-toggle="modal"
                        data-target="#inputModal">
                        Tambah Jadwal
                    </button>
                </div>
                <style>
                    .mx {
                        margin-left: 2rem;
                        margin-right: 2rem;
                    }
                    table .tables2 {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        th, td {
                            /* border: 1px solid #ddd; */
                            padding: 10px;
                            text-align: center;
                        }

                        th {
                            background-color: #f2f2f2;
                        }
                        .event {
                            background-color: lightgreen;
                        }

                        td {
                            height: 10px;
                        }

                        .empty-cell {
                            background-color: #f9f9f9;
                        }
                </style>
               <div class="col-xs-3" style="margin: 19px 10px 10px 10px">
                @php
                    // Ambil bulan dan tahun yang ditampilkan
                    if(isset($_GET['month']) && isset($_GET['year'])){
                        $currentMonth = $_GET['month'];
                        $currentYear = $_GET['year'];
                    } else {
                        $currentMonth = date('n');
                        $currentYear = date('Y');
                    }

                    // Hitung jumlah hari dalam bulan dan hari pertama dalam bulan
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
                    $firstDayOfMonth = date('N', strtotime("$currentYear-$currentMonth-01"));
                    $date = 1;
                    $events = []; // Inisialisasi array events

                    // Memasukkan tanggal-tanggal dari semua events ke dalam array $events
                    foreach ($list as $ls) {
                        // Ambil tanggal awal dan tanggal akhir event
                        $startDate = date('j', strtotime($ls['tanggal']));
                        $endDate = date('j', strtotime($ls['sampai_tanggal']));
                        $eventMonth = date('n', strtotime($ls['tanggal']));
                        $eventYear = date('Y', strtotime($ls['tanggal']));

                        // Cek apakah event berada dalam bulan yang dipilih
                        if ($eventMonth == $currentMonth && $eventYear == $currentYear) {
                            // Tambahkan semua tanggal antara tanggal awal dan tanggal akhir ke dalam array $events
                            for ($d = $startDate; $d <= $endDate; $d++) {
                                $events[] = $d;
                            }
                        }
                    }
                @endphp

                <table class="table table-bordeless">
                    <thead>
                        <tr>
                            <th colspan="4">
                                <!-- Input bulan -->
                                <input type="text" class="form-control" value="{{ date('F', mktime(0, 0, 0, $currentMonth, 1)) }}" readonly>
                            </th>
                            <th colspan="3">
                                <!-- Input tahun -->
                                <input type="text" class="form-control" value="{{ $currentYear }}" readonly>
                            </th>
                        </tr>
                        <tr>
                            <!-- Tombol panah ke bulan sebelumnya -->
                            <td colspan="4">
                                <a href="?month={{ ($currentMonth == 1) ? 12 : $currentMonth - 1 }}&year={{ ($currentMonth == 1) ? $currentYear - 1 : $currentYear }}" class="btn btn-secondary">&lt; Previous</a>
                            </td>

                            <!-- Tombol panah ke bulan berikutnya -->
                            <td colspan="4">
                                <a href="?month={{ ($currentMonth == 12) ? 1 : $currentMonth + 1 }}&year={{ ($currentMonth == 12) ? $currentYear + 1 : $currentYear }}" class="btn btn-secondary">Next &gt;</a>
                            </td>

                        </tr>
                        <tr>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                        </tr>
                    </thead>
                    <tbody>


                        @for ($i = 0; $i < 6; $i++)
                            <tr>
                                @for ($j = 0; $j < 7; $j++)
                                    @if ($i == 0 && $j < $firstDayOfMonth)
                                        <td class="empty-cell"></td>
                                    @elseif ($date > $daysInMonth)
                                        <td class="empty-cell"></td>
                                    @else
                                        {{-- Periksa apakah tanggal ada dalam array events --}}
                                        @if (in_array($date, $events))
                                            <td class="event">{{ $date }}</td>
                                        @else
                                            <td>{{ $date }}</td>
                                        @endif
                                        @php
                                            $date++;
                                        @endphp
                                    @endif
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            </div>
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
                                    <label for="harga">Dari Tanggal:</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="harga"
                                        placeholder="Masukkan Tanggal"
                                        requred
                                        name="tanggal"></div>
                                <div class="form-group">
                                    <label for="harga">Sampai Tanggal:</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="harga"
                                        placeholder="Masukkan Tanggal"
                                        requred
                                        name="sampai_tanggal"></div>
                                <div class="form-group">
                                    <label for="harga">Client:</label>
                                    <select
                                        type="text"
                                        class="form-control"
                                        id="harga"
                                        placeholder="Masukkan Client"
                                        requred
                                        name="client">
                                        @foreach($client as $c)
                                        <option value="{{$c->id}}">{{$c->nama_client}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga:</label>
                                    <input
                                        type="text"
                                        required
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
                                            <input type="text" required name="jadwal_notes" class="form-control" id="notes" placeholder="Masukkan Notes"></div>
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
                                                    <th width="80px">Jadwal</th>
                                                    <th>Notes</th>
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
                                                                $host = DB::table('clients')->where('id', $ls->client)->first();
                                                                $sum += $ls->harga;
                                                            }
                                                        @endphp

                                                        @if($matched)
                                                            <tr>
                                                                <td>{{ $ls->harga }}</td>
                                                                <td>{{ $ls->live_session }}</td>
                                                                <td>{{ $host->nama_client }}</td>
                                                                <td>
                                                                <table>
                                                                    <thead>
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="4">{{ date('M', strtotime($ls['tanggal'])); }}</th>
                                                                                <th colspan="4">{{ date('Y', strtotime($ls['tanggal'])); }}</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Senin</th>
                                                                                <th>Selasa</th>
                                                                                <th>Rabu</th>
                                                                                <th>Kamis</th>
                                                                                <th>Jumat</th>
                                                                                <th>Sabtu</th>
                                                                                <th>Minggu</th>
                                                                            </tr>
                                                                            </thead>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $currentMonth = date('n');
                                                                            $currentYear = date('Y');
                                                                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
                                                                            $firstDayOfMonth = date('N', strtotime("$currentYear-$currentMonth-01"));
                                                                            $date = 1;
                                                                            $waktu = [];
                                                                            // Ambil tanggal awal dan tanggal akhir event
                                                                            $startDate = date('j', strtotime($ls['tanggal']));
                                                                            $endDate = date('j', strtotime($ls['sampai_tanggal']));

                                                                            // Tambahkan semua tanggal antara tanggal awal dan tanggal akhir ke dalam array $events
                                                                            for ($d = $startDate; $d <= $endDate; $d++) {
                                                                                $waktu[] = $d;
                                                                            }
                                                                        @endphp
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                        <tr>
                                                                            @for ($j = 0; $j < 7; $j++)
                                                                                @if ($i == 0 && $j < $firstDayOfMonth)
                                                                                    <td class="empty-cell"></td>
                                                                                @elseif ($date > $daysInMonth)
                                                                                    <td class="empty-cell"></td>
                                                                                @else
                                                                                    {{-- Periksa apakah tanggal ada dalam array events --}}
                                                                                    @if (in_array($date, $waktu))
                                                                                        <td class="event">{{ $date }}</td>
                                                                                    @else
                                                                                        <td>{{ $date }}</td>
                                                                                    @endif
                                                                                    @php
                                                                                        $date++;
                                                                                    @endphp
                                                                                @endif
                                                                            @endfor
                                                                        </tr>
                                                                    @endfor
                                                                </tbody>
                                                                </table>
                                                                </td>
                                                                <td>{{ $ls->jadwal_notes }}</td>
                                                                <td>{{ $data->name }}</td>
                                                                <td>{{ $data->hanphone }}</td>
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
                                                                                        <label for="harga">Dari Tanggal:</label>
                                                                                        <input
                                                                                            type="date"
                                                                                            class="form-control"
                                                                                            id="harga"
                                                                                            placeholder="Masukkan Tanggal"
                                                                                            requred
                                                                                            value={{$ls->tanggal}}
                                                                                            name="tanggal"></div>
                                                                                        <div class="form-group">
                                                                                        <label for="harga">Sampai Tanggal:</label>
                                                                                        <input
                                                                                            type="date"
                                                                                            class="form-control"
                                                                                            id="harga"
                                                                                            placeholder="Masukkan Tanggal"
                                                                                            requred
                                                                                            value={{$ls->sampai_tanggal}}
                                                                                            name="sampai_tanggal"></div>
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
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="Client">Client:</label>
                                                                                            <select class="form-control" id="client" name="client">
                                                                                                @foreach ($client as $cl)
                                                                                                <option value="{{$cl->id}}" {{ $cl->id == $ls->client ? 'selected' : '' }}>{{$cl->nama_client}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="harga">Harga</label>
                                                                                            <input required type="text" class="form-control" id="harga" name="harga" value="{{ $ls->harga }}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="notes">Notes:</label>
                                                                                            <input type="text" required name="jadwal_notes" class="form-control" id="notes" value="{{$ls->jadwal_notes}}" placeholder="Masukkan Notes"></div>
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

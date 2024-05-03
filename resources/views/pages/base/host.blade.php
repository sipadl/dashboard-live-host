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
                foreach ($lists as $ls) {
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

@extends('template.master')
@section('main')

<div class = "" > <div class="row">
<div class="col-xs-12">
<div class="box">
<div class="row" style="margin-left:8px">
<div class="col-xs-3" style="margin: 0px 10px 10px 10px">
<h3 class="box-title">Total Data Harga</h3>
</div>
</div>

<div class="box-body">
<table class="table table-bordered mx">
<thead>
<tr>
<th>No.</th>
<th>Harga</th>
<th>Live Session</th>
<th>Client</th>
<th>WA</th>
<th>Notes</th>
<th>Host</th>
<th>Dari Tanggal</th>
<th>Sampai Tanggal</th>
<th>Durasi</th>
<th>Total</th>
<th>Status Live</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@php
$no = 1;
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
$host = DB::table('clients')->where('id', $data->id)->first();

$tanggal = new DateTime($ls->tanggal);
$sampai_tanggal = new DateTime($ls->sampai_tanggal);

// Calculate the difference
$difference = $tanggal->diff($sampai_tanggal);

// Get the duration in days, hours, minutes, and seconds
$days = $difference->d;
$hours = $difference->h;
$minutes = $difference->i;
$seconds = $difference->s;

$sum += $ls->harga * $days;
}
@endphp

@if($matched)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $ls->harga }}</td>
<td>{{ $ls->live_session }}</td>
<td>{{ $host->nama_client }}</td>
<td>{{ $host->hanphone_client }}</td>
<td>{{ $ls->jadwal_notes }}</td>
<td>{{ $data->name }}</td>
<td>{{ $ls->tanggal }}</td>
<td>{{ $ls->sampai_tanggal }}</td>
<td>{{ $days }}</td>
<td>{{ $days * $ls->harga }}</td>
<td>{{ $ls->payment_status }}</td>
<td>{{ $ls->live_status }}</td>
<td>
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

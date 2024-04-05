<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Live Hub</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wyjlM3PpMz8KrmFg07JvbdpAjrT9rdtaQ6WL8SMyITcKG42zJjPnEV+XxcGmd4i4bZ54uM+e77KZf8LCpYI27A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add your custom styles here */
        .sidebar {
            position: unset;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            padding: 20px;
            background-color: #f8f9fa;
            transition: all 0.3s;
            z-index: 1000; /* Set higher z-index than the content */
        }
    </style>
    @yield('css')
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="#">Your Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        disini
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li> --}}
        </ul>
    </div>
</nav>

<div class="row">
    <div class="col-md-2">
        <div class="sidebar" id="sidebar">
            <div class="list-group">
                <a href="{{ route('main.admin.host')}}" class="list-group-item bg-dark text-light list-group-item-action mb-2 border-0">Dashboard</a>
                <a href="{{ route('main.admin.host')}}" class="list-group-item bg-dark text-light list-group-item-action mb-2 border-0">Host</a>
                <a href="{{ route('client')}}" class="list-group-item bg-dark text-light list-group-item-action mb-2 border-0">Client</a>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="pt-5">
            @yield('main')
        </div>
    </div>
</div>



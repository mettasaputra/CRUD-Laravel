<!-- MASTER TEMPLATE -->
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        th {
            font-weight: normal;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    @section('header')
    <center>header</center>
    @show

    <div class="container-fluid">
        <div class="row">
            @section('sidebar')
            <div class="col-md-2">
                <div class="nav flex-column text-center">
                    <p class="text-center text-white">Hallo, {{ Auth::user()->name }}!</p>
                    <a class="nav-brand"><img src="http://www.webcoderskull.com/img/team4.png"
                            class="img-thumbnail mb-2"></a>
                    <a class="nav-link text-white active" href="{{url('/mahasiswa')}}">Jadwal Bimbingan</a>
                    <a class="nav-link text-white active" href="#">Data Dosen</a>
                    <a class="nav-link text-white" href="#">Profile Saya</a>
                    <br>
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                <hr class="bg-light">
                <footer class="text-white-50">
                    <div class=" text-center">
                        <small>&copy; 1822250042 <br> Metta Saputra</small>
                    </div>
                </footer>
            </div>
            @show
            <div class="col-md-10">
                <div class="container">
                    <div class="card text-left" style="height: 520px; overflow-y: auto;">
                        <div class="card-body">
                            @yield('judul')
                            <hr class="my-4">
                            <p class="card-text">
                                @yield('content')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('table').DataTable();
        });
    </script>
</body>

</html>
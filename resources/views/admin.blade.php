
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    @yield('css')

    <title>Admin</title>
</head>

<body>
    {{-- Section Sidebar --}}
    <div class="position-fixed shadow sidebar overflow-scroll">
        <div class="d-flex align-items-center ms-3 logo">
            <h5 class="fw-bold ms-4 align-items-center my-auto">3Koneksi</h5>
        </div>
        <div class="main-menu mt-5">
            {{-- <p class="mb-3 ms-3 fw-bold menu">Main Menu</p> --}}
            <ul class="sidebar-links list-unstyled d-flex flex-column gap-3">
                <li>
                        <div class="icon-links py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill=""
                                    d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                            </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Register
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Section Navbar --}}
    <div class="content position-relative">
        <nav class="navbar navbar-expand d-flex justify-content-between position-fixed">
            <div class="sidebar-btn">
                <i class="bx bx-menu sidebarBtn fs-1"></i>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center gap-2 text-decoration-none text-black fw-medium"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, Admin
                    <img src="" width="40">

                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <div class="container position-relative home-content">
            @yield('content')

        </div>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- sidebar -->
    <script>
        let sidebar = document.querySelector('.sidebar');
        let sidebarBtn = document.querySelector('.sidebarBtn');
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu")
        }
    </script>
    <!-- chart grafik -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var xValues = ["Samporna Mild", "Camel", "Marlboro Merah", "Marlboro Filter Black", "Surya 12", ""];
        var yValues = [1000, 500, 950, 970, 1100, 0];
        var barColors = ["red", "magenta","orange","orange","brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
                }]
            },
            options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Gudang Rokok"
                }
            }
        });
</script>
</body>

</html>

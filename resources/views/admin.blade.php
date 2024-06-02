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
                    {{-- <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                    <li><a class="dropdown-item" href="{{ route('home') }}">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <div class="container position-relative home-content">
            @yield('content')
            <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2 ms-2"
                onclick="location.href='{{route('pdfregister')}}'">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
                <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
                </svg>
                Generate Report
            </button>
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Perusahaan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Total Harga Stand</th>
                        <th>Total Harga Promosi</th>
                        <th>Paket Sponsor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($register as $rg)
                    <tr>
                        <td>{{$rg->nama}}</td>
                        <td>{{$rg->jabatan}}</td>
                        <td>{{$rg->perusahaan}}</td>
                        <td>{{$rg->alamat}}</td>
                        <td>{{$rg->telepon}}</td>
                        <td>{{$rg->email}}</td>
                        <td>{{$rg->totalhargastand}}</td>
                        <td>{{$rg->totalhargapromosi}}</td>
                        <td>{{$rg->paketsponsor}}</td>
                        <td>
                            {{-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#target{{ $rg->id }}">Edit</button> --}}
                            <form action="{{ route('register-delete',['id' => $rg->id]) }}" method="delete">
                                @csrf
                                <button type="submit" class="btn btn-dark">Delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- <div class="modal fade" id="target{{ $br->Id_BarangMasuk }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data Barang Masuk</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('barangmasuk-update', ['id' => $br->Id_BarangMasuk]) }}" method="post">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="id-barangmasuk" class="form-label">ID Barang Masuk</label>
                                        <input type="text" class="form-control input" id="id-barangmasuk" name="id_barangmasuk" placeholder="Masukkan ID Barang Masuk" value="{{$br->Id_BarangMasuk}}">
                                    </div>
                                    <div class="mb-4">
                                        <label for="id-pembelianbarang" class="form-label">ID Pembelian Barang</label>
                                        <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_pembelian">
                                            <option class="" value="">- Silahkan Pilih -</option>
                                            @foreach ($pembelian as $pb)
                                                <option value="{{ $pb->Id_Pembelian }}">{{ $pb->Id_Pembelian }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="id-admin" class="form-label">ID Admin</label>
                                        <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_admin">
                                            <option class="" value="">- Silahkan Pilih -</option>
                                            @foreach ($admin as $id)
                                                <option value="{{ $id->Id_Admin }}">{{ $id->Id_Admin }}</option>
                                            @endforeach
                                        </select>
                                    <div class="mb-4">
                                        <label for="tgl-barangmasuk" class="form-label">Tanggal Barang Masuk</label>
                                        <input type="date" class="form-control input" id="tgl-barangmasuk" name="tgl_barangmasuk" placeholder="Tanggal Barang Masuk" value="{{$br->Tanggal_Masuk}}">
                                    </div>
                                    <div class="mb-4">
                                        <label for="jml-barangmasuk" class="form-label">Jumlah Barang Masuk</label>
                                        <input type="number" class="form-control input" id="jml-barangmasuk" name="jml_barangmasuk" placeholder="Jumlah Barang Masuk" value="{{$br->Jumlah}}">
                                    </div>
                                    <button type="submit" class="btn btn-light py-2 px-5 rounded-3 w-100">Edit</button>
                                </form>
                            </div>            
                          </div>
                        </div>
                      </div> --}}
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Custom Theme files -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
            <div class="agileits-top">
                <h1>Malang Creative</h1>
                <form action="{{ route('register-store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control input" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-4">
                        <label for="jabatan" class="form-label text-white">Jabatan</label>
                        <input type="text" class="form-control input" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" required>
                    </div>
                    <div class="mb-4">
                        <label for="perusahaan" class="form-label text-white">Instansi / Perusahaan</label>
                        <input type="text" class="form-control input" id="perusahaan" name="perusahaan" placeholder="Masukkan Instansi / Perusahaan" required>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label text-white">Alamat</label>
                        <input type="text" class="form-control input" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="mb-4">
                        <label for="telepon" class="form-label text-white">Telepon & Fax</label>
                        <input type="text" class="form-control input" id="telepon" name="telepon" placeholder="Masukkan Telepon & Fax" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Website / Email</label>
                        <input type="email" class="form-control input" id="email" name="email" placeholder="Masukkan Website / Email" required>
                    </div>
                    <div class="mb-4">
                        <label for="standar" class="form-label text-white">Stand Standar Ukuran 2x3m, di Hall Atrium Malang City Point</label>
                        <div class="d-flex pe-3">
                            <input type="text" class="form-control input" id="hargastandar" value="5000000" disabled>
                            <input type="number" class="form-control input" id="jumlahstandar" oninput="perkalian()" name="jumlah_standar" placeholder="Jumlah Stand" required>
                        </div>
                        <input type="text" class="form-control input" id="totalhargastand" name="totalhargastand" placeholder="Total" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="promosi" class="form-label text-white">Stand Promosi Ukuran 2x3m, di Hall Atrium Malang City Point</label>
                        <div class="d-flex pe-3">
                            <input type="text" class="form-control input" id="hargapromosi" value="5000000" disabled>
                            <input type="number" class="form-control input" id="jumlahstandpromosi" oninput="perkalian2()" name="jumlah_promosi" placeholder="Jumlah Stand" required>
                        </div>
                        <input type="text" class="form-control input" id="totalhargapromosi" name="totalhargapromosi" placeholder="Total" readonly>
                    </div>
                    <label for="paketsponsor" class="form-label text-white">Paket Sponsorship</label><br>
                    <label><input type="radio" name="plan" value="silver" onchange="changeAmount()" required> Silver</label><br>
                    <label><input type="radio" name="plan" value="gold" onchange="changeAmount()" required> Gold</label><br>
                    <label><input type="radio" name="plan" value="platinum" onchange="changeAmount()" required> Platinum</label><br>
                    <label for="paketsponsor">Enter Amount:</label><br>
                    <input type="number" id="paketsponsor" name="paketsponsor" value="0" required><br><br>
                    <input type="submit" value="REGISTER">
                </form>
            </div>
        </div>
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function perkalian() {
            var hargastandar = parseFloat(document.getElementById("hargastandar").value);
            var jumlahstandar = parseFloat(document.getElementById("jumlahstandar").value);
            if (!isNaN(hargastandar) && !isNaN(jumlahstandar)) {
                var total = hargastandar * jumlahstandar * 0.11;
                var totalstandar = hargastandar * jumlahstandar - total;
                document.getElementById("totalhargastand").value = totalstandar;
            }
        }
    </script>
    <script>
        function perkalian2() {
            var hargapromosi = parseFloat(document.getElementById("hargapromosi").value);
            var jumlahstandpromosi = parseFloat(document.getElementById("jumlahstandpromosi").value);
            if (!isNaN(hargapromosi) && !isNaN(jumlahstandpromosi)) {
                var total2 = hargapromosi * jumlahstandpromosi * 0.11;
                var totalpromosi = hargapromosi * jumlahstandpromosi - total2;
                document.getElementById("totalhargapromosi").value = totalpromosi;
            }
        }
    </script>
    <script>
        function changeAmount() {
            var amountInput = document.getElementById("paketsponsor");
            var plan = document.querySelector('input[name="plan"]:checked').value;

            switch (plan) {
                case 'silver':
                    amountInput.value = 500000;
                    break;
                case 'gold':
                    amountInput.value = 750000;
                    break;
                case 'platinum':
                    amountInput.value = 1000000;
                    break;
                default:
                    amountInput.value = 0;
                    break;
            }
        }
    </script>
</body>

</html>

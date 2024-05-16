<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
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
                <form action="#" method="post">
                    <div class="mb-4">
                        <label for="nama" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control input" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-4">
                        <label for="jabatan" class="form-label text-white">Jabatan</label>
                        <input type="text" class="form-control input" id="jabatan" name="jabatan"
                            placeholder="Masukkan Jabatan">
                    </div>
                    <div class="mb-4">
                        <label for="perusahaan" class="form-label text-white">Instansi / Perusahaan</label>
                        <input type="text" class="form-control input" id="perusahaan" name="perusahaan"
                            placeholder="Masukkan Instansi / Perusahaan">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label text-white">Alamat</label>
                        <input type="text" class="form-control input" id="alamat" name="alamat"
                            placeholder="Masukkan Alamat">
                    </div>
                    <div class="mb-4">
                        <label for="telepon" class="form-label text-white">Telepon & Fax</label>
                        <input type="text" class="form-control input" id="telepon" name="telepon"
                            placeholder="Masukkan Telepon & Fax">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Website / Email</label>
                        <input type="text" class="form-control input" id="email" name="email"
                            placeholder="Masukkan Website / Email">
                    </div>
                    <div class="mb-4">
                        <label for="standar" class="form-label text-white">Stand Standar Ukuran 2x3m, di Hall Atrium
                            Malang City Point</label>
                        <div class="d-flex pe-3">
                            <input type="text" class="form-control input" id="hargastandar" oninput="perkalian()"
                                name="standar" value="5000000" disabled>
                            <input type="text" class="form-control input" id="jumlahstandar" oninput="perkalian()"
                                name="standar" placeholder="Jumlah Stand">
                        </div>
                        <input type="text" class="form-control input" id="totalstandar" name="standar"
                            placeholder="Total" disabled>
                    </div>
                    <div class="mb-4">
                        <label for="promosi" class="form-label text-white">Stand Promosi Ukuran 2x3m, di Hall Atrium
                            Malang City Point</label>
                        <div class="d-flex pe-3">
                            <input type="text" class="form-control input" id="hargapromosi" oninput="perkalian2()"
                                name="promosi" value="5000000" disabled>
                            <input type="text" class="form-control input" id="jumlahstandpromosi" oninput="perkalian2()"
                                name="promosi" placeholder="Jumlah Stand">
                        </div>
                        <input type="text" class="form-control input" id="totalpromosi" name="promosi"
                            placeholder="Total" disabled>
                    </div>
                    <label><input type="radio" name="plan" value="silver" onchange="changeAmount()"> Silver</label><br>
                    <label><input type="radio" name="plan" value="gold" onchange="changeAmount()"> Gold</label><br>
                    <label><input type="radio" name="plan" value="platinum" onchange="changeAmount()"> Platinum</label><br>
                    <label for="amount">Enter Amount:</label><br>
                    <input type="number" id="amount" name="amount" value="0"><br><br>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="REGISTER">
                </form>
                <!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->
            </div>
        </div>
        <!-- copyright -->
        <!-- <div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> -->
        <!-- //copyright -->
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
            var hargastandar = document.getElementById("hargastandar").value;
            var jumlahstandar = document.getElementById("jumlahstandar").value;
            var total = hargastandar * jumlahstandar * 0.11;
            var totalstandar = hargastandar * jumlahstandar - total;
            document.getElementById("totalstandar").value = totalstandar.toString();
        }

    </script>
    <script>
        function perkalian2() {
            var hargapromosi = document.getElementById("hargapromosi").value;
            var jumlahstandpromosi = document.getElementById("jumlahstandpromosi").value;
            var total2 = hargapromosi * jumlahstandpromosi * 0.11;
            var totalpromosi = hargapromosi * jumlahstandpromosi - total2;
            document.getElementById("totalpromosi").value = totalpromosi.toString();
        }

    </script>
    <script>
        function changeAmount() {
            var amountInput = document.getElementById("amount");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table,
        th,
        td {
            border: 1px solid black;
        }
        th,
        td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Register</h1>
    <table align="center">
        <thead>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $rg)
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

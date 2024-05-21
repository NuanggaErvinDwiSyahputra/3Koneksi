@extends('admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
@endsection

@section('title','Data Register')

@section('content')
{{-- Section Table --}}
<div class="d-flex align-items-center">
    <button class="btn-add mb-4 border-0 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2 ms-2"
       
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
            <path fill="black" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
            </svg>
        Generate Report
    </button>
</div>

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Instansi / Perusahaan</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Email</th>
            <th>Stand standard</th>
            <th>Stand Promosi</th>
            <th>Sponsor</th>
            <th>Action</th>
        </tr>
    </thead>
    
</table>
@endsection
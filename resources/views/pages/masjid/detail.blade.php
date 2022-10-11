@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Masjid {{ $masjid->nama }}</h1>
            </div> 
            
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-body">

                    <div style="margin-bottom: 8px;">
                        <a href="{{ route('masjid.index') }}" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> kembali
                        </a>
                        <a href="{{ route('masjid.edit', $masjid->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i> Edit
                        </a>
                    </div>

                    <table class="table table-bordered">    
                        <tr>
                            <th>Nama Masjid</th>
                            <td>{{ $masjid->nama }}</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td>{{ $masjid->penanggung_jawab }}</td>
                        </tr>
                        <tr>
                            <th>No.Telepon</th>
                            <td>{{ $masjid->nohp }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $masjid->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Warna</th>
                            <td>{{ $masjid->warna }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi Masjid</th>
                            <td>{{ $masjid->deskripsi }}</td>
                        </tr>
                        <tr>
                            <th>Gambar</th>
                            <td><img src="{{ asset('storage/'.$masjid->gambar) }}" class="img-thumbnail" style="width:40%;height:10%;"></td>
                        </tr>
                    </table>
                </div> 
            </div>

       </div>

@endsection

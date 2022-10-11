@extends('layouts.admin')
@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Masjid</h1>
                            <a href="{{ route('masjid.create') }}" class="btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i>Tambahkan Masjid
                            </a>
                        </div>

                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No</th>
                                            {{-- <th>Gambar</th> --}}
                                            <th>Nama Masjid</th>
                                            <th>Alamat</th>
                                            {{-- <th>Penanggung Jawab</th> --}}
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                            ?>
                                            @forelse ($masjids as $masjid)
                                            <tr>
                                                <?php
                                                $gambar = $masjid->gambar;
                                                ?>
                                                <td>{{ $no++ }}</td>
                                                {{-- <td><img src="{{ asset('storage/'.$masjid->gambar) }}"  style="width:20%;height:10%;"></td> --}}
                                                <td>{{ $masjid->nama }}</td>
                                                <td>{{ $masjid->alamat }}</td>
                                                {{-- <td>{{ $masjid->penanggung_jawab }}</td> --}}
                                                <td>{{ Str::words($masjid->deskripsi, 7) }}</td>
                                                
                                                <td>
                                                    <a href="{{ route('masjid.show', $masjid->id) }}" class="btn btn-primary">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('masjid.edit', $masjid->id) }}" class="btn btn-info">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('masjid.destroy', $masjid->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                            @empty 
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data kosong
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
                    <!-- /.container-fluid -->
@endsection



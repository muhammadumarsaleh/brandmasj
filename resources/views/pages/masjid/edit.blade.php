@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Masjid {{ $item->nama }}</h1>
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
                    <form action="{{ route('masjid.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Masjid</label>
                             <input type="text" id="nama" class="form-control @error('nama') is-invalid
                             @enderror" name="nama" placeholder="Name" value="{{ $item->nama }}">
                             @error('nama')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>


                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                             <textarea name="alamat" rows="10" class="d-block w-100 form-control @error('alamat') is-invalid
                             @enderror">{{ $item->alamat }}</textarea>
                             @error('alamat')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>


                        <div class="form-group">
                            <label for="warna">Warna kesukaan</label>
                             <input type="text" class="form-control @error('warna') is-invalid
                             @enderror" name="warna" placeholder="Warna kesukaan" value="{{ $item->warna }}">
                             @error('warna')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="penanggung_jawab">Penanggung Jawab</label>
                             <input type="text" class="form-control @error('penanggung_jawab..') is-invalid
                             @enderror" name="penanggung_jawab" placeholder="Penanggung Jawab" value="{{ $item->penanggung_jawab }}">
                             @error('penanggung_jawab')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="nohp">No. Telepon</label>
                             <input type="text" class="form-control" name="nohp" placeholder="No. Telepon.." value="{{ $item->nohp }}">
                             @error('nohp')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror  
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Singkat tentang Masjid</label>
                             <textarea name="deskripsi" rows="10" class="d-block w-100 form-control @error('deskripsi') is-invalid
                             @enderror">{{ $item->deskripsi }}</textarea>
                             @error('deskripsi')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div>
                                <img src="{{ asset('storage/'. $item->gambar) }}" class="img-thumbnail" style="width:20%;height:10%;">
                            </div>
                             <input type="file" class="form-control @error('gambar') is-invalid
                             @enderror" name="gambar" placeholder="Picture" accept="image/*" value="{{ $item->gambar }}">
                             @error('file')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Ubah
                        </button>
                    </form>
                </div> 
            </div>

       </div>

@endsection

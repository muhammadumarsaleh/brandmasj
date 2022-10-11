@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <input id="demo-input" type="text" value="rgb(255, 128, 0)" />

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftarkan Masjid Anda</h1>
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
                    <form action="{{ route('masjid.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Masjid</label>
                             <input type="text" id="nama" class="form-control @error('nama') is-invalid
                             @enderror" name="nama" placeholder="Nama Masjid.." value="{{ old('nama') }}" autofocus>
                             @error('nama')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                             <textarea name="alamat" rows="10" class="d-block w-100 form-control @error('alamat') is-invalid
                             @enderror">{{ old('alamat') }}</textarea>
                             @error('alamat')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="demo-input">Warna kesukaan</label>
                            
                             <input id="demo-input" type="text" class="form-control @error('warna') is-invalid
                             @enderror" name="warna" placeholder="Warna kesukaan" value="rgb(255, 128, 0)">
                             @error('warna')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        {{-- <div class="form-group"> --}}
                            {{-- <div class="card">
                                <div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
                                  <p>Click the dark square to activate the Color Picker</p>
                                  <div id="color-picker-1" class="mx-auto"></div>
                                </div>
                              </div> --}}
                        {{-- </div> --}}



                        <div class="form-group">
                            <label for="penanggung_jawab">Penanggung Jawab</label>
                             <input type="text" id="penanggung_jawab" class="form-control @error('penanggung_jawab') is-invalid
                             @enderror" name="penanggung_jawab" placeholder="Nama Masjid.." value="{{ old('penanggung_jawab') }}" autofocus>
                             @error('penanggung_jawab')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="nohp">No. Telepon</label>
                             <input type="text" id="nohp" class="form-control @error('nohp') is-invalid
                             @enderror" name="nohp" placeholder="No. Telepon" value="{{ old('nohp') }}" autofocus>
                             @error('nohp')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Singkat tentang Masjid</label>
                             <textarea name="deskripsi" rows="10" class="d-block w-100 form-control @error('deskripsi') is-invalid
                             @enderror">{{ old('deskripsi') }}</textarea>
                             @error('deskripsi')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div> 

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                             <input type="file" class="form-control @error('gambar') is-invalid
                             @enderror" name="gambar" placeholder="Gambar" accept="image/*" value="{{ old('gambar') }}">
                             @error('file')
                                 <div class="invalid-feedback">
                                        {{ $message }}
                                 </div>
                             @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Simpan
                        </button>
                    </form>
                </div> 
            </div>

       </div>

@endsection


{{-- @section('styles')
    
@endsection

@push('scripts')
    {{ Html::script(url('js/plugins/bootstrap-colorpicker.min.js')) }}
<script>
(function () {
    $('#categoryModal').modal({
        show: true,
        backdrop: 'static',
    });
    $('#color').colorpicker();
})();
</script>
@endpush --}}
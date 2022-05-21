@extends('layouts.main')

@section('container')
    {{-- Form Unruk Check-in --}}
    <form action="/pesan" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center">
        @csrf
        <div class="col-12">
            <div class="input-group date datepicker">
                <input type="text" name="cek_in" class="form-control @error('cek_in') is-invalid @enderror" autocomplete="off" placeholder="Tanggal Cek In" value="{{ old('cek_in') }}">
                <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </div>
      
        <div class="col-12">
            <div class="input-group date datepicker">
                <input type="text" name="cek out" class="form-control @error('cek_out') is-invalid @enderror" autocomplete="off" placeholder="Tanggal Cek Out" value="{{ old('cek_out') }}">
                <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </div>

        <div class="col-md-2">
            <div class="input-group">
                <input type="number" id="jml_kamar" name="jml_kamar" class="form-control @error('jml_kamar') is-invalid @enderror" aria-describedby="passwordHelpInline" placeholder="Jumlah Kamar" value="{{ old('jml_kamar') }}">
            </div>
        </div>
      
        <div class="col-12">
            <a href="/pesan" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formPemesanan">Pesan</a>
        </div>

        {{-- Modal Form Pemesanan --}}
        <div class="modal fade" id="formPemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pesan Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control @error('nama_pemesan') is-invalid @enderror" placeholder="Nama Pemesan" value="{{ old('nama_pemesan') }}">
                            @error('nama_pemesan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <div class="input-group mb-3">
                            <input type="text" id="email_pemesan" name="email_pemesan" class="form-control @error('email_pemesan') is-invalid @enderror" placeholder="Email" value="{{ old('email_pemesan') }}">
                            @error('email_pemesan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" id="hp_pemesan" name="hp_pemesan" class="form-control @error('hp_pemesan') is-invalid @enderror" placeholder="No Handphone" value="{{ old('hp_pemesan') }}">
                            @error('hp_pemesan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" id="nama_tamu" name="nama_tamu" class="form-control @error('nama_tamu') is-invalid @enderror" placeholder="Nama Tamu" value="{{ old('nama_tamu') }}">
                            @error('nama_tamu')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-select @error('nama_tamu') is-invalid @enderror" aria-label="Default select example" name="kamar_id">
                                @foreach ($kamar as $k)
                                <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                                @endforeach
                            </select>
                            @error('tipe_kamar')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Tentang Kami --}}
    <div class="card bg-light shadow-sm mt-5 mb-4">
        <div class="card-body">
            <h2 class="text-center">Tentang Kami</h2>
            <p class="text-start fs-6 lh-lg">
                Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah , danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukai. Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
            </p>
        </div>
    </div>
@endsection
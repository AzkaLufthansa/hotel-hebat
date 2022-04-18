@extends('layouts.main')

@section('container')
    <form action="">
        @csrf
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="input-group date" id="datepicker">
                    <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" autocomplete="off">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                    @error('tanggal')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
    
            <div class="col-md-3">
                <div class="input-group date" id="datepicker">
                    <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" autocomplete="off">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                    @error('tanggal')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="input-group">
                    <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" aria-describedby="passwordHelpInline">
                    @error('lokasi')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>

        </div>
    </form>

    <h2 class="text-center mt-5 mb-4">Tentang Kami</h2>
    <p class="text-start fs-6">
        Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah , danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukai. Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
    </p>
@endsection
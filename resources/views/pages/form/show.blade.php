@extends('layouts.app')

@section('title', 'Form Input Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Mahasiswa</h1>
            </div>

            <div class="section-body">
                <form action="{{ route('form.update', $datas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" id="nim" required value="{{ $datas->nim }}" ><br>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required value="{{ $datas->nama }}"><br>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" id="laki_laki" value="Laki Laki" {{ $datas->jenis_kelamin == "Laki Laki" ? 'checked' : '' }}>
                    <label for="laki_laki">Laki Laki</label>
                    <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $datas->jenis_kelamin == "Perempuan" ? 'checked' : '' }}>
                    <label for="perempuan">Perempuan</label><br>
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="{{ $datas->tanggal_lahir }}"><br>
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required value="{{ $datas->tempat_lahir }}"><br>
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" name="jurusan" id="jurusan" required value="{{ $datas->jurusan }}"><br>
                    <label for="tahun_masuk">Tahun Masuk:</label>
                    <input type="number" name="tahun_masuk" id="tahun_masuk" required value="{{ $datas->tahun_masuk }}"><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush

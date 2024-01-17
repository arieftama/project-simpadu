@extends('layouts.app')

@section('title', 'Form Input Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Input Mahasiswa</h1>
            </div>

            <div class="section-body">
                <form action="{{ route('form.store') }}" method="POST">
                    @csrf
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" id="nim" required><br>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required><br>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" id="laki_laki" value="Laki Laki">
                    <label for="laki_laki">Laki Laki</label>
                    <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label for="perempuan">Perempuan</label><br>
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br>
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required><br>
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" name="jurusan" id="jurusan" required><br>
                    <label for="tahun_masuk">Tahun Masuk:</label>
                    <input type="number" name="tahun_masuk" id="tahun_masuk" required><br>
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

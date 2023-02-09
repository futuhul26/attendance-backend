@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Pengguna</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Pengguna</li>
                    <li class="breadcrumb-item active">Tambah Pengguna</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Attendance Chart -->
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary mb-2">Kembali</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-person-add mr-1"></i>
                            Tambah Pengguna
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Unit Kerja</label>
                                <!-- <input type="text" name="unit_kerja" class="form-control"> -->
                                <select name="unit_kerja" class="form-control">
                                    <option value>Pilih Data...</option>
                                    <option value="BADAN KEAHLIAN">BADAN KEAHLIAN</option>
                                    <option value="BAGIAN ADMINISTRASI BADAN KEAHLIAN">BAGIAN ADMINISTRASI BADAN KEAHLIAN</option>
                                    <option value="BAGIAN ADMINISTRASI BARANG MILIK NEGARA">BAGIAN ADMINISTRASI BARANG MILIK NEGARA</option>
                                    <option value="BAGIAN ADMINISTRASI INSPEKTORAT UTAMA">BAGIAN ADMINISTRASI INSPEKTORAT UTAMA</option>
                                    <option value="BAGIAN ADMINISTRASI KEUANGAN">BAGIAN ADMINISTRASI KEUANGAN</option>
                                    <option value="BAGIAN ALIH BAHASA">BAGIAN ALIH BAHASA</option>
                                    <option value="BAGIAN ARSIP">BAGIAN ARSIP</option>
                                    <option value="BAGIAN GEDUNG DAN INSTALASI">BAGIAN GEDUNG DAN INSTALASI</option>
                                    <option value="BAGIAN HUBUNGAN MASYARAKAT DAN PENGELOLAAN MUSEUM">BAGIAN HUBUNGAN MASYARAKAT DAN PENGELOLAAN MUSEUM</option>
                                    <option value="BAGIAN KEANGGOTAAN DAN KESEKRETARIATAN FRAKSI">BAGIAN KEANGGOTAAN DAN KESEKRETARIATAN FRAKSI</option>
                                    <option value="BAGIAN KENDARAAN">BAGIAN KENDARAAN</option>
                                    <option value="BAGIAN LAYANAN KESEHATAN">BAGIAN LAYANAN KESEHATAN</option>
                                    <option value="BAGIAN MANAJEMEN KINERJA DAN INFORMASI ASN">BAGIAN MANAJEMEN KINERJA DAN INFORMASI ASN</option>
                                    <option value="BAGIAN MANAJEMEN SDM NON ASN">BAGIAN MANAJEMEN SDM NON ASN</option>
                                    <option value="BAGIAN MEDIA CETAK DAN MEDIA SOSIAL">BAGIAN MEDIA CETAK DAN MEDIA SOSIAL</option>
                                    <option value="BAGIAN ORGANISASI DAN TATA LAKSANA">BAGIAN ORGANISASI DAN TATA LAKSANA</option>
                                    <option value="BAGIAN PEMBENTUKAN PRODUK HUKUM">BAGIAN PEMBENTUKAN PRODUK HUKUM</option>
                                    <option value="BAGIAN PEMBINAAN JABATAN FUNGSIONAL">BAGIAN PEMBINAAN JABATAN FUNGSIONAL</option>
                                    <option value="BAGIAN PENERBITAN">BAGIAN PENERBITAN</option>
                                    <option value="BAGIAN PENGADAAN BARANG/JASA">BAGIAN PENGADAAN BARANG/JASA</option>
                                    <option value="BAGIAN PENGADUAN MASYARAKAT">BAGIAN PENGADUAN MASYARAKAT</option>
                                    <option value="BAGIAN PENGAMANAN DALAM">BAGIAN PENGAMANAN DALAM</option>
                                    <option value="BAGIAN PENGELOLAAN KINERJA ORGANISASI DAN REFORMASI BIROKRASI">BAGIAN PENGELOLAAN KINERJA ORGANISASI DAN REFORMASI BIROKRASI</option>
                                    <option value="BAGIAN PENGELOLAAN RUMAH JABATAN">BAGIAN PENGELOLAAN RUMAH JABATAN</option>
                                    <option value="BAGIAN PENGELOLAAN WISMA DPR">BAGIAN PENGELOLAAN WISMA DPR</option>
                                    <option value="BAGIAN PERENCANAAN">BAGIAN PERENCANAAN</option>
                                    <option value="BAGIAN PERENCANAAN DAN POLA KARIER ASN">BAGIAN PERENCANAAN DAN POLA KARIER ASN</option>
                                    <option value="BAGIAN PERJALANAN">BAGIAN PERJALANAN</option>
                                    <option value="BAGIAN PERPUSTAKAAN">BAGIAN PERPUSTAKAAN</option>
                                    <option value="BAGIAN PERSIDANGAN PARIPURNA">BAGIAN PERSIDANGAN PARIPURNA</option>
                                    <option value="BAGIAN PERTIMBANGAN DAN DOKUMENTASI INFORMASI HUKUM">BAGIAN PERTIMBANGAN DAN DOKUMENTASI INFORMASI HUKUM</option>
                                    <option value="BAGIAN PROTOKOL">BAGIAN PROTOKOL</option>
                                    <option value="BAGIAN RISALAH">BAGIAN RISALAH</option>
                                    <option value="BAGIAN SEKRETARIAT BADAN AKUNTABILITAS KEUANGAN NEGARA">BAGIAN SEKRETARIAT BADAN AKUNTABILITAS KEUANGAN NEGARA</option>
                                    <option value="BAGIAN SEKRETARIAT BADAN ANGGARAN">BAGIAN SEKRETARIAT BADAN ANGGARAN</option>
                                    <option value="BAGIAN SEKRETARIAT BADAN LEGISLASI">BAGIAN SEKRETARIAT BADAN LEGISLASI</option>
                                    <option value="BAGIAN SEKRETARIAT BADAN MUSYAWARAH">BAGIAN SEKRETARIAT BADAN MUSYAWARAH</option>
                                    <option value="BAGIAN SEKRETARIAT BADAN URUSAN RUMAH TANGGA">BAGIAN SEKRETARIAT BADAN URUSAN RUMAH TANGGA</option>
                                    <option value="BAGIAN SEKRETARIAT KERJA SAMA BILATERAL DAN ADMINISTRASI KEGIATAN LUAR NEGERI ANGGOTA">BAGIAN SEKRETARIAT KERJA SAMA BILATERAL DAN ADMINISTRASI KEGIATAN LUAR NEGERI ANGGOTA</option>
                                    <option value="BAGIAN SEKRETARIAT KERJA SAMA ORGANISASI INTERNASIONAL">BAGIAN SEKRETARIAT KERJA SAMA ORGANISASI INTERNASIONAL</option>
                                    <option value="BAGIAN SEKRETARIAT KERJA SAMA ORGANISASI REGIONAL">BAGIAN SEKRETARIAT KERJA SAMA ORGANISASI REGIONAL</option>
                                    <option value="BAGIAN SEKRETARIAT KETUA">BAGIAN SEKRETARIAT KETUA</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI I">BAGIAN SEKRETARIAT KOMISI I</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI II">BAGIAN SEKRETARIAT KOMISI II</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI III">BAGIAN SEKRETARIAT KOMISI III</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI IV">BAGIAN SEKRETARIAT KOMISI IV</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI IX">BAGIAN SEKRETARIAT KOMISI IX</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI V">BAGIAN SEKRETARIAT KOMISI V</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI VI">BAGIAN SEKRETARIAT KOMISI VI</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI VII">BAGIAN SEKRETARIAT KOMISI VII</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI VIII">BAGIAN SEKRETARIAT KOMISI VIII</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI X">BAGIAN SEKRETARIAT KOMISI X</option>
                                    <option value="BAGIAN SEKRETARIAT KOMISI XI">BAGIAN SEKRETARIAT KOMISI XI</option>
                                    <option value="BAGIAN SEKRETARIAT MAHKAMAH KEHORMATAN DEWAN">BAGIAN SEKRETARIAT MAHKAMAH KEHORMATAN DEWAN</option>
                                    <option value="BAGIAN SEKRETARIAT MUSYAWARAH PIMPINAN">BAGIAN SEKRETARIAT MUSYAWARAH PIMPINAN</option>
                                    <option value="BAGIAN SEKRETARIAT PANITIA KHUSUS">BAGIAN SEKRETARIAT PANITIA KHUSUS</option>
                                    <option value="BAGIAN SEKRETARIAT WAKIL KETUA BIDANG EKONOMI DAN KEUANGAN">BAGIAN SEKRETARIAT WAKIL KETUA BIDANG EKONOMI DAN KEUANGAN</option>
                                    <option value="BAGIAN SEKRETARIAT WAKIL KETUA BIDANG INDUSTRI DAN PEMBANGUNAN">BAGIAN SEKRETARIAT WAKIL KETUA BIDANG INDUSTRI DAN PEMBANGUNAN</option>
                                    <option value="BAGIAN SEKRETARIAT WAKIL KETUA BIDANG KESEJAHTERAAN RAKYAT">BAGIAN SEKRETARIAT WAKIL KETUA BIDANG KESEJAHTERAAN RAKYAT</option>
                                    <option value="BAGIAN SEKRETARIAT WAKIL KETUA BIDANG POLITIK DAN KEAMANAN">BAGIAN SEKRETARIAT WAKIL KETUA BIDANG POLITIK DAN KEAMANAN</option>
                                    <option value="BAGIAN TATA USAHA PIMPINAN SEKRETARIAT JENDERAL">BAGIAN TATA USAHA PIMPINAN SEKRETARIAT JENDERAL</option>
                                    <option value="BAGIAN TELEVISI DAN RADIO PARLEMEN">BAGIAN TELEVISI DAN RADIO PARLEMEN</option>
                                    <option value="BIDANG PELATIHAN STRUKTURAL DAN FUNGSIONAL">BIDANG PELATIHAN STRUKTURAL DAN FUNGSIONAL</option>
                                    <option value="BIDANG PELATIHAN TEKNIS">BIDANG PELATIHAN TEKNIS</option>
                                    <option value="BIDANG SISTEM INFORMASI DAN INFRASTRUKTUR TEKNOLOGI INFORMASI">BIDANG SISTEM INFORMASI DAN INFRASTRUKTUR TEKNOLOGI INFORMASI</option>
                                    <option value="BIDANG TATA KELOLA TEKNOLOGI INFORMASI">BIDANG TATA KELOLA TEKNOLOGI INFORMASI</option>
                                    <option value="BIRO HUKUM DAN PENGADUAN MASYARAKAT">BIRO HUKUM DAN PENGADUAN MASYARAKAT</option>
                                    <option value="BIRO KERJA SAMA ANTAR PARLEMEN DAN ORGANISASI INTERNASIONAL">BIRO KERJA SAMA ANTAR PARLEMEN DAN ORGANISASI INTERNASIONAL</option>
                                    <option value="BIRO KESEKRETARIATAN PIMPINAN">BIRO KESEKRETARIATAN PIMPINAN</option>
                                    <option value="BIRO KEUANGAN">BIRO KEUANGAN</option>
                                    <option value="BIRO ORGANISASI DAN PERENCANAAN">BIRO ORGANISASI DAN PERENCANAAN</option>
                                    <option value="BIRO PEMBERITAAN PARLEMEN">BIRO PEMBERITAAN PARLEMEN</option>
                                    <option value="BIRO PENGELOLAAN BANGUNAN DAN WISMA">BIRO PENGELOLAAN BANGUNAN DAN WISMA</option>
                                    <option value="BIRO PERSIDANGAN I">BIRO PERSIDANGAN I</option>
                                    <option value="BIRO PERSIDANGAN II">BIRO PERSIDANGAN II</option>
                                    <option value="BIRO PROTOKOL DAN HUBUNGAN MASYARAKAT">BIRO PROTOKOL DAN HUBUNGAN MASYARAKAT</option>
                                    <option value="BIRO SUMBER DAYA MANUSIA APARATUR">BIRO SUMBER DAYA MANUSIA APARATUR</option>
                                    <option value="BIRO UMUM">BIRO UMUM</option>
                                    <option value="DEPUTI BIDANG ADMINISTRASI">DEPUTI BIDANG ADMINISTRASI</option>
                                    <option value="DEPUTI BIDANG PERSIDANGAN">DEPUTI BIDANG PERSIDANGAN</option>
                                    <option value="INSPEKTORAT I">INSPEKTORAT I</option>
                                    <option value="INSPEKTORAT II">INSPEKTORAT II</option>
                                    <option value="INSPEKTORAT UTAMA">INSPEKTORAT UTAMA</option>
                                    <option value="PUSAT KAJIAN AKUNTABILITAS KEUANGAN NEGARA">PUSAT KAJIAN AKUNTABILITAS KEUANGAN NEGARA</option>
                                    <option value="PUSAT KAJIAN ANGGARAN">PUSAT KAJIAN ANGGARAN</option>
                                    <option value="PUSAT PEMANTAUAN PELAKSANAAN UNDANG-UNDANG">PUSAT PEMANTAUAN PELAKSANAAN UNDANG-UNDANG</option>
                                    <option value="PUSAT PENDIDIKAN DAN PELATIHAN">PUSAT PENDIDIKAN DAN PELATIHAN</option>
                                    <option value="PUSAT PENELITIAN">PUSAT PENELITIAN</option>
                                    <option value="PUSAT PERANCANGAN UNDANG-UNDANG">PUSAT PERANCANGAN UNDANG-UNDANG</option>
                                    <option value="PUSAT TEKNOLOGI INFORMASI">PUSAT TEKNOLOGI INFORMASI</option>
                                    <option value="SEKRETARIAT JENDERAL DPR RI">SEKRETARIAT JENDERAL DPR RI</option>
                                    <option value="SEKRETARIAT KORPRI">SEKRETARIAT KORPRI</option>	
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="display: block">Jadikan Admin?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="is_admin" type="radio" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="is_admin" type="radio" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Foto Pengguna</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
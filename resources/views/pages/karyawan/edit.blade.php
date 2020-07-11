@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Karyawan {{ $karyawan->nama_karyawan }}</h1>
    </div>

    @if ($errors->any())
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
            <form action="{{ route('karyawan.update', $karyawan->kode_karyawan) }}" method="POST">
                @method('PUT')
                @csrf
                {{-- Kode Karyawan --}}
                <div class="form-group">
                    <label for="kode_karyawan">Kode Karyawan</label>
                    <input type="text" class="form-control" name="kode_karyawan" placeholder="kode_karyawan"
                    value="{{ $karyawan->kode_karyawan }}">
                </div>
                {{-- Nama Karyawan --}}
                <div class="form-group">
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan" placeholder="nama_karyawan"
                    value="{{ $karyawan->nama_karyawan }}">
                </div>
                {{-- Jabatan --}}
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="jabatan"
                    value="{{ $karyawan->jabatan }}">
                </div>
                {{-- Gaji Pokok --}}
                <div class="form-group">
                    <label for="gaji_pokok">Gaji Pokok</label>
                    <input type="number" class="form-control" name="gaji_pokok" placeholder="Featured Event"
                    value="{{ $karyawan->gaji_pokok }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan Perubaban
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

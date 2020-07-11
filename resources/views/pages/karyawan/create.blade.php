@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
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
            <form action="{{route('karyawan.store')}}" method="POST">
                @csrf
                {{-- Kode Karyawan --}}
                <div class="form-group">
                    <label for="kode_karyawan">Kode Karyawan</label>
                    <input type="text" class="form-control" name="kode_karyawan" placeholder="Kode : K, misal K001"
                    value="{{old('kode_karyawan')}}" autofocus>
                </div>
                {{-- Nama Karyawan --}}
                <div class="form-group">
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan" value="{{old('nama_karyawan')}}">
                </div>
                {{-- Jabatan --}}
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{old('jabatan')}}">
                </div>
                {{-- Gaji Pokok --}}
                <div class="form-group">
                    <label for="gaji_pokok">Gaji Pokok</label>
                    <input type="number" class="form-control" name="gaji_pokok" value="{{old('gaji_pokok')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Barang {{ $barang->nama_barang }}</h1>
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
            <form action="{{ route('barang.update', $barang->kode_barang) }}" method="POST">
                @method('PUT')
                @csrf
                {{-- Kode Barang --}}
                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" placeholder="kode_barang"
                    value="{{ $barang->kode_barang }}">
                </div>
                {{-- Nama Barang --}}
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="nama_barang"
                    value="{{ $barang->nama_barang }}">
                </div>
                {{-- Satuan --}}
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" name="satuan" placeholder="satuan"
                    value="{{ $barang->satuan }}">
                </div>
                {{-- Harga --}}
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Featured Event"
                    value="{{ $barang->harga }}">
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

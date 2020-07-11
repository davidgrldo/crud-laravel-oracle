@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Pendatapan</h1>
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
            <form action="{{route('pendapatan.store')}}" method="POST">
                @csrf
                {{-- Tanggal --}}
                <div class="form-group">
                    <label> Tanggal </label>
                    <input type="date" value="{{old('tanggal')}}" class="form-control"
                        name="tanggal">
                </div>
                {{-- Kode Armada --}}
                <div class="form-group">
                    <label for="kode_armada">Armada</label>
                    <select class="form-control" name="kode_armada">
                        <option>-- Pilih Armada --</option>
                        @foreach($armada as $item)
                            <option value="{{ $item->kode_armada }}">{{ $item->nama_armada }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Barang --}}
                <div class="form-group">
                    <label for="kode_barang">Barang</label>
                    <select class="form-control" name="kode_barang">
                        <option>-- Pilih Barang --</option>
                        @foreach($barang as $item)
                            <option value="{{ $item->kode_barang }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Jumlah Terjual --}}
                <div class="form-group">
                    <label for="jumlah_terjual">Jumlah Terjual</label>
                    <input type="number" class="form-control" name="jumlah_terjual" value="{{old('jumlah_terjual')}}">
                </div>
                {{-- Sisa --}}
                <div class="form-group">
                    <label for="sisa">Sisa</label>
                    <input type="number" class="form-control" name="sisa" value="{{old('sisa')}}">
                </div>
                {{-- Masukan --}}
                <div class="form-group">
                    <label for="masukan">Masukan</label>
                    <input type="number" class="form-control" name="masukan" value="{{old('masukan')}}">
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

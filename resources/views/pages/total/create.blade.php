@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
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
            <form action="{{route('total.store')}}" method="POST">
                @csrf
                {{-- Tanggal --}}
                <div class="form-group">
                    <label> Tanggal </label>
                    <input type="date" value="{{old('tanggal')}}" class="form-control"
                        name="tanggal">
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
                {{-- Untung --}}
                <div class="form-group">
                    <label for="untung">Untung</label>
                    <input type="number" class="form-control" name="untung" value="{{old('untung')}}">
                </div>
                {{-- Rugi --}}
                <div class="form-group">
                    <label for="rugi">Rugi</label>
                    <input type="number" class="form-control" name="rugi" value="{{old('rugi')}}">
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

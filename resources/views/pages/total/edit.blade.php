@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data</h1>
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
            <form action="{{ route('total.update', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                {{-- Tanggal --}}
                <div class="form-group">
                    <label> Tanggal </label>
                    <input type="date" value="{{ $data->tanggal }}" class="form-control"
                        name="tanggal">
                </div>
                {{-- Barang --}}
                <div class="form-group">
                    <label for="kode_barang">Barang</label>
                    <select class="form-control" name="kode_barang">
                        <option>-- Pilih Barang --</option>
                        @foreach($data->barang as $item)
                            <option value="{{ $item->kode_barang }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Jumlah Terjual --}}
                <div class="form-group">
                    <label for="jumlah_terjual">Jumlah Terjual</label>
                    <input type="number" class="form-control" name="jumlah_terjual" value="{{ $data->jumlah_terjual }}">
                </div>
                {{-- Sisa --}}
                <div class="form-group">
                    <label for="sisa">Sisa</label>
                    <input type="number" class="form-control" name="sisa" value="{{ $data->sisa }}">
                </div>
                {{-- Untung --}}
                <div class="form-group">
                    <label for="untung">Untung</label>
                    <input type="number" class="form-control" name="untung" value="{{ $data->untung }}">
                </div>
                {{-- Rugi --}}
                <div class="form-group">
                    <label for="rugi">Rugi</label>
                    <input type="number" class="form-control" name="rugi" value="{{ $data->rugi }}">
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

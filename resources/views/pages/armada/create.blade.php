@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Armada</h1>
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
            <form action="{{route('armada.store')}}" method="POST">
                @csrf
                {{-- Kode Armada --}}
                <div class="form-group">
                    <label for="kode_armada">Kode Armada</label>
                    <input type="text" class="form-control" name="kode_armada" placeholder="Kode : A, misal A001"
                    value="{{old('kode_armada')}}" autofocus>
                </div>
                {{-- Kode Karyawan --}}
                <div class="form-group">
                    <label for="kode_karyawan">Kode Karyawan</label>
                    <select class="form-control" name="kode_karyawan">
                        <option>-- Pilih Karyawan --</option>
                        @foreach($karyawan as $item)
                            <option value="{{ $item->kode_karyawan }}">{{ $item->nama_karyawan }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Nama Armada --}}
                <div class="form-group">
                    <label for="nama_armada">Nama Armada</label>
                    <input type="text" class="form-control" name="nama_armada" value="{{old('nama_armada')}}">
                </div>
                {{-- Jumlah Dibawa --}}
                <div class="form-group">
                    <label for="jumlah_dibawa">Jumlah Dibawa</label>
                    <input type="number" class="form-control" name="jumlah_dibawa" value="{{old('jumlah_dibawa')}}">
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

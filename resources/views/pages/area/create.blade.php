@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Area</h1>
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
            <form action="{{route('area.store')}}" method="POST">
                @csrf
                {{-- Kode Area --}}
                <div class="form-group">
                    <label for="kode_area">Kode Area</label>
                    <input type="text" class="form-control" name="kode_area" placeholder="Kode : AREA, misal AREA1"
                    value="{{old('kode_area')}}" autofocus>
                </div>
                {{-- Kode Armada --}}
                <div class="form-group">
                    <label for="kode_armada">Kode Armada</label>
                    <select class="form-control" name="kode_armada">
                        <option>-- Pilih Armada --</option>
                        @foreach($armada as $item)
                            <option value="{{ $item->kode_armada }}">{{ $item->nama_armada }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Nama Area --}}
                <div class="form-group">
                    <label for="area">Nama Area</label>
                    <input type="text" class="form-control" name="area" value="{{old('area')}}">
                </div>
                {{-- Jangkauan --}}
                <div class="form-group">
                    <label for="jangkauan">Jangkauan</label>
                    <input type="number" class="form-control" name="jangkauan" value="{{old('jangkauan')}}">
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

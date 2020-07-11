@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pendapatan Total</h1>
        <a href="{{ route('total.create') }}"
        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah Terjual</th>
                            <th>Sisa</th>
                            <th>Untung</th>
                            <th>Rugi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $item)
                        <tr>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->barang->nama_barang }}</td>
                            <td>Rp. {{ number_format($item->barang->harga) }}</td>
                            <td>{{ number_format($item->jumlah_terjual) }} pcs</td>
                            <td>{{ number_format($item->sisa) }} pcs</td>
                            <td>Rp. {{ number_format($item->untung) }}</td>
                            <td>Rp. {{ number_format($item->rugi) }}</td>
                            <td>
                                <a href="{{ route('total.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{route('total.destroy', $item->id)}}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="8" class="text-center">
                                Data Kosong
                            </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Area</h1>
        <a href="{{ route('area.create') }}"
        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Area
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Armada</th>
                            <th>Kode Area</th>
                            <th>Nama Area</th>
                            <th>Jangkauan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($armada as $item)
                        <tr>
                            <td>{{ $item->kode_area }}</td>
                            <td>{{ $item->armada->kode_armada }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ number_format($item->jangkauan) }} km</td>
                            <td>
                                <a href="{{ route('area.edit', $item->kode_area) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{route('area.destroy', $item->kode_area)}}" method="POST"
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
                            <td colspan="7" class="text-center">
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

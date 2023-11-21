<!-- resources/views/managepost.blade.php -->

@extends('layouts.adminlayout')

@section('contentadmin')

<div id="dashboard-adm" class="container-fluid">

    <div class="d-sm-flex align-items-center m-lg-3 justify-content-between mb-4">
        <h1 class="h3 title mb-0">Manage Portofolio</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul Portofolio</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{ $portfolio->judul }}</td>
                            <td>{{ $portfolio->kategori->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('portfolios.edit', $portfolio->id_portofolio) }}" class="btn btn-primary btn-sm mt-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('portfolios.destroy', $portfolio->id_portofolio) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-sm mt-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

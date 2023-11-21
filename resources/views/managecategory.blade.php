<!-- resources/views/managecategory.blade.php -->

@extends('layouts.adminlayout')

@section('contentadmin')


<div id="dashboard-adm" class="container-fluid">

    <div class="d-sm-flex align-items-center m-lg-3 justify-content-between mb-4">
        <h1 class="h3 title mb-0">Manage Category</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('kategori.create')}}" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>   Tambah Kategori</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $category->id_kategori) }}" class="btn btn-primary btn-sm mt-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('kategori.destroy', $category->id_kategori) }}" method="POST" style="display: inline;">
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

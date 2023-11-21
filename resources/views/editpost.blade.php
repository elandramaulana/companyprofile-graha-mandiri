<!-- resources/views/portofolios/edit.blade.php -->

@extends('layouts.adminlayout')

@section('contentadmin')

<!-- Begin Page Content -->
<div id="dashboard-adm" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center m-lg-3 justify-content-between mb-4">
        <h1 class="h3 title mb-0">Edit Portofolio</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="col-sm-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                    <form action="{{ route('portfolios.update', $portfolio->id_portofolio) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" value="{{ $portfolio->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori_id" class="form-control" id="kategori">
                                @foreach($kategori as $kat)
                                <option value="{{ $kat->id_kategori }}" {{ $kat->id_kategori == $portfolio->kategori_id ? 'selected' : '' }}>
                                    {{ $kat->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_klient" class="form-label">Klien</label>
                            <input type="text" name="nama_klient" class="form-control" id="nama_klient" aria-describedby="nama_klient" value="{{ $portfolio->nama_klient }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_project" class="form-label">Tanggal Project</label>
                            <input type="date" name="tanggal_project" class="form-control" id="tanggal_project" aria-describedby="tanggal_project" value="{{ $portfolio->tanggal_project }}">
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input name="image" type="file" class="form-control" id="image">
                                <label class="input-group-text" for="image">Upload</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



@endsection

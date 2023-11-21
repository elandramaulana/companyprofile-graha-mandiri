<!-- resources/views/kategori/create.blade.php -->

@extends('layouts.adminlayout')

@section('contentadmin')

<!-- Begin Page Content -->
<div id="dashboard-adm" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center m-lg-3 justify-content-between mb-4">
        <h1 class="h3 title mb-0">Tambahkan Kategori Baru</h1>
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
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" aria-describedby="nama_kategori">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection

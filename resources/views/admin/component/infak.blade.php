@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori Infak</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kategori Infak</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Kategori Infak</h3>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#infak">
                                    Tambah
                                </button>
                            </div>
                        </div>
                        @extends('admin.layout.kategori')
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="w-10">No</th>
                                        <th class="w-50">Infak</th>
                                        <th class="w-10">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infak as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->infak }}</td>
                                            <td>
                                                <div class="btn-group btn-block">
                                                    <button url="{{ route('infak.delete', $k->id) }}" type="button"
                                                        class="btn btn-danger delete" data-id="{{ $k->id }}"><i
                                                            class="fas fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@include('admin.partial.footer')

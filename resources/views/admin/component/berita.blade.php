@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Berita</li>
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
                            <h3 class="card-title">Tabel Data Berita</h3>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#berita">
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
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->tittle }}</td>
                                            <td><img src="/assets/berita/{{ $k->gambar }}" class="img-fluid"
                                                    style="width: 100px" alt="">
                                            </td>
                                            <td>{{ $k->link }}</td>
                                            <td>
                                                <div class="btn-group btn-block">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#berita{{ $k->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button url="{{ route('berita.delete', $k->id) }}" type="button"
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
                    @foreach ($berita as $k)
                        <div class="modal fade" id="berita{{ $k->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Berita</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('berita.update', $k->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="tittle">Judul</label>
                                                        <input type="text" id="tittle"
                                                            value="{{ $k->tittle }}" class="form-control"
                                                            name="tittle" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gambar">Gambar</label>
                                                        <input type="file" id="gambar"
                                                            value="{{ $k->gambar }}" accept="image/*"
                                                            class="form-control" name="gambar" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="link">Link</label>
                                                        <input type="text" id="link"
                                                            value="{{ $k->link }}" class="form-control"
                                                            name="link" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@include('admin.partial.footer')

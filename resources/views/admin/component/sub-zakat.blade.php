@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sub Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sub Kategori</li>
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
                            <h3 class="card-title">{{ $kat->kategori }}</h3>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#subkategori{{ $kat->id }}">
                                    Tambah
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="subkategori{{ $kat->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Sub Kategori</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('subzakat.post', $kat->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="kategori">Sub Kategori</label>
                                                        <input type="text" id="kategori" class="form-control"
                                                            name="sub_kategori" required>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sub as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->sub_kategori }}</td>
                                            <td>
                                                <div class="btn-group btn-block">
                                                    <button url="{{ route('subzakat.delete', $k->id) }}" type="button"
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

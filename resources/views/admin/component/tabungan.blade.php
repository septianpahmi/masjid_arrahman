@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tabungan Zakat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tabungan Zakat</li>
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
                            <h3 class="card-title">Tabel Data Tabungan Zakat</h3>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#tabungan">
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
                                        <th class="w-30">Hewan</th>
                                        <th class="w-40">Proyeksi</th>
                                        <th class="w-10">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tab as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->hewan }}</td>
                                            <td>Rp. {{ $k->proyeksi }}</td>
                                            <td>
                                                <div class="btn-group btn-block">
                                                    <button url="{{ route('zakat.delete', $k->id) }}" type="button"
                                                        class="btn btn-danger delete" data-id="{{ $k->id }}"><i
                                                            class="fas fa-trash"></i></button>
                                                    <button data-toggle="modal" type="button"
                                                        data-target="#edit-tabungan{{ $k->id }}"
                                                        class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    @foreach ($tab as $k)
                        <div class="modal fade" id="edit-tabungan{{ $k->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Tabungan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('tabungan.update', $k->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="hewan">Hewan Kurban</label>
                                                        <input type="text" id="hewan" class="form-control"
                                                            value="{{ $k->hewan }}" name="hewan" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="proyeksi-edit">Proyeksi</label>
                                                        <!-- Perbaikan pada ID yang benar -->
                                                        <input type="text" id="proyeksi-edit" class="form-control"
                                                            name="proyeksi" minlength="3" maxlength="50"
                                                            inputmode="numeric" placeholder="" required=""
                                                            onclick="this.select();"
                                                            oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                                            oninput="setCustomValidity('');" aria-invalid="true"
                                                            value="{{ $k->proyeksi }}" />
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

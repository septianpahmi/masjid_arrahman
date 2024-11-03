@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Infak</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Infak</li>
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
                            <h3 class="card-title">Data Tabel Infak</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Infak</th>
                                        <th>Nominal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infak as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->idinfak->infak }}</td>
                                            <td>{{ $k->nominal }}</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block @if ($k->status == 'Berhasil') btn-outline-success @elseif($k->status == 'Gagal') btn-outline-danger @else btn-outline-primary @endif"
                                                    @readonly(true)>{{ $k->status }}</button>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-block">
                                                    @if ($k->status == 'Pending')
                                                        <button type="button" id="statusbutton"
                                                            class="btn btn-success btn-block dropdown-hover dropdown-toggle dropdown-icon "
                                                            data-toggle="dropdown"> Status
                                                        </button>
                                                        <div class="dropdown-menu" role="menu">
                                                            <a class="dropdown-item status"
                                                                data-id="{{ $k->id }}"
                                                                url="{{ url('/infak-report/approve', $k->id) }}">Terima</a>
                                                            <a class="dropdown-item status"
                                                                data-id="{{ $k->id }}"
                                                                url="{{ url('/infak-report/reject', $k->id) }}">Tolak</a>
                                                        </div>
                                                    @endif
                                                    <div class="btn-group btn-block">

                                                        <button url="{{ route('infak.reportDelete', $k->id) }}"
                                                            type="button" class="btn btn-danger delete"
                                                            data-id="{{ $k->id }}"><i
                                                                class="fas fa-trash"></i></button>
                                                    </div>
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

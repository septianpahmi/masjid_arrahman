@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembayaran Zakat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pembayaran Zakat</li>
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
                            <h3 class="card-title">Data Tabel Pembayaran Zakat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>No. Hp</th>
                                        <th>Kategori</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pay as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->email }}</td>
                                            <td>{{ $k->gender }}</td>
                                            <td>{{ $k->phone }}</td>
                                            <td>{{ $k->idkategori->kategori }}</td>
                                            <td>Rp. {{ $k->nominal }}</td>
                                            <td>{{ Carbon\Carbon::parse($k->created_at)->format('d-m-Y') }}</td>
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
                                                                url="{{ url('/pembayaran/approve', $k->id) }}">Terima</a>
                                                            <a class="dropdown-item status"
                                                                data-id="{{ $k->id }}"
                                                                url="{{ url('/pembayaran/tolak', $k->id) }}">Tolak</a>
                                                        </div>
                                                    @endif
                                                    <div class="btn-group btn-block">
                                                        <button url="{{ route('pembayaran.delete', $k->id) }}"
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

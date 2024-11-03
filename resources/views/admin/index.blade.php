@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp. </sup>{{ number_format($zakat, 0, ',', '.') }}</h3>

                            <p>Total Zakat</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <a href="{{ route('pembayaran') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp. </sup>{{ number_format($fidyah, 0, ',', '.') }}</h3>

                            <p>Total Fidyah</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('fidyah') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp. </sup>{{ number_format($infak, 0, ',', '.') }}</h3>

                            <p>Total Infak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="{{ route('infak.report') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@include('admin.partial.footer')

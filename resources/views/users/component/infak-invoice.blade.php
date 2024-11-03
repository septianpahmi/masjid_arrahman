@include('users.partial.header')
<!-- Theme style -->
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <br><br><br>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> Invoice Infak
                                        <small class="float-right">Tanggal:
                                            {{ Carbon\Carbon::parse($infak->created_at)->format('d-m-Y') }}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    Dari
                                    <address>
                                        <strong>Admin</strong><br>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #{{ sprintf('%05d', $infak->id) }}</b><br>
                                    <br>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Infak</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $infak->idinfak->infak }}</td>
                                                <td>{{ $infak->nominal }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted infakments column -->
                                <div class="col-6">
                                    <p class="lead">Metode Pembayaran:</p>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1200px-Bank_Central_Asia.svg.png"
                                        alt="BCA" style="height: 40px">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        <strong>No. Rekening:</strong> 197 051 9013
                                        <br><strong>a/n:</strong> DEDE PIRMANSAH
                                        <br>Silahkan lakukan pembayaran sesuai dengan nominal yang tertera.
                                        <br>
                                        <br><strong>Note:</strong> Kirim bukti pembayaran ke Nomor WhatsApp
                                        dibawah
                                        ini:
                                        <br>+62 878 2042 5551 atau <a
                                            href="https://wa.me/6287820425551?text=Halo%20saya%20ingin%20mengkonfirmasi%20pembayaran%20Infak%20dengan%20nominal%20Rp%20{{ $infak->nominal }}%20yang%20sudah%20saya%20transfer%20pada%20{{ Carbon\Carbon::parse($infak->created_at)->format('d-m-Y') }}."
                                            type="button" class="btn btn-success" target="_blank"><img
                                                src="/assets/img/whatsapp.png" style="height: 26px" alt=""></a>
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>Total:</th>
                                                <td>Rp. {{ $infak->nominal }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="{{ route('infak.user') }}" class="btn btn-primary"><i
                                            class="fas fa-arrow-left"></i> Kembali</a>
                                    <a href="{{ route('infak.print', ['id' => $infak->id]) }}" rel="noopener"
                                        target="_blank" type="button" class="btn btn-success float-right"
                                        style="margin-right: 5px;">
                                        <i class="fas fa-print"></i> Print
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </main>

    @include('users.partial.footer')

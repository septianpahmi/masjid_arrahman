<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZIA | Invoice Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
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
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>

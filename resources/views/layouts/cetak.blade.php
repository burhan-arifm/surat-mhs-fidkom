<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Cetak Surat | Persuratan Mahasiswa FDK UINSGD</title>
    <style>
        @page {
            size: Legal;
        }
        .table-sm td {
            padding: 0rem .3rem;
        }
        p.first-line-indent {
            text-indent: 3rem;
        }
        p.mini-margin {
            margin-bottom: .5rem;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.2rem;
            line-height: 1.15;
        }
    </style>
</head>
<body onload="window.print()" onafterprint="window.history.back()">
    <div class="container">
        <!-- Kop Surat -->
        <div class="row">
            <img src="{{ asset('storage/kop_surat.png') }}" class="img-fluid mx-auto d-block" style="width: 100%;">
        </div>
        <!-- end of Kop Surat -->

        <!-- Badan Surat -->
        <div class="mt-4 px-4">
            @yield('badan-surat')
        </div>
        <!-- end of Badan Surat -->
    </div>
</body>
</html>
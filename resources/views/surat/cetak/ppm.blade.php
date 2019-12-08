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
            <img src="kop_surat.png" class="img-fluid mx-auto d-block" style="width: 100%;">
        </div>
        <!-- end of Kop Surat -->

        <!-- Badan Surat -->
        <div class="mt-4 px-4">
                <!-- Atribut Surat -->
                <div class="row">
                    <table class="table table-sm table-borderless">
                        <tbody>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td>B-0001/Un.05/III.4/TL.01/09/2029</td>
                                <td style="text-align: right;">Bandung, 29 September 2029</td>
                            </tr>
                            <tr>
                                <td>Lampiran</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <td><b><em>
                                    Permohonan Izin<br>
                                    Persiapan Praktik Profesi Mahasiswa (PPM)
                                </em></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end of Atribut Surat -->

                <!-- Isi Surat -->
                <div class="row my-3">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <!-- Penerima Surat -->
                        <div class="row">
                            <p>
                                Kepada Yth.<br>
                                <b>Redaksi Harian Pikiran Rakyat</b><br>
                                Jl. Asia Afrika No.77 <br>
                                Bandung 40111
                            </p>
                        </div>
                        <!-- end of Penerima Surat -->
                
                        <!-- Konten Surat -->
                        <div class="row mt-1">
                            <!-- Pembuka Surat -->
                            <p class="first-line-indent mini-margin">
                                <b><em>Assalamu'alaikum Wr. Wb.</em></b>
                            </p>
                            <p class="text-justify first-line-indent">
                                Dekan Fakultas Dakwah dan Komunikasi Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung, dengan ini mohon kesediaan Bapak/ Ibu/ Saudara untuk memberikan izin kepada mahasiswa kami sebagai berikut:
                            </p>
                            <!-- end of Pembuka Surat -->

                            <!-- Isi Surat -->
                            <table class="table table-sm table-borderless" style="margin-left: 2.2em;">
                                <tbody>
                                    <tr>
                                        <td>N a m a</td>
                                        <td>:</td>
                                        <td>{{ $surat->diajukanOleh->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Pokok</td>
                                        <td>:</td>
                                        <td>{{ $surat->diajukanOleh->nim }}</td>
                                    </tr>
                                    <tr>
                                        <td>Program Studi</td>
                                        <td>:</td>
                                        <td>{{ $surat->diajukanOleh->jurusan->program_studi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Program/Semester</td>
                                        <td>:</td>
                                        <td>S1/{{ $surat->diajukanOleh->semester }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $surat->diajukanOleh->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pembimbing Studi</td>
                                        <td>:</td>
                                        <td>{{ $surat->jobTrainingPPM->dosen_pembimbing }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end of Isi Surat -->

                            <!-- Penutup Surat -->
                            <p class="text-justify mini-margin">
                                untuk melaksanakan <b><em>Persiapan Praktik Profesi Mahasiswa (PPM)</em></b> Fakultas Dakwah dan Komunikasi Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung.
                            </p>
                            <p class="first-line-indent mini-margin">Atas bantuan Bapak/ Ibu/ Saudara, kami ucapkan terima kasih.</p>
                            <p class="first-line-indent mini-margin">
                                <b><em>Wassalamu'alaikum Wr. Wb.</em></b>
                            </p>
                            <!-- end of Penutup Surat -->
                        </div>
                        <!-- end of Konten Surat -->
                    </div>
                </div>
                <!-- end of Isi Surat -->
                
                <!-- Penanda Tangan Surat -->
                <div class="row">
                    <div class="col"></div>
                    <div class="col text-right">
                        <!-- <p class="text-right">a.n.</p> -->
                        a.n.
                    </div>
                    <div class="col">
                        <div class="row">Dekan</div>
                        <div class="row">Wakil Dekan Bidang Akademik,</div>
                        <div class="row"><br></div>
                        <div class="row"><br></div>
                        <div class="row"><br></div>
                        <div class="row"><br></div>
                        <div class="row"><b>Dr. H. Enjang AS., M.Ag., M.Si.</b></div>
                        <div class="row">NIP.196808141995031003</div>
                    </div>
                </div>
                <!-- end of Penanda Tangan Surat -->
                
                <!-- Keterangan Surat -->
                <div class="row mt-5">
                    <p>
                        Tembusan:<br>
                        Yth. Dekan Fakultas Dakwah dan Komunikasi UIN Sunan Gunung Djati Bandung
                    </p>
                </div>
                <!-- end of Keterangan Surat -->
        </div>
        <!-- end of Badan Surat -->
    </div>
</body>
</html>
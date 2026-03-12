<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Riwayat Servis</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 70px;
        }

        .company-info {
            margin-left: 15px;
        }

        .company-info h2 {
            margin: 0;
        }

        .company-info p {
            margin: 2px 0;
            font-size: 12px;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0 15px 0;
        }

        h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        table th,
        table td {
            border: 1px solid #000;
            padding: 6px;
            font-size: 12px;
        }

        table td {
            text-align: center;
        }

        .footer {
            margin-top: 25px;
            width: 100%;
        }

        .signature {
            float: right;
            text-align: center;
            width: 200px;
            margin-top: 30px;
        }

        @page {
            size: A4 portrait;
            margin: 10mm;
        }

        @media print {

            body {
                margin: 0;
                padding: 0;
            }

            body * {
                visibility: hidden;
            }

            #laporan-servis,
            #laporan-servis * {
                visibility: visible;
            }

            #laporan-servis {
                position: relative;
                width: 100%;
            }

            table {
                page-break-inside: auto;
            }

            tr {
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

        }
    </style>
</head>

<body>

    <div id="laporan-servis">

        <!-- HEADER -->
        <div class="header">
            <img src="{{ asset('images/SIMBISA-logo.jpeg') }}" class="logo">

            <div class="company-info">
                <h2>SIMBISA AUTO SERVICE</h2>
                <div>Jl. Jeruk Raya No. 9A, Jagakarsa, Jakarta Selatan, Indonesia</div>
                <div>Telp: +62 813-8377-1754</div>
                <div>Email: simbisamotor@email.com</div>
            </div>
        </div>

        <div class="line"></div>

        <h3><b>LAPORAN RIWAYAT SERVIS</b></h3>

        <p>
            <strong>Periode Laporan :</strong>

            @if ($tanggal_mulai && $tanggal_selesai)
                {{ \Carbon\Carbon::parse($tanggal_mulai)->format('d M Y') }}
                -
                {{ \Carbon\Carbon::parse($tanggal_selesai)->format('d M Y') }}
            @elseif($tanggal_mulai)
                Dari {{ \Carbon\Carbon::parse($tanggal_mulai)->format('d M Y') }}
            @elseif($tanggal_selesai)
                Sampai {{ \Carbon\Carbon::parse($tanggal_selesai)->format('d M Y') }}
            @endif
        </p>

        <p>
            <strong>Tanggal Cetak :</strong>
            {{ \Carbon\Carbon::now()->format('d M Y') }}
        </p>

        <!-- TABEL -->
        <table>
            <thead>
                <tr>
                    <th>Kode Booking</th>
                    <th>Tanggal Booking</th>
                    <th>Nama Customer</th>
                    <th>ID Mekanik</th>
                    <th>Handled By</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($query as $row)
                    <tr>
                        <td>{{ $row->booking->kode_booking }}</td>
                        <td>{{ $row->booking->tanggal_booking->format('d M Y H:i') }} WIB</td>
                        <td>{{ $row->customer->nama }}</td>
                        <td>{{ $row->mekanik->id_user }}</td>
                        <td>{{ $row->mekanik->nama }}</td>
                        <td>Rp {{ number_format($row->total_biaya, 0, ',', '.') }}</td>
                        <td>{{ $row->booking->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Tidak ada data pada periode ini</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

        <!-- FOOTER -->
        <div class="footer">

            <div class="signature">
                <p>Mengetahui</p>
                <br><br><br>
                <p><strong>{{ auth()->user()->name }}</strong></p>
            </div>

        </div>

    </div>

</body>

</html>

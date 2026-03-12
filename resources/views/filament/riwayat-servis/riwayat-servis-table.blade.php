<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Riwayat Servis</title>

    <style>
        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }

        .logo {
            width: 80px;
            margin-right: 20px;
        }

        .company {
            line-height: 1.4;
        }

        .company h2 {
            margin: 0;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table-info {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .table-info td {
            padding: 8px;
        }

        .table-servis {
            width: 100%;
            border-collapse: collapse;
        }

        .table-servis th {
            border: 1px solid #000;
            padding: 10px;
            background: #f2f2f2;
        }

        .table-servis td {
            border: 1px solid #000;
            padding: 10px;
        }

        .total {
            text-align: right;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        .signature {
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
        }

        .signature div {
            text-align: center;
        }

        .print-btn {
            margin-top: 30px;
            text-align: right;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 20px;
            color: #000;
        }

        @page {
            size: A4;
            margin: 15mm;
        }

        #print-area {
            page-break-inside: avoid;
        }

        @media print {

            body * {
                visibility: hidden;
            }

            #print-area,
            #print-area * {
                visibility: visible;
            }

            #print-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div id="print-area">

        <div class="header">

            <img src="{{ asset('images/SIMBISA-logo.jpeg') }}" class="logo">

            <div class="company">
                <h2>SIMBISA AUTO SERVICE</h2>
                <div>Jl. Jeruk Raya No. 9A, Jagakarsa, Jakarta Selatan, Indonesia</div>
                <div>Telp: +62 813-8377-1754</div>
                <div>Email: simbisamotor@email.com</div>
            </div>

        </div>


        <div class="title">
            DETAIL RIWAYAT SERVIS
        </div>


        <table class="table-info">
            <tr>
                <td width="200"><b>Kode Booking</b></td>
                <td>: {{ $record->booking->kode_booking }}</td>
            </tr>

            <tr>
                <td><b>Tanggal Booking</b></td>
                <td>: {{ \Carbon\Carbon::parse($record->booking->tanggal_booking)->format('d M Y, H:i') }} WIB</td>
            </tr>

            <tr>
                <td><b>Customer</b></td>
                <td>: {{ $record->customer->nama }}</td>
            </tr>

            <tr>
                <td><b>Nomor Customer</b></td>
                <td>: {{ $record->customer->phone }}</td>
            </tr>

            <tr>
                <td><b>Kendaraan</b></td>
                <td>: {{ $record->booking->kendaraan->model }} ({{ $record->booking->kendaraan->brand }})</td>
            </tr>

            <tr>
                <td><b>Nomor Polisi</b></td>
                <td>: {{ $record->booking->nomor_plat }}</td>
            </tr>

            <tr>
                <td><b>Mekanik</b></td>
                <td>: {{ $record->mekanik->nama }}</td>
            </tr>
        </table>


        <table class="table-servis">
            <thead>
                <tr>
                    <th>Jenis Servis</th>
                    <th>Status</th>
                    <th>Keterangan Mekanik</th>
                    <th width="135">Biaya</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td align="center">{{ $record->booking->jenis_servis->nama_servis ?? '-' }}</td>
                    <td align="center">{{ $record->booking->status ?? '-' }}</td>
                    <td align="justify">{{ $record->catatan_perbaikan ?? '-' }}</td>
                    <td align="center">
                        Rp {{ number_format($record->total_biaya, 0, ',', '.') }}
                    </td>
                </tr>

            </tbody>
        </table>


        <div class="total">
            Total Biaya : Rp {{ number_format($record->total_biaya, 0, ',', '.') }} (<b class="text-green-500">LUNAS</b>)
        </div>


        <div class="signature">

            <div>
                Customer
                <br><br><br>
                ( {{ $record->customer->nama }} )
            </div>

            <div>
                Mekanik
                <br><br><br>
                ( {{ $record->mekanik->nama }} )
            </div>

        </div>

    </div>

</body>

</html>

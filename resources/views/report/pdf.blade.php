<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Monitoring Kelulusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f3f4f6;
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
        .status-rendah {
            color: #10b981;
            font-weight: bold;
        }
        .status-tinggi {
            color: #ef4444;
            font-weight: bold;
        }
        .footer {
            margin-top: 50px;
            width: 100%;
        }
        .signature {
            float: right;
            text-align: center;
            width: 250px;
        }
        .signature-line {
            margin-top: 70px;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN MONITORING PREDIKSI KELULUSAN MAHASISWA</h1>
        <p>Sistem Pemantauan Akademik Menggunakan Decision Tree C4.5</p>
        <p>Dicetak pada: {{ date('d F Y H:i') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="15%">NIM</th>
                <th width="30%">Nama Mahasiswa</th>
                <th width="10%" class="text-center">Angkatan</th>
                <th width="15%" class="text-center">IP Terakhir</th>
                <th width="25%">Prediksi Kelulusan (AI)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $index => $mhs)
                @php
                    $prediksi = $mhs->prediksiKelulusan;
                    $ipkAvg = optional($mhs->dataTambahan)->ip_terakhir;
                @endphp
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td class="text-center">{{ $mhs->angkatan }}</td>
                    <td class="text-center">{{ $ipkAvg ? number_format($ipkAvg, 2) : '-' }}</td>
                    <td>
                        @if($prediksi)
                            @if($prediksi->prediksi_sistem == 'Tepat Waktu')
                                <span class="status-rendah">Tepat Waktu</span>
                            @else
                                <span class="status-tinggi">Tidak Tepat Waktu</span>
                            @endif
                            <br>
                            <span style="font-size: 10px; color: #666;">Risiko: {{ $prediksi->status_risiko }}</span>
                        @else
                            <span style="color: #9ca3af; font-style: italic;">Belum Diprediksi</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        <div class="signature">
            <p>Mengetahui,</p>
            <p style="margin-bottom: 50px;">Ketua Program Studi</p>
            <div class="signature-line"></div>
            <p style="margin-top: 5px;">(..............................................)</p>
        </div>
    </div>
</body>
</html>

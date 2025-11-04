<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Keuangan</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #333; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        th, td { border: 1px solid #ccc; padding: 6px; text-align: left; }
        th { background-color: #f0f0f0; }
        tfoot td { font-weight: bold; border-top: 2px solid #000; }
    </style>
</head>
<body>
    <h2>Laporan Keuangan</h2>
    <p><strong>Periode:</strong> {{ $start ?? '-' }} s/d {{ $end ?? '-' }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Mobil</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->user?->name }}</td>
                    <td>{{ $b->car?->name }}</td>
                    <td>{{ $b->start_date }}</td>
                    <td>{{ $b->end_date }}</td>
                    <td>Rp {{ number_format($b->total_price, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($b->status) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Total Pendapatan</td>
                <td colspan="2">Rp {{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <p style="text-align:right; font-size:11px;">Dicetak pada {{ now()->format('d M Y H:i') }}</p>
</body>
</html>

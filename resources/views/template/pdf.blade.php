<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; color: #333; }
        
        .header { text-align: center; margin-bottom: 20px; }
        .header h2 { margin: 0; text-transform: uppercase; }
        .header p { margin: 5px 0; color: #666; }

        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        
        thead th {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 10px;
            text-align: left;
            font-weight: bold;
        }

        tbody td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tbody tr:nth-child(even) { background-color: #f2f2f2; }

        .footer { margin-top: 50px; text-align: right; width: 100%; }
        .ttd { width: 200px; float: right; text-align: center; }
    </style>
</head>
<body>

    <div class="header">
        <h2>Laporan Data Template</h2>
        <p>Dicetak pada: {{ date('d-m-Y H:i') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">No</th>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
            </tr>
        </thead>
        <tbody>
            @foreach($template as $index => $item)
            <tr>
                <td style="text-align: center;">{{ $index + 1 }}</td>
                <!-- Akses Relasi dengan Aman -->
                <td>{{ $item->kolom_1 ?? '-' }}</td>
                <td>{{ $item->kolom_2 ?? '-' }}</td>
                <td>{{ $item->kolom_3 ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
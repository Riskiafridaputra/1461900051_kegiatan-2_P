<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
        <title>Data Mahasiswa</title>
        <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
        
        .tambah{
            padding: 8px 16px ;
            text-decoration: none;
        }

        </style>
<body>
    <div style="overflow-x: auto">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp Anggota</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1?>
                @foreach ($anggota as $ang)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ang->anggota_nama }}</td>
                    <td>{{ $ang->anggota_alamat }}</td>
                    <td>{{ $ang->anggota_jk }}</td>
                    <td>{{ $ang->anggota_telp }}</td>
                    
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</body>
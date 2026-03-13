<!DOCTYPE html>
<html>
<head>
    <title>Katalog Program Ormawa</title>
</head>
<body>

    <h1>Katalog Program Kerja Ormawa</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Organisasi</th>
                <th>Nama Program</th>
                <th>Anggaran</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($program as $index => $item)
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $item['organisasi'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['anggaran'] }}</td>
                <td>
                    <a href="/katalog/{{ $index }}">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
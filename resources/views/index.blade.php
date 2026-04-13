<!DOCTYPE html>
<html>
<head>
<title>Katalog Program Kerja Ormawa</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f4f6f9;
}

h1{
    text-align:center;
    margin-bottom:30px;
}

table{
    border-collapse:collapse;
    width:80%;
    margin:auto;
    background:white;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

th, td{
    padding:12px;
    text-align:center;
}

th{
    background:#2c3e50;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}

tr:hover{
    background:#e8f0fe;
}

a{
    color:#3498db;
    text-decoration:none;
    font-weight:bold;
}

a:hover{
    text-decoration:underline;
}

</style>

</head>

<body>

<h1>Katalog Program Kerja Ormawa</h1>

<table border="1">

<tr>
<th>No</th>
<th>Organisasi</th>
<th>Nama Program</th>
<th>Anggaran</th>
<th>Detail</th>
</tr>

@foreach($program as $index => $p)

<tr>

<td>{{ $index }}</td>
<td>{{ $p['organisasi'] }}</td>
<td>{{ $p['nama'] }}</td>
<td>{{ $p['anggaran'] }}</td>

<td>
<a href="/katalog/{{ $index }}">Lihat</a>
</td>

</tr>

@endforeach

</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Profil ORMAWA</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

<h2 class="judul">Profil ORMAWA F.SAINTEK</h2>


@foreach($organisasi as $o)

<div class="card">

<h3>{{ $o['nama'] }}</h3>

<p>{{ $o['deskripsi'] }}</p>

<b>Visi :</b>
<p>{{ $o['visi'] }}</p>

<b>Misi :</b>
<ul>
@foreach($o['misi'] as $m)
<li>{{ $m }}</li>
@endforeach
</ul>

</div>

@endforeach


<h2 class="judul">Data Pengurus ORMAWA</h2>

<div class="container-pengurus">

@foreach($pengurus as $p)

<div class="card-pengurus">

<h3>{{ $p['nama'] }}</h3>

<p>NIM : {{ $p['nim'] }}</p>
<p>Jabatan : {{ $p['jabatan'] }}</p>
<p>Prodi : {{ $p['prodi'] }}</p>
<p>Semester : {{ $p['semester'] }}</p>

<p>Keahlian :</p>
<ul>
@foreach($p['keahlian'] as $skill)
<li>{{ $skill }}</li>
@endforeach
</ul>

</div>

@endforeach

</div>

</div>

</body>
</html>
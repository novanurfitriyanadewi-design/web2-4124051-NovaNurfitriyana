<h1>Profil ORMAWA FSAINTEK</h1>

<h2>Informasi Organisasi</h2>

@foreach($organisasi as $o)

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

<hr>

@endforeach


<h2>Data Pengurus ORMAWA</h2>

@foreach($pengurus as $p)

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

<hr>

@endforeach
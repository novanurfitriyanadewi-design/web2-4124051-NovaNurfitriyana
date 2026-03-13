<h1>Detail Katalog</h1>
<p>Nama: {{ $item['nama'] }}</p>
<p>Harga: Rp {{ number_format($item['harga'],0,',','.') }}</p>
<a href="/katalog">Kembali ke daftar katalog</a>
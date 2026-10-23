<body>
@include('layouts.header')
    <h2>Detail Aktivitas</h2>
<div class="container">
        <p><strong>Nama Aktivitas :</strong>
        {{ $aktivitas->nama_aktivitas }}</p>

        <p><strong>Deskripsi :</strong>
        {{ $aktivitas->deskripsi }}</p>

        <p><strong>Tanggal :</strong>
        {{ $aktivitas->tanggal }}</p>

        <p><strong>Status :</strong>
        {{ $aktivitas->status ? 'Selesai' : 'Belum Selesai' }}</p>
    </div>
    <a href="{{ route('aktivitas') }}" class="btn-kembali">Kembali</a>
</div>

@include('layouts.footer') 
</body>
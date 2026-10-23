<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<body>
    @include('layouts.header')

    <div class="container">
        <h2>Formulir Edit Aktivitas</h2>
        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_aktivitas">Nama Aktivitas:</label>
                <input type="text" id="nama_aktivitas" name="nama_aktivitas" value="{{ $aktivitas->nama_aktivitas }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required>{{ $aktivitas->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $aktivitas->tanggal }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="1" {{ $aktivitas->status ? 'selected' : '' }}>Selesai</option>
                    <option value="0" {{ !$aktivitas->status ? 'selected' : '' }}>Belum Selesai</option>
                </select>
            </div>
            <button type="submit">Update Aktivitas</button>
            <a href="{{ route('aktivitas') }}" class="btn-kembali">Kembali</a>
        </form>
    </div>
    @include('layouts.footer') 
</body>
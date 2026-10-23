<body>
    @include('layouts.header')

    <div class="container">
        <h2>Formulir Aktivitas Baru</h2>
    </div>

    <div>
        @if ($errors->any())
        <div style="background:#ff4d4d; color:white; padding:12px; border-radius:8px; margin-bottom:15px">
            <strong>Ada yang salah!</strong><br>
            @foreach ($errors->all() as $error)
                • {{ $error }} <br>
            @endforeach
        </div>
    @endif
    </div>

    <div>
        <form action="{{ route('aktivitas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_aktivitas">Nama Aktivitas:</label>
                <input type="text" id="nama_aktivitas" name="nama_aktivitas" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="1">Selesai</option>
                    <option value="0">Belum Selesai</option>
                </select>
            </div>
            <button type="submit">Tambah Aktivitas</button>
        </form>
    </div>

    @include('layouts.footer')
</body>
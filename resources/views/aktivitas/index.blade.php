@include('layouts.header')

    <h2>Tabel Aktivitas</h2>
    <a href="{{ route('aktivitas.create') }}"class="btn btn-primary">Tambah Aktivitas</a>

    <table class="table table-bordered"bordered mt-15" border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Aktivitas</th> 
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_aktivitas }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                    <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                    <td>
                        <a href="{{ route('aktivitas.edit', $item->id) }}">Edit</a>
                        <a href="{{ route('aktivitas.show', $item->id) }}">Lihat</a>
                        <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
    @include('layouts.footer')
</body>
</html>

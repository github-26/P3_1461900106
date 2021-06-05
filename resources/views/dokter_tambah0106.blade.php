<form action="{{ route('dokter.store') }}" method="post">
    @csrf 
    Nama : <input type="text" name="nama">
    Jabatan : <input type="text" name="jabatan">
    <button type="submit">Simpan</button>

</form>
<form action="{{ url('dokter/' . $dokter) }}" method="post">
    @csrf 
    <input type="hidden" name="_method" value="patch">
    Nama : <input type="text" name="nama" value="{{ $dokter->nama }}">
    Jabatan : <input type="text" name="jabatan" value="{{ $dokter->jabatan }}">
    <button type="submit">Simpan</button>

</form>
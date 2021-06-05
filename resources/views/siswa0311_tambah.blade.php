<form action="{{ route('siswa.store') }}" method="post">
    @csrf 
    NAMA : <input type="text" name="nama"> 
    ALAMAT : <input type="text" name="alamat">
    <button type="sumbit">Simpan</button>
</form>
<form action="{{ route('siswa.store') }}" method="post">
    @csrf 
    NAMA : <input type="text" name="nama" value="{{ $siswa->nama }}"> 
    ALAMAT : <input type="text" name="alamat" value="{{ $siswa->alamat }}">
    <button type="sumbit">Simpan</button>
</form>
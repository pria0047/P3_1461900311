<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Data Siswa</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container">
    <center>
        <br><h3>DATA SISWA</h3><br>
    </center>   

    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>NO</td>
                    <td>NAMA SISWA</td>
                    <td>ALAMAT</td>
                </tr>
            </thead>
        
            <tbody>
                <?php $no=1 ?>
                @foreach ($siswa as $ss)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ss->nama }}</td>
                        <td>{{ $ss->alamat }}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <a href="{{ 'siswa/create' }}"> Tambah Siswa</a>
    </body></div>
</html>
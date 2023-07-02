<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/sampah/create" class="btn btn-warning mb-3">Create</a>
        <table class="table table-bordered table-warning my-4">
            <thead>
                <tr>
                    <th class="text-center">NO</th>
                    <th>NAMA KELUARGA</th>
                    <th>NO RUMAH</th> 
                    <th>RT/RW</th>
                    <th>TOTAL SAMPAH</th>
                    <th>KRITERIA</th>
                    <th>TANGGAL PENGANGKUTAN  SAMPAH</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sampahs as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data['kepala_keluarga']}}</td>
                    <td>{{$data['no_rumah']}}</td>
                    <td>{{$data['rt_rw']}}</td>
                    <td>{{$data['total_karung_sampah']}}</td>
                    <td>{{$data['kriteria']}}</td>
                    <td>{{$data['tanggal_pengangkutan']}}</td>
                    <td>
                        <a href="{{ route('edit', $data['id']) }}" class="btn btn-primary btn-sm"
                                style="float: left; margin-right:5px;">Edit</a>
                            <form action="{{ route('delete', $data['id']) }}" method="POST" style="float: left;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raiza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    @if(Session::get('errors'))
        <p style="padding: 5px 10px; background: red; color: white; margin: 10px">{{ Session::get('errors') }}</p>
    @endif
    <form action="{{ route('update',$sampahs['id']) }}" method="POST">
      @csrf
      @method('PATCH')
      <div class="container d-flex justify-content-center align-items-center position-relative position-absolute top-50 start-50 translate-middle">  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">kepala keluarga</label>
    <input type="text" class="form-control" name="kepala_keluarga" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Rumah</label>
    <input type="text" class="form-control" name="no_rumah" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rt/Rw</label>
    <input type="text" class="form-control" name="rt_rw"  id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">total karung sampah</label>
    <input type="number" class="form-control" name="total_karung_sampah" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tanggal pengangkutan</label>
    <input type="date" class="form-control" name="tanggal_pengangkutan"  id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
   

</body>
</html>
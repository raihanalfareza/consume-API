<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Data sAMPAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="d-flex justify-content-center align-items-center my-4">
    <div class="card my-2  shadow p-3" style="border-radius:6% 2%">
       <div class="container">
            <form action="/sampah/store" method="post" style="width:500px;">
                @csrf
                    <legend class="text-center mt-3"><b>ADD DATA SAMPAH</b></legend>
                    <div class="mb-3">
                        <label class="form-label">Kepala Keluarga</label>
                        <input type="text" name="kepala_keluarga" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No Rumah</label>
                        <input type="number" name="no_rumah" id="" class="form-control" placeholder="Disabled input">
                    </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Rt Rw</label>
                        <input type="text" id="" name="rt_rw" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Total Sampah</label>
                        <input type="number" id="" name="total_karung_sampah" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Pengangkutan</label>
                        <input type="date" id="" name="tanggal_pengangkutan" class="form-control" placeholder="Disabled input">
                    </div>
                    <a href="/sampahs" class="btn btn-secondary mb-3">Back</a>
                    <button type = "submit">Submit</button>
            </form>
           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
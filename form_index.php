
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <form class='form-horizontal p-5' action="array_bmi.php" method="POST">
            <div class="text-center">
                <h3 class="mb-5 text-primary text-mg">FORM ISIAN INDEXS MASSA TUBUH (BMI)</h3>
            </div>
            <div class="input-group mb-3 row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="input-group mb-3 row">
                <label class="col-sm-2 col-form-label">Berat Badan</label>
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-weight"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan Berat Badan" name="berat">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        Kg
                    </span>
                </div>
            </div>
            <div class="input-group mb-3 row">
                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-child"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan Tinggi Badan" name="tinggi">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        Cm
                    </span>
                </div>
            </div>
            <div class="input-group mb-3 row">
                <label class="col-sm-2 col-form-label">Umur</label>
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-bell"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan Umur" name="umur">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        Thn
                    </span>
                </div>
            </div>
            
            <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                <div class="form-check custom-control custom-radio custom-control-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-Laki">
                    <label class="form-check-label" for="gridRadios1" require>
                    Laki-Laki
                    </label>
                </div>
                <div class="form-check custom-control custom-radio custom-control-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                    Perempuan
                    </label>
                </div>
                </div>
            </fieldset>
            <div class="text-center">
                <input type="submit" value="Simpan" class="btn btn-success" name="proses">
            </div>
        </form>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
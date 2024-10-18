<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
      <h1>Tambah Data User</h1>
      <style>
      body {
        background-image: url('bck.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      .container {
        background-color: rgba(255, 255, 255, 0.4); /* Warna latar belakang container dexngan transparansi */
        padding: 20px;
        border-radius: 10px;
      }
    </style>
      <hr class="mt-0">
     
      <form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data" onsubmit="return validateForm()">
        <!-- Kolom lain... -->

        <div class="mb-3">
          <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
          <label for="nohp" class="form-label">No HP <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nohp" name="nohp" required>
        </div>
        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Upload Foto <span class="text-danger">*</span></label>
          <input type="file" class="form-control" id="foto" name="foto" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-primary">Kembali</a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  

    <script>
      function validateForm() {
        const jenisKelamin = document.getElementById('jenis_kelamin').value;
        if (jenisKelamin === "") {
          alert("Jenis Kelamin harus dipilih.");
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>

<form class="row g-3" action='pegawai/store.php' method='post'>
  <div class="col-md-6">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" class="form-control" id="nik" name="nik" required>
  </div>
  <div class="col-md-6">
    <label for="foto" class="form-label">Foto</label>
    <input type="text" class="form-control" id="foto" name="foto" required>
  </div>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="1234 Main St" name="alamat" required>
  </div>
  <div class="col-12">
    <label for="telepom" class="form-label">Telepon</label>
    <input type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" placeholder="08xx-xxx-xxx" class="form-control" id="telepon" name="telepon" required>
  </div>
  <div class="col-md-6">
    <label for="tmlahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="tmlahir" name="tmlahir" required>
  </div>
  <div class="col-md-2">
      <label for="tglahir" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tglahir" name="tglahir" required>
  </div>
    <div class="col-md-4">
    <label for="jk" class="form-label">Jenis Kelamin</label>
    <select id="jk" name="jk" class="form-select">
      <option value="L" selected>Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
    <div class="col-12">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php?hal=jasa" class="btn btn-secondary">Batal</a>
  </div>
</form>
<form action="pengguna/store.php" method="post">
  <div class="mt-2">
    <div class="card-body">
      <h5 class="card-title">Tambah Pengguna</h5>
        <div class="mt-5 mb-3">
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username">
            </div>
          </div>
          <div class="row mb-3">
            <label for="password1" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password1" name="pass1" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password2" name="pass2" required>
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Level</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="level1" value="A" checked>
                <label class="form-check-label" for="level1">
                  Administrator
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="level2" value="C">
                <label class="form-check-label" for="level2">
                  Client
                </label>
              </div>
            </div>
          </fieldset>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a type="submit" class="btn btn-secondary" href="index.php?hal=pengguna">Batal</a>
      </div>
    </div>
  </div>
</form>
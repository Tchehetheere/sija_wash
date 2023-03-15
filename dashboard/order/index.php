<form class="row g-3" action="../order/store.php" method="POST">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Nama Customor</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Plat Nomor</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Layanan</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Order</button>
  </div>
</form>
<form action="jasa/store.php" method="post">
    <div class="card mt-5">
        <div class="card-body">
        <h5 class="card-title">Tambah jasa</h5>
            <div class="mt-5 mb-3">
                <input type="text" class="form-control" name='jasa' id="jasa" placeholder="Masukan jasa" required>
                <input type="text" class="form-control" name='biaya_jasa' id="biaya_jasa" placeholder="Masukan biaya jasa" required>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php?hal=jasa" class="btn btn-secondary">Batal</a>
                </div>    
            </div>
    </div>
</form>
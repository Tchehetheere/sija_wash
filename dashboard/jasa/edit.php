<form action="jasa/ubah.php" method="post">
    <div class="card mt-5">
        <div class="card-body">
        <h5 class="card-title">Ubah Jasa</h5>
            <div class="mt-5 mb-3">
                <input type="hidden" name="id" value="<?=$_GET['id']; ?>">
                <input type="text" class="form-control" name='jasa' id="jasa" placeholder="Masukan jasa" value="<?=$_GET['jasa']; ?>" required>
                <input type="text" class="form-control" name='biaya_jasa' id="biaya_jasa" placeholder="Masukan biaya jasa" value="<?=$_GET['biaya_jasa'];?>" required>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php?hal=jasa" class="btn btn-secondary">Batal</a>
                </div>    
            </div>
    </div>
</form>
<form action="barang/ubah.php" method="post">
    <div class="card mt-5">
        <div class="card-body">
        <h5 class="card-title">Ubah Stok Barang</h5>
            <div class="mt-5 mb-3">
                <input type="hidden" name="id" value="<?=$_GET['id']; ?>">
                <input type="text" class="form-control" name='barang' id="barang" placeholder="Masukan Nama Barang" value="<?=$_GET['barang']; ?>" required>
                <input type="text" class="form-control" name='stk_barang' id="stk_barang" placeholder="Masukan Stok Barang" value="<?=$_GET['stk_barang'];?>" required>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php?hal=barang" class="btn btn-secondary">Batal</a>
                </div>    
            </div>
    </div>
</form>
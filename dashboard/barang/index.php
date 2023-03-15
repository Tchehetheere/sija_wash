<?php 

    include("../connectdb/connect.php");
    $sql = "select * from tblbarang";
    $result = $conn->query($sql);

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Stok Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <form action="index.php">
        <input type="hidden" name="hal" value="barang-create">
            <button type="submit" class="btn btn-warning">
            <span data-feather="save" class="align-text-bottom"></span>
            Tambah Barang
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" width=15 class="text-center">No.</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Stok</th>
                    <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                $nmr=1;
                    while($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <th scope="row"><?=$nmr; ?></th>
                    <td>
                        <?=$row['namabarang']; ?>
                    </td>
                    <td>
                        <?=$row['stok']; ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group me-2">
                            <a href="index.php?hal=barang-edit&id=<?=$row['idbarang'];?>&barang=<?=$row['namabarang'];?>&stk_barang=<?=$row['stok'];?>" class="btn btn-outline-primary">Edit</a>
                            <button type="button" class="btn btn-outline-danger" onclick="hapus('\'<?=$row['namabarang'];?>\'')">Hapus</button>
                        </div>
                    </td>
                    </tr>
                    <?php 
                        $nmr++;
                            }
                        }else{
                        
                            echo "0 results";

                        }
                        $conn->close();
                    ?>
                </tbody>
                </table>
        </div>
      </div>


      <script>

            function hapus(data){
                if(confirm('Apakah anda yakin akan menghapus data ' + data + '?')){
                    window.location.replace("barang/delete.php?barang=" + data);               
                }
            }

      </script>
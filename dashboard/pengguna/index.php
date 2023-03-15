<?php 

    include("../connectdb/connect.php");
    $sql = "select * from tbluser";
    $result = $conn->query($sql);

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pengguna</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <form action="index.php">
        <input type="hidden" name="hal" value="pengguna-create">
            <button type="submit" class="btn btn-warning">
            <span data-feather="save" class="align-text-bottom"></span>
            Tambah Pengguna
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" width=15 class="text-center">No.</th>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
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
                        <?=$row['iduser']; ?>
                    </td>
                    <td>
                        <?=$row['email']; ?>
                    </td>
                    <td>
                        <?=$row['username'];?>
                    </td>
                    <td>
                        <?=$row['level']=='A'? 'Administrator' : 'Client';?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group me-2">
                            <a href="index.php?hal=pengguna-edit&id=<?=$row['iduser'];?>&email=<?=$row['email'];?>&username=<?=$row['username'];?>" class="btn btn-outline-primary">Edit</a>
                            <button type="button" class="btn btn-outline-danger" onclick="hapus('\'<?=$row['username'];?>\'')">Hapus</button>
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
                    window.location.replace("pengguna/delete.php?pengguna=" + data);               
                }
            }

      </script>
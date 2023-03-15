<?php 

    include("../connectdb/connect.php");
    $sql = "select * from tblpegawai";
    $result = $conn->query($sql);

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pegawai</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <form action="index.php">
        <input type="hidden" name="hal" value="pegawai-create">
            <button type="submit" class="btn btn-warning">
            <span data-feather="save" class="align-text-bottom"></span>
            Tambah Pegawai
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-body table-responsive-lg overflow-auto">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" width=15 class="text-center">No.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Foto</th>
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
                        <?=$row['nik']; ?>
                    </td>
                    <td>
                        <?=$row['email']; ?>
                    </td>
                    <td>
                        <?=$row['nama']; ?>
                    </td>
                    <td>
                        <?=$row['tgllahir']; ?>
                    </td>
                    <td>
                        <?=$row['tempatlahir']; ?>
                    </td>
                    <td>
                        <?=$row['telepon']; ?>
                    </td>
                    <td>
                        <?=$row['alamat']; ?>
                    </td>
                    <td>
                        <?=$row['JK'] == 'L'? 'Laki-laki' : 'Perempuan'; ?>
                    </td>
                    <td>
                        <?=$row['foto']; ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group me-2">
                            <a href="index.php?hal=pegawai-edit&id=<?=$row['idpegawai'];?>&nik=<?=$row['nik'];?>&email=<?=$row['email'];?>&nama=<?=$row['nama'];?>&tglahir=<?=$row['tgllahir'];?>&tmlahir=<?=$row['tempatlahir'];?>&telepon=<?=$row['telepon'];?>&alamat=<?=$row['alamat'];?>&jk=<?=$row['JK'];?>&foto=<?=$row['foto'];?>" class="btn btn-outline-primary">Edit</a>
                            <button type="button" class="btn btn-outline-danger" onclick="hapus('\'<?=$row['nik'];?>\'')">Hapus</button>
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
                if(confirm('Apakah anda yakin akan menghapus data pegawai dengan NIK: ' + data + '?')){
                    window.location.replace("pegawai/delete.php?nik=" + data)               
                }
            }

      </script>








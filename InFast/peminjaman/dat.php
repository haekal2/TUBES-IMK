<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="peminjaman.css">
  <script src="pembayaranjs.js"></script>
</head>
<body>

  <center>
<div class="checkout-panel">
  <div class="panel-body">

    <h2 class="title">Data Peminjam</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>

    <form action="" method="POST">
        <div class="content">
            <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <div><td width="20%"><label for="nama">Nama Lengkap</label></td></div>
                    <div><td colspan="3"><input name="nama" id="nama" type="text" class="form"></td></div>
                </tr>

                <tr>
                    <td><span><br></b></span></td>
                </tr>

                <tr>
                    <td><label for="tempat_lahir">Tempat Lahir</label></td>
                    <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="form"></td>
                    <td><label>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Tanggal Lahir</label></td>
                    <td>
                        <select name="tgl_lahir" class="form">
                            <?php 
                            for($tanggal = 1; $tanggal <= 31; $tanggal++) {
                                if($tanggal < 10) {
                                    echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
                                }
                                else {
                                    echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
                                }
                            }
                            ?>
                            </select>
                            <select name="bln_lahir" class="form">
                                <?php 
                                for($bulan = 1; $bulan <= 12; $bulan++) {
                                    if($bulan < 10) {
                                        echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
                                    }
                                    else {
                                        echo '<option value="'. $bulan .'">'. $bulan .'</option>';
                                    }
                                }
                                ?>
                                </select>
                                <select name="thn_lahir" class="form">
                                    <?php 
                                    for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                                        echo '<option value="'. $tahun .'">'. $tahun .'</option>';
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td valign="top"><label for="alamat">Alamat</label></td>
                                <td valign="top" colspan="2">
                                    <textarea name="alamat" id="alamat" class="form" cols="50" rows="8"></textarea>
                                </td>
                                <td valign="top">
                                    <div>
                                        <label for="kota">&nbsp;&nbsp;&nbsp;Kota</label>
                                        <input type="text" name="kota" id="kota" class="form">
                                    </div>
                                    <div>
                                        <label for="negara">&nbsp;&nbsp;&nbsp;Negara</label>
                                        <input type="text" name="negara" id="negara" class="form">
                                    </div>
                                    <div>
                                        <label for="kode_pos">&nbsp;&nbsp;&nbsp;Kode Pos</label>
                                        <input type="number" name="kode_pos" id="kode_pos" class="form">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td><label for="hp">No. HP</label></td>
                                <td colspan="3"><input name="hp" id="hp" type="number" class="form"></td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td colspan="3"><input name="email" id="email" type="text" class="form"></td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td><span>Unggah Berkas</span></td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td><label for="nokk">No KK</label></td>
                                <td colspan="3"><input name="nokk" id="nokk" type="number" class="form"></td>

                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td> <td>
                                  <?php
                                  if (isset($_SESSION['message']) && $_SESSION['message'])
                                  {
                                    printf('<b>%s</b>', $_SESSION['message']);
                                    unset($_SESSION['message']);
                                }
                                ?>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div>
                                        
                                        <input type="file" name="uploadedFile" />
                                    </div>
                                    
                                </form>
                                </td> </td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                            <tr>
                                <td><label for="berat_badan">No KTP</label></td>
                                <td colspan="3"><input name="noktp" id="noktp" type="number" class="form"></td>
                                
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><td>
                                  <?php
                                  if (isset($_SESSION['message']) && $_SESSION['message'])
                                  {
                                    printf('<b>%s</b>', $_SESSION['message']);
                                    unset($_SESSION['message']);
                                }
                                ?>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div>
                                        <span> <br></span>
                                        <input type="file" name="uploadedFile" />
                                    </div>
                                    
                                </form>
                                </td></td>
                            </tr>
                            <tr>
                                <td><span><br></b></span></td>
                            </tr>
                        </table>
                    </div>
                    <br><br><br>
                    <input type="submit" class="btn" value="Simpan">
                </form>

  </div>
 
  <div class="panel-footer">

    <button class="btn next-btn">Home</button><button class="btn next-btn"><a href="syarat.php"> Selanjutnya</a></button>
  </div>
</div>
</center>
</body>
</html>

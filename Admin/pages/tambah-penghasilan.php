<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Data 
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">Tambah Data</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">PENGHASILAN</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <?php 
            
            include '../koneksi/koneksi.php';
            if(isset($_POST['b1'])){
              if(empty($_POST['nm']) or empty($_POST['id_kdi']) or empty($_POST['id_bag']) or empty($_POST['id_lk'])){
                echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <strong>Error!</strong> Data tidak boleh ada yang kosong.
                </div>';
              }else{
                $kdi = $_POST['id_kdi'];
                $kdi = preg_replace("/[^0-9]/","",$kdi)[1].preg_replace("/[^0-9]/","",$kdi)[2];
                $bag = $_POST['id_bag'];
                $bag = preg_replace("/[^0-9]/","",$bag)[1].preg_replace("/[^0-9]/","",$bag)[2];
                $lk = $_POST['id_lk'];
                $lk = preg_replace("/[^0-9]/","",$lk)[1].preg_replace("/[^0-9]/","",$lk)[2];

                $q1=mysqli_fetch_array(mysqli_query($koneksi,"SELECT MAX(id_data) AS id_data FROM data WHERE id_kdi='$_POST[id_kdi]' AND id_bag='$_POST[id_bag]' AND id_lk='$_POST[id_lk]'"));
                if($q1['id_data']=="")
                {
                  $id_data = "KD".$lk.$bag.$kdi."01";
                }else
                {
                  $id_data=preg_replace("/[^0-9]/","",$q1['id_data']);
                  $id_data++;
                  if(strlen($id_data)!=8)
                  {
                    $id_data = "KD0".$id_data;
                  }else
                  {
                    $id_data = "KD".$id_data;
                  }
                }
                
                $sql=mysqli_query($koneksi,"INSERT INTO data values ('$id_data','$_POST[nm]','$_POST[id_kdi]','$_POST[id_bag]','$_POST[id_lk]')");
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data berhasil ditambah.
                </div>';
                echo 
                '<div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                          <label>ID Data</label>
                            <input type="text" class="form-control" maxlength="100" value="'.$id_data.'" readonly>
                        </div>
                    </div>
                </div>';
              }
            }
            ?>
            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
              
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>ID Penghasilan</label>
                    <input type="text" name="id_penghasilan" class="form-control" maxlength="100" placeholder="Penghasilan">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Pendapatan Pokok</label>
                    <input type="text" name="pendapatan_pokok" class="form-control" maxlength="100" placeholder="Pendapatan Pokok">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Tunjangan</label>
                    <input type="text" name="tunjangan" class="form-control" maxlength="100" placeholder="Tunjangan">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Penghasilan</label>
                    <input type="text" name="penghasilan" class="form-control" maxlength="100" placeholder="Penghasilan">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
              <div class="form-group">
                  <div class="col-md-12">
                    <label>Biaya Rutin</label>
                    <input type="text" name="biaya_rutin" class="form-control" maxlength="100" placeholder="Biaya Rutin">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                </div>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>
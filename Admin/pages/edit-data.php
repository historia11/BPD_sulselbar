<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Data Hasil
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">Data Hasil</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Form Data Hasil</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <?php 
            include '../koneksi/koneksi.php';
            $id=$_GET['id'];
            if(isset($_POST['b1'])){
              if(empty($_POST['id']) or empty($_POST['nm']) or empty($_POST['kat']) or empty($_POST['bag']) or empty($_POST['lok'])){
                echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                      <strong>Error!</strong> Data tidak boleh ada yang kosong.
                      </div>';
              }else{
                $sql=mysqli_query($koneksi,"UPDATE data SET nm_data='$_POST[nm]',id_kdi='$_POST[kat]',id_bag='$_POST[bag]',id_lk='$_POST[lok]' where id_data='$id'");
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                      <strong>Sukses!</strong> Data berhasil diedit.
                      </div>';
              }
            }
            ?>
            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
              <?php 
              $q=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data WHERE id_data='$id'"));
              ?>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>ID Data Hasil</label>
                    <input type="text" name="id" class="form-control" maxlength="100" value="<?php echo $q['id_data']; ?>" placeholder="ID Berita" readonly>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Nama Data Hasil</label>
                    <input type="text" name="nm" class="form-control" maxlength="100" placeholder="Nama Data inspeksi" value="<?php echo $q['nm_data']; ?>">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Kategori Data </label>
                    <select name="kat" class="form-control">
                      <option value="">-Kategori data Hasil-</option>
                      <?php
                      $q1=mysqli_query($koneksi,"SELECT * FROM kat_data_inspeksi");
                      while ($k=mysqli_fetch_array($q1))
                      {
                        ?>
                        <option value="<?php echo $k['id_kdi']; ?>" <?php if($k['id_kdi']==$q['id_kdi']){ echo "selected"; }else{ echo""; } ?>><?php echo $k['nm_kdi']; ?></option>
                        <?php 
                      } 
                      ?>
                    </select> 
                  </div>
                </div>
              </div>
              <br><div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Bagian Inspeksi Data </label>
                    <select name="bag" class="form-control">
                      <option value="">-Bagian Data Hasil-</option>
                      <?php
                      $q1=mysqli_query($koneksi,"SELECT * FROM bagian_inspeksi");
                      while ($k=mysqli_fetch_array($q1))
                      {
                        ?>
                        <option value="<?php echo $k['id_bag']; ?>" <?php if($k['id_bag']==$q['id_bag']){ echo "selected"; }else{ echo""; } ?>><?php echo $k['nm_bag']; ?></option>
                        <?php 
                      } 
                      ?>
                    </select> 
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Lokasi Inspeksi Data </label>
                    <select name="lok" class="form-control">
                      <option value="">-Lokasi Insfeksi Data-</option>
                      <?php
                      $q2=mysqli_query($koneksi,"SELECT * FROM lokasi_inspeksi");
                      while ($l=mysqli_fetch_array($q2))
                      {
                        ?>
                        <option value="<?php echo $l['id_lk']; ?>"<?php if($l['id_lk']==$q['id_lk']){ echo "selected"; }else{ echo""; } ?>><?php echo $l['nm_lk']; ?></option>
                        <?php 
                      } 
                      ?>
                    </select> 
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                  <a href="admin.php?p=list-data" class="btn btn-info"><i class="fa fa-table"></i> Lihat List</a>
                </div>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>
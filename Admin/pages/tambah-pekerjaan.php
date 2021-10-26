<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAMBAH DATA
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">Pekerjaan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">DATA PEKERJAAN</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <?php 
            include '../koneksi/koneksi.php';
            $q1=mysqli_fetch_array(mysqli_query($koneksi,"SELECT *  FROM pekerjaan"));
            if($q1==0)
            {
              $_POST['id_pekerjaan'] = "PK001";
            }else
            {
              $id_pekerjaan=preg_replace("/[^0-9]/","",$q1['id_pekerjaan']);
              $id_pekerjaan++;
              if(strlen($id_pekerjaan)==1)
              {
                $_POST['id_pekerjaan'] = "PK00".$id_pekerjaan;
              }else if(strlen($id_lk)==2)
              {
                $_POST['id_pekerjaan'] = "PK0".$id_pekerjaan;
              }else
              {
                $_POST['id_pekerjaan'] = "PK".$id_pekerjaan;
              }
            }
            
            if(isset($_POST['b1'])){
              if(empty($_POST['id']) or empty($_POST['nm'])){
              echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <strong>Error!</strong> Data tidak boleh ada yang kosong.
                    </div>';
              }else{
                $sql=mysqli_query($koneksi,"INSERT INTO lokasi_inspeksi values ('$_POST[id]','$_POST[nm]')");
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                      <strong>Sukses!</strong> Data berhasil ditambah.
                      </div>';
              }
            }
            ?>
            <div class="col-lg-6">
              <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Nama Usaha</label>
                      <input type="text" name="nu" class="form-control" maxlength="100" value="" placeholder="Nama Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-12 ">
                      <label>Alamat Usaha</label>
                      <input type="text" name="alamat usaha" class="form-control" maxlength="100" value="" placeholder="Alamat">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Jenis Usaha</label>
                      <input type="text" name="ju" class="form-control" maxlength="100" value="" placeholder="Jenis Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Jabatan</label>
                      <input type="text" name="ja" class="form-control" maxlength="100" value="" placeholder="Jabatan">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Nominal</label>
                      <input type="text" name="nom" class="form-control" maxlength="100" value="" placeholder="Nominal">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Tenor</label>
                      <input type="text" name="tn" class="form-control" maxlength="100" value="" placeholder="Tenor">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Angsuran/Bulan</label>
                      <input type="text" name="An" class="form-control" maxlength="100" value="" placeholder="Angsuran/Bulan">
                     </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Tempat Usaha</label>
                      <input type="file" name="An" class="form-control" maxlength="100" value="" placeholder="Angsuran/Bulan">
                     </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Selfie Bersama Tempat Usaha</label>
                      <input type="file" name="An" class="form-control" maxlength="100" value="" placeholder="Angsuran/Bulan">
                     </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Data</button>
                    <a href="admin.php?p=list-lokasi" class="btn btn-info"><i class="fa fa-table"></i> List Data</a>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>
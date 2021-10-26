<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Bagian Inspeksi
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">Tambah Bagian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Form Bagian Inspeksi</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <?php 
            include '../koneksi/koneksi.php';
            $q1=mysqli_fetch_array(mysqli_query($koneksi,"SELECT MAX(id_bag) AS id_bag FROM bagian_inspeksi"));
            $id_lk=preg_replace("/[^0-9]/","",$q1['id_bag']);
            $id_lk++;
            if(strlen($id_lk)==1)
            {
              $_POST['id'] = "B00".$id_lk;
            }else if(strlen($id_lk)==2)
            {
              $_POST['id'] = "B0".$id_lk;
            }else
            {
              $_POST['id'] = "B".$id_lk;
            }
            if(isset($_POST['b1'])){
              if(empty($_POST['id']) or empty($_POST['nm'])){
              echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <strong>Error!</strong> Data tidak boleh ada yang kosong.
                    </div>';
              }else{
                $sql=mysqli_query($koneksi,"INSERT INTO bagian_inspeksi values ('$_POST[id]','$_POST[nm]')");
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
                      <label>ID Bagian</label>
                      <input type="text" name="id" class="form-control" maxlength="100" value="<?php echo $_POST['id']; ?>" placeholder="ID Bagian" readonly>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-12 ">
                      <label>Nama Bagian</label>
                      <input type="text" name="nm" class="form-control" maxlength="100" value="" placeholder="Nama Bagian">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Bagian</button>
                    <a href="admin.php?p=list-bagian" class="btn btn-info"><i class="fa fa-table"></i> List Bagian</a>
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
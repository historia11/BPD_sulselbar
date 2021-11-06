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
        <?php 
        include '../koneksi/koneksi.php';
        if(isset($_POST['nasabah'])){
          
          $nik = $_POST['nik'];
          $nama = $_POST['nama'];
          $tempat_lahir = $_POST['tempat_lahir'];
          $tanggal_lahir = $_POST['tanggal_lahir'];
          $agama = $_POST['agama'];
          $alamat_domisili = $_POST['alamat_domisili'];
          $no_hp = $_POST['no_hp'];
          $no_hp_darurat = $_POST['no_hp_darurat'];
          $jml_tanggungan = $_POST['jml_tanggungan'];
          $ft_ktp = addslashes(file_get_contents($_FILES['ft_ktp']['tmp_name']));
          $ft_s_ktp = addslashes(file_get_contents($_FILES['ft_s_ktp']['tmp_name']));
          $ft_izin_usaha = addslashes(file_get_contents($_FILES['ft_izin_usaha']['tmp_name']));
          $ft_pp = addslashes(file_get_contents($_FILES['ft_pp']['tmp_name']));
          $sql =mysqli_query($koneksi,"INSERT INTO nasabah values ('$nik','$nama','$tempat_lahir','$tanggal_lahir','$agama','$alamat_domisili','$no_hp','$no_hp_darurat','$jml_tanggungan','$ft_ktp','$ft_s_ktp','$ft_izin_usaha','$ft_pp')");
        }
        if(isset($_POST['pekerjaan'])){

          $id_pekerjaan = "PK_".date('YmdHis');
          $nik = $_POST['nik'];
          $nm_usaha = $_POST['nm_usaha'];
          $alamat = $_POST['alamat'];
          $jenis_usaha = $_POST['jenis_usaha'];
          $lama_usaha = $_POST['lama_usaha'];
          $nominal = $_POST['nominal'];
          $tenor = $_POST['tenor'];
          $angsuran = $_POST['angsuran'];
          $ft_tmpt_usaha = addslashes(file_get_contents($_FILES['ft_tmpt_usaha']['tmp_name']));
          $ft_s_tmpt_usaha = addslashes(file_get_contents($_FILES['ft_s_tmpt_usaha']['tmp_name']));
          
          mysqli_query($koneksi,"INSERT INTO pekerjaan values ('$id_pekerjaan','$nik','$nm_usaha','$alamat','$jenis_usaha','$lama_usaha','$nominal','$tenor','$angsuran','$ft_tmpt_usaha','$ft_s_tmpt_usaha')");
       
        }
        if(isset($_POST['penghasilan_bt'])){
          $id_penghasilan = "PH_".date('YmdHis');
          $nik = $_POST['nik'];
          $pendapatan_pokok = $_POST['pendapatan_pokok'];
          $tunjangan = $_POST['tunjangan'];
          $penghasilan = $_POST['penghasilan'];
          $biaya_rutin = $_POST['biaya_rutin'];
          
          mysqli_query($koneksi,"INSERT INTO penghasilan values ('$id_penghasilan','$nik','$pendapatan_pokok','$tunjangan','$penghasilan','$biaya_rutin')");
       
        }
        if(isset($_POST['hapus'])){
          
          $nik = $_POST['nik'];
          
          mysqli_query($koneksi,"DELETE FROM nasabah WHERE nik='$nik'");
          echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            Data batal disimpan.
            </div>';
        }
        if(!isset($_POST['nasabah']) and !isset($_POST['pekerjaan']) and !isset($_POST['penghasilan_bt']))
        {
          $pilihan = mysqli_query($koneksi,"SELECT nasabah.nik AS nik1, pekerjaan.nik AS nik2, penghasilan.nik AS nik3 FROM nasabah LEFT JOIN pekerjaan ON nasabah.nik = pekerjaan.nik LEFT JOIN penghasilan ON nasabah.nik = penghasilan.nik");
          while($pilih = mysqli_fetch_array($pilihan))
          {
            if($pilih['nik1']!==$pilih['nik2'] or $pilih['nik1']!==$pilih['nik3'])
            {
              mysqli_query($koneksi,"DELETE FROM nasabah WHERE nik='$pilih[nik1]'");
            }
          }
        } 
        if((!isset($_POST['nasabah']) and !isset($_POST['pekerjaan']) and !isset($_POST['penghasilan_bt']) )or isset($_POST['hapus']))
        {
          ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">IDENTITAS NASABAH</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>NIK </label>
                      <input type="text" name="nik" class="form-control"  placeholder="NIK" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Nama </label>
                      <input type="text" name="nama" class="form-control"  placeholder="Nama" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Tempat Lahir </label>
                      <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Tanggal Lahir</label>
                      <input type="text" name="tanggal_lahir" class="form-control"  placeholder="Tanggal Lahir" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Alamat Domisili</label>
                      <input type="text" name="alamat domisili" class="form-control"  placeholder="Alamat" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>No.Handphone </label>
                      <input type="text" name="no_hp" class="form-control"  placeholder="No.Handphone" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>No. Handphone Darurat </label>
                      <input type="text" name="no_hp_darurat" class="form-control"  placeholder="No.Darurat" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Agama </label>
                      <input type="text" name="agama" class="form-control"  placeholder="Agama" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Jumlah Tanggungan</label>
                      <input type="text" name="jml_tanggungan" class="form-control"  placeholder="Jumlah Tanggungan" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto KTP </label>
                      <input type="file" name="ft_ktp" class="form-control"  placeholder="Foto KTP" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Selfie Bersama KTP</label>
                      <input type="file" name="ft_s_ktp" class="form-control"  placeholder="Foto Selfie Bersama KTP" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Keterangan Izin Usaha </label>
                      <input type="file" name="ft_izin_usaha" class="form-control"  placeholder="Foto Keterangan Izin Usaha" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto PP</label>
                      <input type="file" name="ft_pp" class="form-control"  placeholder="Foto PP" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="nasabah" class="btn btn-primary"><i class="fa fa-save"></i> Selanjutnya</button>
                  </div>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <?php
        }elseif(isset($_POST['nasabah']))
        {
          ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">DATA PEKERJAAN</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nik" class="form-control"  placeholder="Nama Usaha" value="<?= $_POST['nik'] ?>">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Nama Usaha </label>
                      <input type="text" name="nm_usaha" class="form-control"  placeholder="Nama Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Alamat Usaha </label>
                      <input type="text" name="alamat" class="form-control"  placeholder="Alamat Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Jenis Usaha</label>
                      <input type="text" name="jenis_usaha" class="form-control"  placeholder="Jenis Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Lama Usaha</label>
                      <input type="text" name="lama_usaha" class="form-control"  placeholder="Lama Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Nominal</label>
                      <input type="text" name="nominal" class="form-control"  placeholder="Nominal">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Tenor</label>
                      <input type="text" name="tenor" class="form-control"  placeholder="Tenor">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Angsuran / bulan</label>
                      <input type="text" name="angsuran" class="form-control"  placeholder="Angsuran / bulan">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Tempat Usaha</label>
                      <input type="file" name="ft_tmpt_usaha" class="form-control"  placeholder="Foto Tempat Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Foto Selfie Tempat Usaha</label>
                      <input type="file" name="ft_s_tmpt_usaha" class="form-control"  placeholder="Foto Selfie Tempat Usaha">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="pekerjaan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                  </div>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <?php
        }elseif(isset($_POST['pekerjaan']))
        {
          ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> DATA PENGHASILAN</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nik" value="<?= $_POST['nik'] ?>">
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Pendapatan Pokok </label>
                      <input type="text" name="pendapatan_pokok" class="form-control"  placeholder="Pendapatan Pokok">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Tunjangan</label>
                      <input type="text" name="tunjangan" class="form-control"  placeholder="Tunjangan">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Penghasilan</label>
                      <input type="text" name="penghasilan" class="form-control"  placeholder="Penghasilan">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Biaya Rutin</label>
                      <input type="text" name="biaya_rutin" class="form-control"  placeholder="Biaya Rutin">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="penghasilan_bt" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    <a href="admin.php?p=list-data" class="btn btn-info"><i class="fa fa-table"></i> Lihat List</a>
                  </div>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <?php
        }elseif(isset($_POST['penghasilan_bt']))
        {
          ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> KONFIRMASI</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nik" class="form-control"  placeholder="Nama Usaha" value="<?= $_POST['nik'] ?>">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="hapus" class="btn btn-danger"><i class="fa fa-delete"></i> Hapus Data</button>
                    <a href="admin.php?p=list-nasabah" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</a>
                  </div>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <?php
        }
        ?>

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

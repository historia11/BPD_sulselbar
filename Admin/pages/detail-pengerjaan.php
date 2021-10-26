<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Pengerjaan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Detail Pengerjaan</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
<!-- Main row -->
<?php
include '../koneksi/koneksi.php';
$id_dt = $_GET['id_dt'];
$sqlLokasi = mysqli_fetch_array(mysqli_query($koneksi,"SELECT data.nm_data, lokasi_inspeksi.nm_lk, bagian_inspeksi.nm_bag ,kat_data_inspeksi.nm_kdi FROM data, lokasi_inspeksi, bagian_inspeksi, kat_data_inspeksi WHERE data.id_data='$id_dt' and data.id_lk=lokasi_inspeksi.id_lk and data.id_bag=bagian_inspeksi.id_bag and data.id_kdi=kat_data_inspeksi.id_kdi"));
?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo $sqlLokasi['nm_data']." - ";?><span style="font-size: 14px"><?php echo $sqlLokasi['nm_lk']." - ".$sqlLokasi['nm_bag']." - ".$sqlLokasi['nm_kdi'];?></span></h3> 
            <hr> 
          </div><!-- /.box-header -->
          <div class="box-body">
            <!-- Awal dari Data -->
            <?php
            include '../waktu/waktu.php';
            $id=$_GET['id']; 
            $sqlKop = mysqli_query($koneksi,"SELECT * FROM pengerjaan,petugas WHERE pengerjaan.id_peng = '$_GET[id]' and petugas.id_ptg=pengerjaan.id_teknisi");
            while($kop=mysqli_fetch_array($sqlKop)){
              ?>
              <div class="row">
                <table>
                  <tr>
                    <td>
                  <div class="col-md-12">
                    <p style="font-size: 16px"><b>Hari : </b><?php echo $kop['hari']; ?> </p>
                  </div>
                  </td>
                  <td>
                  <div class="col-md-12">
                    <p style="font-size: 16px"><b>Tanggal : </b><?php echo tgl_indo($kop['tgl_mulai']); ?> - <?php echo tgl_indo($kop['tgl_selesai']); ?> </p>
                  </div>
                  </td>
                  <td>
                  <div class="col-md-12">
                    <p style="font-size: 16px"><b>Jam : </b><?php echo $kop['jam_mulai']; ?> - <?php echo $kop['jam_selesai']; ?> </p>
                  </div>
                  </td>
                  <td>
                  
                  <div class="col-md-12">
                    <p style="font-size: 16px"><b>Teknisi : </b><?php echo $kop['nm_ptg']; ?> </p>
                  </div>
                  </td>
                  </tr>
                </table>
              </div>  
              <hr>
            <?php  
            }        
            
            ?>
            <!-- Akhir Dari Data -->
            
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
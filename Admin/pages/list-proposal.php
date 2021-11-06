<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Data
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="admin.php"> Home</a></li>
            <li class="active">List Data</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                   <div class="table-responsive">    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NASABAH</th>
                        <th>NIK</th>
                        <th>JENIS USAHA</th>
                        <th>NOMINAL</th>
                        <th>TENOR</th>
                        <th>ANGSURAN</th>
                        <th>TGL.TERAKHIR SETOR</th>
                        <th width="10%">KETERANGAN</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    $sql=mysqli_query($koneksi,"SELECT * FROM nasabah");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $q['nama']; ?></td>
                        <td><?php echo $q['nik']; ?></td>
                        <td><?php echo $q['agama']; ?></td>
                        <td><?php echo $q['no_hp']; ?></td>
                        <td><?php echo $q['no_hp_darurat']; ?></td>
                        <td><?php echo $q['jml_tanggungan']; ?></td>
                        <td><?php echo $q['ft_ktp']; ?></td>
                        <td><?php echo $q['ft_s_ktp']; ?></td>
                        <td><?php echo $q['ft_izin_usaha']; ?></td>
                        <td><?php echo $q['ft_pp']; ?></td>
                        
                        <td>
                          <a href="admin.php?p=edit-data&nik=<?php echo $q['nik']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                          <a href="./pages/delete-data.php?nik=<?php echo $q['nik']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>

                  <?php } ?>
                    </tbody>
                  </table>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->


    <?php
    include '../koneksi/koneksi.php';
    if(isset($_POST['hapus']))
    {
      mysqli_query($koneksi,"DELETE FROM nasabah WHERE nik='$_POST[nik]'");
    }
    ?>
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
                  <table id="example1" class="table table-bordered table-striped text-nowrap">
                      
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NASABAH</th>
                        <th>NIK</th>
                        <th>NO.HP</th>
                        <th>FOTO KTP</th>
                        <th width="10%">AKSI</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                      $no=0;
                    $sql=mysqli_query($koneksi,"SELECT * FROM nasabah");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;
                        
                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $q['nik']; ?></td>
                        <td><?php echo $q['nama']; ?></td>
                        <td><?php echo $q['no_hp']; ?></td>
                        <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $q['ft_ktp'] ).'" width="200px"/>'; ?></td>
                        <td>
                          <form action=""  method="post" >
                            <input type="hidden" name="nik" value="<?=$q['nik']?>">
                            <!-- <a class="btn btn-info" href="">Detail</a>
                            <a class="btn btn-success" href="">Edit</a> -->
                            <button class="btn btn-danger" name="hapus" onclick="return confirm('Yakin untuk menghapus data?')">Delete</button>
                          </form>
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
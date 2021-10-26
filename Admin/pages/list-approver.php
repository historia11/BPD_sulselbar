<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      List Approver
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin.php"> Home</a></li>
      <li class="active">List Approver</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Approver</h3>  
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">    
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Approver</th>
                    <th>Nama Approver</th>
                    <th>Username</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Foto</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include './../waktu/waktu.php'; 
                  include './../koneksi/koneksi.php'; 
                  $no=0;
                  $sql=mysqli_query($koneksi,"SELECT * FROM approver");
                  while($q=mysqli_fetch_array($sql)){
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $q['id_pp']; ?></td>
                      <td><?php echo $q['nm_pp']; ?></td>
                      <td><?php echo $q['username']; ?></td>
                      <td><?php echo tgl_indo(date('Y-m-d',strtotime($q['tgl_lahir']))); ?></td>
                      <td><?php echo $q['jekel']; ?></td>
                      <td><?php echo $q['alm']; ?></td>
                      <td><?php echo $q['telp']; ?></td>
                      <td><a href="../images/akun/<?php echo $q['ft']; ?>" target="_blank"><img src="../images/akun/<?php echo $q['ft']; ?>" alt="" class="img-thumbnail" style="width: 180px"></a></td>
                      <td>
                        <a href="admin.php?p=edit-approver&id=<?php echo $q['id_pp']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="./pages/delete-approver.php?id=<?php echo $q['id_pp']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php 
                  } 
                  ?>
                </tbody>
              </table>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
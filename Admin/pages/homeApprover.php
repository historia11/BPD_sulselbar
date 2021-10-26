<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home
           
          </h1>
          <ol class="breadcrumb">
            <li class="active">Home</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
             <div class="col-md-12">
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <strong>Selamat Datang !</strong> Dimenu Approver.
                </div>
            </div>
          

      
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
               
                             <?php 
                        include '../koneksi/koneksi.php';
                        $q=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM approver where id_pp='$_SESSION[id]'"));
                      ?>
              <img class="profile-user-img img-responsive img-circle" src="../images/akun/<?php echo $q['ft']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $q['nm_pp']; ?></h3>

              <p class="text-muted text-center"></p>
              
              
               
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                 
                </li>
                
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Biodata</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
             
                   
                    
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                     
                      <input type="text" class="form-control" name="nm" id="inputName" value="<?php echo $q['nm_pp']; ?>" placeholder="Name" readonly>
                     
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <div class="radio">
                      <label for="Gender-0">
                           <input type="radio" name="jekel" id="Gender-0" value="Laki-laki"<?php if($q['jekel']=="Laki-laki"){ echo"Checked"; }else{ echo""; } ?> readonly>
                        
                          Laki-laki </label>
                      </div>
                      <div class="radio">
                      <label for="Gender-1">
                          <input type="radio" name="jekel" id="Gender-1" value="Perempuan" <?php if($q['jekel']=="Perempuan"){ echo"Checked"; }else{ echo""; } ?> readonly>
                          Perempuan </label>
                      </div>
                  
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Tanggal Lahir</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" name="tgl" value="<?php echo $q['tgl_lahir']; ?>" placeholder="YYYY-MM-DD" readonly>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="alm" readonly><?php echo $q['alm']; ?></textarea>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Telepon</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" name="telp" value="<?php echo $q['telp']; ?>" placeholder="telp" readonly>
                    
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" name="user" value="<?php echo $q['username']; ?>" placeholder="Username" readonly>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputSkills" name="pas" value="<?php echo $q['password']; ?>" placeholder="Password" readonly>
                     
                    
                    </div>
                  </div>
                 
                  
         
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
     
           
          </div><!-- /.row -->
          <!-- Main row -->
     
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
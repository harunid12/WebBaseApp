<?php 
  
  $tanggal = $data['tgl_lahir'];
  $tanggal = explode('-',$tanggal);
  $tgl = $tanggal[1] .'/'. $tanggal[2] .'/'. $tanggal[0];
  // var_dump($tgl)

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../images/default.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $data['nama'] ?></h3>

                <p class="text-muted text-center"><?php echo $data['pekerjaan'] ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link"  data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                    <form action="?page=profile_update" method="POST" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10 input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="tgl_lahir" value="<?php echo $tgl ?>" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                      <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" id="pekerjaan" placeholder="Pekerjaan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  id="alamat" name="alamat" placeholder="Alamat"><?php echo $data['alamat']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="usern" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $data['username']; ?>" id="usern" placeholder="username" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pass" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="pass" placeholder="********">
                          <p class="text-danger">biarkan kosong jika tidak diganti!!</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
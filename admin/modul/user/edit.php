<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">edit user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
      $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'"));
      $tanggal = $data['tgl_lahir'];
      $tanggal = explode('-',$tanggal);
      $tgl = $tanggal[1] .'/'. $tanggal[2] .'/'. $tanggal[0];
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=user_update" method="POST" class="form-horizontal">
                <input type="hidden" class="form-control" id="id" name="id" placeholder="Id" value="<?php echo $data['id']; ?>" />
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
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
                    <label for="work" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="work" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                    </div>
                  </div>

                      <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  id="alamat" name="alamat" placeholder="Alamat"><?php echo $data['alamat']; ?></textarea>
                        </div>
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Update</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
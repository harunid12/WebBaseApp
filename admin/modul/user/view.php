<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
                <a href="#" type="button" style="margin-left: 81%" class="btn btn-primary btn-sm mt-2 mr-3" data-toggle="modal" data-target="#modal-default">
                <span><i class='fa fa-plus'></i> Tambah User</span>
              </a>

              </div>
              
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10">No</th>
                  <th width="150">Nama</th>
                  <th width="120">Tanggal Lahir</th>
                  <th width="20">Pekerjaan</th>
                  <th width="10">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qry = mysqli_query($koneksi, "SELECT * FROM user Order by id Asc");
                    while ($usr = mysqli_fetch_array($qry)){
                  ?>
                <tr>
                  <?php
                    $tgl = getTglIndo($usr['tgl_lahir']);
                      $no++;
                      echo "
                      <td><center>$no</center></td>
                      <td>$usr[nama]</td>
                      <td>$tgl</td>
                      <td>$usr[pekerjaan]</td>
                      <td>
                        <center>
                         <a href='media.php?page=user_edit&id=$usr[id]' onclick='return qh(); class='tooltip-success' data-rel='tooltip' title='Edit'>
                              <span style='color:green'><i class='fa fa-edit'></i></span> 
                          </a>
                          ||
                          <a href='media.php?page=user_delete&id=$usr[id]' onclick='return qh();' class='tooltip-error' data-rel='tooltip' title='Delete'>
                              <span style='color:red'><i class='fa fa-trash'></i></span>
                          </a>
                        </center>
                      </td>";
                      ?>
                </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="card-body">
            <form action="?page=user_save" role="form" name="modal_popup" onSubmit="return validasi()" enctype="multipart/form-data" method="POST">  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
             </div>
             <div class="input-group mb-3">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                  <input type="text" class="form-control datetimepicker-input" id="reservationdate" name="tgl_lahir" placeholder="Tanggal Lahir" data-target="#reservationdate"/>
             </div>
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                </div>
                  <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
             </div>
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                </div>
                  <textarea class="form-control"  id="alamat" name="alamat" placeholder="Alamat"></textarea>
             </div>
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-info"></i></span>
                </div>
                  <input type="text" class="form-control" name="username" placeholder="username">
             </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->

  
  
            
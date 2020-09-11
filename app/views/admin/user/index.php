<!-- Start content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h1 class="m-t-0 header-title mb-4">User</h4>
            <div class="col">

              <div class="row">
                <a href="<?php echo BASEURL; ?>/User/index/id" class="btn btn-primary mb-3 ml-2"> <i
                    class="mdi mdi-plus"></i> Tambah User</a>
              </div>
              <?php 
          if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
          }
          $_SESSION['pesan'] = '';
          ?>
              <table id="datatable" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
              $no=1; foreach ($data['arr'] as $k=>$v) {
                ?>
                  <tr>
                    <td><?php echo $v['nama_lengkap']; ?></td>
                    <td><?php echo $v['username']; ?></td>
                    <td><?php echo $v['status']; ?></td>
                    <td>
                      <a href="<?php echo BASEURL; ?>/User/edit/<?php echo $v['username']; ?>"
                        class="btn btn-warning">Edit</a>
                      <a href="javascript:hapus('User', '<?php echo $v['username']; ?>', '<?php echo $v['nama_lengkap']; ?>');"
                        class="btn btn-danger"><i class="fa fa-trash-o "></i> Hapus</a>
                    </td>
                  </tr>
                  <?php
                $no++;
              }
              ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
    <!--- end row -->
  </div>
  <!-- container -->
</div>
<!-- content -->
<script>
  function hapus(act, username, nama_lengkap) {
    if (confirm("Apakah Anda yakin ingin menghapus " + nama_lengkap + "?")) {
      window.open("<?php echo BASEURL; ?>/" + act + "/delete/" + username, "_self");
    }
  }
</script>
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h1 class="m-t-0 header-title mb-4">Perangkat Jaringan</h4>
                        <div class="col">
                            <div class="row">
                                <a href="<?php echo BASEURL; ?>/Perangkat/index/id" class="btn btn-primary mb-3 ml-2"> <i class="mdi mdi-plus"></i> Tambah
                                    Perangkat Jaringan</a>
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
                                        <th>Nama Perangkat</th>
                                        <th>IP Address</th>
                                        <th>Gedung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1; foreach ($data['arr'] as $k=>$v) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v['nama_perangkat']; ?></td>
                                        <td><?php echo $v['ip_perangkat']; ?></td>
                                        <td><?php echo $v['gedung']; ?></td>
                                        <td>
                                        <a href="<?php echo BASEURL; ?>/Perangkat/edit/<?php echo $v['id_perangkat']; ?>"
                                            class="btn btn-warning">Edit</a>
                                        <a href="javascript:hapus('Perangkat', '<?php echo $v['id_perangkat']; ?>', '<?php echo $v['nama_perangkat']; ?>');"
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
  function hapus(act, id_perangkat, nama_perangkat) {
    if (confirm("Apakah Anda yakin ingin menghapus " + nama_perangkat + "?")) {
      window.open("<?php echo BASEURL; ?>/" + act + "/delete/" + id_perangkat, "_self");
    }
  }
</script>
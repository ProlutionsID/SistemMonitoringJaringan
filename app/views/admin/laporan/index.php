    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1 class="m-t-0 header-title mb-4">Laporan</h4>
                            <?php 
                        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                            echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
                        }
                        $_SESSION['pesan'] = '';
                        ?>
                            <div class="col">
                                <div id="basicwizard" class=" pull-in">
                                    <ul class="nav nav-tabs ">
                                        <li class="nav-item"><a href="#tab1" data-toggle="tab"
                                                class="nav-link">Status</a></li>
                                        <li class="nav-item"><a href="#tab2" data-toggle="tab"
                                                class="nav-link">Traffic</a></li>
                                        <li class="nav-item"><a href="#tab3" data-toggle="tab"
                                                class="nav-link">Client</a></li>
                                    </ul>
                                    <div class="tab-content b-0 mb-0">
                                        <div class="tab-pane m-t-10 fade" id="tab1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>SSID</th>
                                                                <th>Gedung</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                                <th>Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach ($data['arr'] as $k=>$v) { ?>
                                                            <tr>
                                                                <td><?php echo $v['nama_perangkat']; ?></td>
                                                                <td><?php echo $v['gedung']; ?></td>
                                                                <td><?php echo $v['tanggal']; ?></td>
                                                                <td><?php echo $v['waktu']; ?></td>
                                                                <td>
                                                                    <?php if($v['keterangan']=='up'): ?>
                                                                    <a style="color:green" style="color:green"
                                                                        href="javascript:void(0)" data-toggle="modal"
                                                                        data-target="#detail_status<?php echo $v['id_status']?>"><i
                                                                            class="fa fa-caret-up"></i>
                                                                        <?php echo $v['keterangan']; ?>
                                                                    </a>
                                                                    <?php endif?>
                                                                    <?php if($v['keterangan']=='down'): ?>
                                                                        <a style="color:red" style="color:red"
                                                                        href="javascript:void(0)" data-toggle="modal"
                                                                        data-target="#detail_status<?php echo $v['id_status']?>"><i
                                                                            class="fa fa-caret-down"></i>
                                                                        <?php echo $v['keterangan']; ?>
                                                                    </a>
                                                                    <?php endif?>
                                                                </td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane m-t-10 fade" id="tab2">
                                            <div class="row">
                                                <div class="col-12">

                                                    <!-- <div class="card-box"> -->
                                                    <form action="">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-dark waves-effect waves-light"
                                                                    type="button">Cari</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <h4 class="header-title mt-0">Statistics</h4>
                                                    <div id="morris-bar-example" style="height: 280px; width: 400px;">
                                                    </div>
                                                    <!-- </div> -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane m-t-10 fade" id="tab3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row clearfix">
                                                        <div class="col-lg-12">

                                                            <h4 class="header-title mt-0">Total Revenue</h4>
                                                            <div id="morris-line-example"
                                                                style="height: 280px; width: 400px;"></div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!--- end row -->

            <!-- Modal detail status -->
            <?php $no=1; foreach ($data['traffic'] as $k=>$v) : ?>
            <div class="modal fade" id="detail_status<?php echo $v['id_status']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myLargeModalLabel">Detail Status <?php echo $v['nama_perangkat']?> </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4><?php echo $v['nama_perangkat']?></h4>
                                    <h4><?php echo $v['gedung']?></h4>
                                    <h4>IP: <?php echo $v['ip_perangkat']?></h4>
                                </div>
                                <div class="col-4">
                                    <?php if($v['keterangan']=='up'):?>
                                    <h1 style="color:green" class="mx-auto"><i class="fa fa-arrow-circle-up"></i> <?php echo $v['keterangan']?>
                                    </h1>
                                    <?php endif ?>
                                    <?php if($v['keterangan']=='down'):?>
                                    <h1 style="color:red" class="mx-auto"><i class="fa fa-arrow-circle-down"></i> <?php echo $v['keterangan']?>
                                    </h1>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php if($v['keterangan']=='down'):?>
                                <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Transmitted(Byte)</th>
                                            <th>Receive(Byte)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td colspan='3' class="text-center"><i>No Connections</i></td>
                                    </tbody>
                                </table>
                            </div>
                            <?php else:?>
                                <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Transmitted(Byte)</th>
                                            <th>Receive(Byte)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $v['jumlah_client']?></th>
                                            <td><?php echo $v['transmitte']?></td>
                                            <td><?php echo $v['receive']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php endif?>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <?php endforeach?>
            <!-- /.modal -->


        </div>
        <!-- container -->
    </div>
    <!-- content -->
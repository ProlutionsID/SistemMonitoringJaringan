<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h1 class="m-t-0 header-title mb-4">Perangkat Jaringan</h4>
                        <div class="col">
                            <h3 class="text-center">Form Edit Perangkat</h4>
                                <form action="<?php echo BASEURL; ?>/Perangkat/save" method="post"  data-parsley-validate novalidate>

                                <input type="hidden" name="id_perangkat" value="<?php echo $data['perangkat']['id_perangkat']; ?>">
 
                                    <div class="form-group">
                                        <label for="nama_perangkat">Nama Perangkat</label>
                                        <input type="text" name="nama_perangkat" value="<?php echo $data['perangkat']['nama_perangkat']; ?>" required
                                            placeholder="Enter Nama Perangkat" class="form-control" id="nama_perangkat">
                                    </div>
                                    <div class="form-group">
                                        <label for="ip_perangkat">IP Address</label>
                                        <input type="text" name="ip_perangkat" value="<?php echo $data['perangkat']['ip_perangkat']; ?>" required placeholder="Enter IP Address"
                                            class="form-control" id="ip_perangkat">
                                    </div>
                                    <div class="form-group">
                                        <label for="gedung">Nama Gedung</label>
                                        <input type="email" name="gedung" value="<?php echo $data['perangkat']['gedung']; ?>" required placeholder="Enter Nama Gedung"
                                            class="form-control" id="gedung">
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Submit
                                        </button>
                                    </div>

                                </form>
                        </div>
                </div>
            </div>
        </div>
        <!--- end row -->
    </div>
    <!-- container -->
</div>
<!-- content -->
<!-- Start content -->
<div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-box">
                  <h1 class="m-t-0 header-title mb-4">Perangkat Jaringan</h4>
                <div class="col">
                    <h3 class="text-center">Form Tambah Perangkat</h4>
                    <form action="<?php echo BASEURL; ?>/Perangkat/add" method="post" data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="nama_perangkat">Nama Perangkat</label>
                            <input type="text" name="nama_perangkat" required
                                   placeholder="Enter Nama Perangkat" class="form-control" id="nama_perangkat">
                        </div>
                        <div class="form-group">
                            <label for="ip_perangkat">IP Address</label>
                            <input type="text" name="ip_perangkat" required
                                   placeholder="Enter IP Address" class="form-control" id="ip_perangkat">
                        </div>
                        <div class="form-group">
                            <label for="gedung">Nama Gedung</label>
                            <input type="email" name="gedung"  required
                                   placeholder="Enter Nama Gedung" class="form-control" id="gedung">
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

  <!-- Start content -->
  <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-box">
                  <h1 class="m-t-0 header-title mb-4">Gedung</h4>
                <div class="col">
                    <h3 class="text-center">Form Tambah Gedung</h4>
                    <form action="<?php echo BASEURL; ?>/Gedung/add" method="post" data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="kode_gedung">Kode Gedung</label>
                            <input type="text" name="kode_gedung" required
                                   placeholder="Enter Kode Gedung" class="form-control" id="kode_gedung">
                        </div>
                        <div class="form-group">
                            <label for="nama_gedung">Nama Gedung</label>
                            <input type="email" name="nama_gedung"  required
                                   placeholder="Enter Nama Gedung" class="form-control" id="nama_gedung">
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
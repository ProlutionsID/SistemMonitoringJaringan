 <!-- Start content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-box">
                  <h1 class="m-t-0 header-title mb-4">User</h4>
                <div class="col">
                    <h3 class="text-center">Form Tambah User</h4>
                    <form action="<?php echo BASEURL; ?>/User/add" method="post" data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" required
                                   placeholder="Enter Nama Lengkap" class="form-control" id="namalengkap">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" required
                                   placeholder="Enter Username" class="form-control" id="ipaddress">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password"  required
                                   placeholder="Enter Password" class="form-control" id="password">
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
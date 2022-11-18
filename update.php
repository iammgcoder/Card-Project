<?php
require('./include/header.php');
$card_details = $mysqli->query('SELECT * FROM `card_details` where `id`=' . $_GET['id'] . ' ');

$result = $card_details->fetch_object();
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Card Select</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                  <form action="./function.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                      <div class="card-body">
                        <!-- color start -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Card Color</label>
                                <input type="color" name="color" required value="<?= $result->color ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Text Color</label>
                                <input type="color" name="text_color" required value="<?= $result->text_color ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Lable Color</label>
                                <input type="color" name="heading_p_tag" required value="<?= $result->heading_p_tag ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Banner Color</label>
                                <input type="color" name="header_color" required value="<?= $result->header_color ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /color end -->
                        <!-- text filed start -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="form-control" class="form-control" name="first_name" required value="<?= $result->first_name ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" name="last_name" required value="<?= $result->last_name ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Mobile</label>
                              <input type="text" class=" form-control" name="mobile_number" required value="<?= $result->mobile_number ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Phone</label>
                              <input type="text" class="form-control" name="phone_number" required value="<?= $result->phone_number ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="Email" class=" form-control" name="email" required value="<?= $result->email ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Job Profile</label>
                              <input type="link" class="form-control" name="job_profile" required value="<?= $result->job_profile ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Website</label>
                              <input type="website" class="form-control" name="website_link" required value="<?= $result->website_link ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="link" class="form-control" name="linkden_link" required value="<?= $result->linkden_link ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Youtube</label>
                              <input type="link" class="form-control" name="youtube_link" required value="<?= $result->youtube_link ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Division</label>
                              <input type="link" class="form-control" name="division" required value="<?= $result->division ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <!-- File Upload -->
                            <div class="form-group">
                              <label for="exampleInputFile">Profile Image</label>
                              <img src="./uploads/<?= $result->profile_pic ?>" class="profile w-25 rounded img-thumbnail float-right" alt="Not available">
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="profile_pic" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputFile">Background Image</label>
                              <img src="./uploads/<?= $result->background_img ?>" class="background w-50 rounded img-thumbnail float-right" alt="Not available">
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="background_img" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Street Address</label>
                              <textarea class="form-control" rows="4" name="address"><?= $result->address ?></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <!-- <label>Street Address</label>
                              <textarea class="form-control" rows="4" name="address"><?= $result->address ?></textarea> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- text filed end -->
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="addcard" value="Submit">Submit</button>
                        <a type="button" class="btn btn-default float-right" href="./index.php">Cancel</a>
                      </div>
                  </form>
            </div>
          </div>
          <!-- /.card -->
      <!-- /.container-fluid -->
      </section>
    </div>
    <!-- /.content -->
  </div>
  <?php
require('./include/footer.php');
?>
<?php
require('./include/header.php');
$card_details = $mysqli->query('SELECT * FROM `card_details`');
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title pt-2 float-start">DataTable with minimal features & hover style</h3>
                <a type="button" class="btn float-right bg-gradient-primary" href="./addcard.php">ADD Card</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Personal Info</th>
                    <th>Contact Number</th>
                    <th>Link</th>
                    <th>Division</th>
                    <th>Job Profile</th>
                    <th>Profile Image</th>
                    <th>Background Image</th>
                    <th>Color</th>
                    <th>Street Address</th>
                    <th>Edit / Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    if ($card_details->num_rows) {
                      foreach ($card_details->fetch_all() as $key => $value) {
                  ?>
                  <tr>
                    <td> First :<?= $value[1] ?><br>Last :<?= $value[2] ?></td>
                    <td> Mobile Number :<?= $value[3] ?><br> Phone Number :<?= $value[4] ?> <br> Email :<?= $value[5] ?> </td>
                    <td> Website :<?= $value[6] ?><br> Linkedin :<?= $value[7] ?> <br> Youtube :<?= $value[8] ?> </td>
                    <td><?= $value[9] ?></td>
                    <td><?= $value[10] ?></td>
                    <td><img src="./uploads/<?= $value[11] ?>" alt="" class=" w-25"></td>
                    <td><img src="./uploads/<?= $value[12] ?>" alt="" class=" w-25"></td>
                    <td> Card :<?= $value[13] ?><br> Text :<?= $value[14] ?> <br> Lable :<?= $value[15] ?> <br> Banner :<?= $value[16] ?> </td>
                    <td><?= $value[17] ?></td>
                   
                            <td>
                                <a href="update.php?id=<?= $value[0] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <!-- <a href="/delete" class="delete" data-confirm="Are you sure to delete this item?">Delete</a> -->
                                <a href="./function.php?deleteid=<?=$value[0]?>" onclick="alert('are you sure ?')" class="delete"><i class="fa fa-trash delete" aria-hidden="true"></i></a>
                                <a href="./card.php?id=<?= $value[0] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                  </tr>
                  <?php
                    }
                    } else 
                    {
                    ?>
                  <tr>
                    <td colspan="13">No Date</td>
                  </tr>
                  <?php
                    }
                  ?>
                  <tfoot>
                      <tr>
                        <th>Personal Info</th>
                        <th>Contact Number</th>
                        <th>Link</th>
                        <th>Division</th>
                        <th>Job Profile</th>
                        <th>Profile Image</th>
                        <th>Background Image</th>
                        <th>Color</th>
                        <th>Street Address</th>
                        <th>Edit / Delete</th>
                      </tr>
                  </tfoot>
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
  </div>
<?php
require('./include/footer.php');
?>
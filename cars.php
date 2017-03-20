<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require('head.php'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>BRATEX</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php require('menu_profile.php'); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php require('menu_sidebar.php'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php require('top_nav.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <h1>CAROVI</h1>

                    <?php
                        $sql = "SELECT brands.name, cars.id, cars.model, cars.mileage, cars.color FROM brands, cars WHERE brands.id = cars.brand_id;";
                        $result = $mysqli->query($sql);
                    ?>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Brand</th>
                          <th>Model</th>
                          <th>Kilometraza</th>
                          <th>Boja</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
    while ($cars = $result->fetch_assoc()) {
        echo('<tr>');
        echo('<th scope="row">' . $cars['id'] . '</th>');
        echo('<td>' . $cars['name'] . '</td>');
        echo('<td>' . $cars['model'] . '</td>');
        echo('<td>' . $cars['mileage'] . '</td>');
        echo('<td>' . $cars['color'] . '</td>');
        echo('<td><a href="cars_edit.php?id=' . $cars['id'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>');
        echo('<td><a href="cars_delete.php?id=' . $cars['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></td>');
        echo('</tr>');
    }
?>                        
                      </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
         <?php require('footer.php'); ?>
        <!-- /footer content -->
      </div>
    </div>

    <?php require('js.php'); ?>
	
  </body>
</html>
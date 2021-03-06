<?php require('connect.php');?>
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
                <h3>CAROVI</h3>
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
                    <h1>Unos</h1>

                <?php
                        $sql = "SELECT brands.name, cars.id, cars.model, cars.mileage, cars.color FROM brands, cars WHERE brands.id = cars.brand_id;";
                        $result = $mysqli->query($sql);

                        $sql1 = "SELECT id, name FROM brands";
                        $result1 = $mysqli->query($sql1);
                    ?>
                
                <form action="cars_create.php" method="post" class="form-horizontal form-label-left" >
                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="model">Brand: <span class="required"></span>
                </label>               
                <div class=form-group>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="brand_id" name="brand_id" class="form-control col-md-7 col-xs-12">
                <?php 
                while ($row = mysqli_fetch_array($result1))
                {
                  echo '<option value="'. $row['id'] .'">'. $row['name'] .'</option>';
                }
                ?>
                </select>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="model">Model: <span class="required"></span>
                </label>
                <div class=form-group>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="model" name="model" required="required" class="form-control col-md-7 col-xs-12"></div>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mileage">Kilometraza: <span class="required"></span>
                </label>
                <div class=form-group>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="mileage" name="mileage" required="required" class="form-control col-md-7 col-xs-12"></div>             
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="color">Kolor: <span class="required"></span>
                </label>
                <div class=form-group>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="color" name="color" required="required" class="form-control col-md-7 col-xs-12"></div>
                </div>
                <div class=form-group>
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                
                <button type="submit" value="unesi" class="btn btn-success">Unesi</button>
                </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<?php require('js.php'); ?>
	
  </body>
</html>
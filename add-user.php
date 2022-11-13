<?php 
session_start();
include_once "function.php";
include_once "db.php";
?>

<?php HeaderTop() ?>
<?php Sidebar() ?>
  <form class="form-horizontal" data-toggle="validator" action="action/post-user.php" method="post">
    <div class="panel panel-primary">
          <div class="panel-heading">
              <div class="col-md-9 heading_title">
                  Add Information
              </div>
              <div class="col-md-3 text-right">
                <a href="user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
              </div>
              <div class="clearfix"></div>
          </div>
        <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" name="name" class="form-control" placeholder="JR John">
                                
                <?php 
                  if(isset($_SESSION['name_empty'])){
                    ?>
                  <div class="error_msg"><p>
                    <?php 
                      echo $_SESSION['name_empty'];
                      unset($_SESSION['name_empty']);
                    ?>
                  </p></div>
                  <?php } ?>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Username</label>
              <div class="col-sm-8">
                <input type="text" name="username" class="form-control" placeholder="jrjohn">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" name="email" class="form-control" placeholder="example@email.com">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Number</label>
              <div class="col-sm-8">
                <input type="number" name="number" class="form-control" placeholder="01234-567812">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Gender</label>
              <div class="col-sm-8">
                <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="" value="male">
                      Male
                    </label>
                    <label>
                      <input type="radio" name="gender" id="" value="female">
                      Female
                    </label>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-8">
                <input type="password" name="password" class="form-control" placeholder="********">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-8">
                <input type="password" name="password" class="form-control" placeholder="********">
              </div>
            </div>
        </div>
        <div class="panel-footer text-center">
          <input type="reset" class="btn btn-sm btn-default" value="Clear">
          <button class="btn btn-sm btn-primary">REGISTRATION</button>
        </div>
      </div>
    </form>
<?php Footer() ?>
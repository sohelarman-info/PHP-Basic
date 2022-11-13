<?php 
session_start();
include_once "function.php";
include_once "db.php";
HeaderTop();
Sidebar();

  if(isset($_SESSION['insert'])){
?>
  <div class="message-success">
    <p>
      <?php 
        echo $_SESSION['insert'];
        unset($_SESSION['insert']);
      ?>
    </p>
  </div>
<?php } 

  if(isset($_SESSION['delete'])){
?>
  <div class="message-fail">
    <p>
      <?php 
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
      ?>
    </p>
  </div>
<?php } ?>

  <div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-9 heading_title">
            All Information View
          </div>
          <div class="col-md-3 text-right">
          <a href="add-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Information</a>
        </div>
        <div class="clearfix"></div>
    </div>
  <div class="panel-body">
      <table class="table table-responsive table-striped table-hover table_cus">
          <thead class="table_head">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Number</th>
                <th class="hidden-xs">Gender</th>
                <th>Manage</th>
            </tr>
          </thead>
            <tbody>
              <?php 
                $select = "SELECT * FROM user";
                $query  = mysqli_query($db, $select);
                foreach($query as $key => $user){
              ?>
              <tr>
                  <td><?= $key+1 ?>.</td>
                  <td><?= $user['name'] ?></td>
                  <td><?= $user['username'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td><?= $user['number'] ?></td>
                  <td><?= $user['gender'] ?></td>
                  <td>
                    <a href="edit-user.php?id=<?=$user['id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                    <a href="action/delete-user.php?id=<?=$user['id']?>"><i class="fa fa-trash fa-lg"></i></a>
                  </td>
                </tr>
                <?php }?>
            </tbody>
      </table>
  </div>
  <div class="panel-footer">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-right">
      <nav aria-label="Page navigation">
          <ul class="pagination pagina_cus">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
    <div class="clearfix"></div>
  </div>
</div>


<?php Footer() ?>
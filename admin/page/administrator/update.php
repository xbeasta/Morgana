<?php

    include "../config.php";

    if(isset($_POST["update"])){
        $admin_id = $_POST["id"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        $db->query("UPDATE admin set username = '$username', password = '$password' WHERE id = '$admin_id'");
        header("location:index.php?administrator");
    }

    $id_admin = $_GET["administrator-update"];
    $edit = $db->query("SELECT * FROM admin WHERE id = '$id_admin'");
    $row_edit = mysqli_fetch_array($edit);

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Accounts</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $row_edit['username']?>"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" value="<?php echo $row_edit['password']?>" />
                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <input type="hidden" name="id" value="<?php echo $row_edit['id']?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="accounts">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function(){
        var app = {
          show: function() {

            var accounts = $("#accounts");
            accounts.html("");

            $.get("app/get_accounts.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                accounts.append('\
                    <tr>\
                        <td>'+value.username+'</td>\
                        <td>'+value.password+'</td>\
                        <td class="center"><a href="index.php?administrator-update='+value.id+'" class="btn btn-primary btn-xs" type="button">Update</a></td>\
                        <td class="center"><a href="index.php?administrator-delete='+value.id+'" class="btn btn-primary btn-xs" type="button">Delete</a></td>\
                    </tr>\
                ')
              });
            });

          }
        }

      // Display
      app.show();

      })
    </script>
<?php

    include "../config.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "morgana";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed: ".mysqli_conenct_error());
    }

    $update_id = $_GET['active-update'];

    $edit = $db->query("SELECT * FROM home_active WHERE id = '$update_id'");
    $row_edit = mysqli_fetch_array($edit);

    if(isset($_POST['update_active'])){
        $id = $_POST["id_active"];
        $file_name = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "../images/".$file_name);

        $db->query("UPDATE home_active SET thumbnail = '$file_name' WHERE id = '$id'");
        
        header("location:index.php");
        
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Home</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                First Carousel
            </div>
            <div class="panel-body">
                <div style="margin-bottom: 20px;" class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Image</label>
                                <p><img width="88" src="../images/<?php echo $row_edit['thumbnail']?>"></p>
                                <input type="file" name="file"/>
                            </div>
                            <button type="submit" name="update_active" class="btn btn-success">Update</button>
                            <input type="hidden" name="id_active" value="<?php echo $row_edit['id']?>"/>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Image name</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="active">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Follow Up Carousels
            </div>
            <div class="panel-body">
                <div style="margin-bottom: 20px;" class="row">
                    <div class="col-lg-12">
                        <!-- <form role="form" action="" method="post" enctype="multipart/form-data"> -->
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="file" />
                            </div>
                            <button type="submit" name="submit_follow" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Image name</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>image name</td>
                                <td><img width="88" src="../images/card_back.png"></td>
                                <td class="center">
                                    <a href="index.php?follow-update=" class="btn btn-primary btn-xs" type="button">Update</a>
                                    <a href="index.php?follow-delete=" class="btn btn-primary btn-xs" type="button">Delete</a>
                                </td>
                            </tr>
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

            var active = $("#active");
            active.html("");

            $.get("app/get_active_home.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                active.append('\
                    <tr>\
                        <td>'+value.thumbnail+'</td>\
                        <td><img width="88" src="../images/'+value.thumbnail+'"></td>\
                        <td class="center">\
                            <a href="index.php?active-update=" class="btn btn-primary btn-xs" type="button">Update</a>\
                        </td>\
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
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

    $watercolor_id = $_GET["watercolor-update"];
    $edit = $db->query("SELECT * FROM watercolor WHERE id = '$watercolor_id'");
    $row_edit = mysqli_fetch_array($edit);

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $file_name = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "../images/watercolor/".$file_name);

        if($file_name == "" || empty($file_name)) {
            mysqli_query($conn, "UPDATE watercolor set title = '$title', description = '$description' WHERE id = '$id'");
        }else {
            mysqli_query($conn, "UPDATE watercolor set title = '$title', description = '$description', thumbnail = '$file_name' WHERE id = '$id'");
        }
        
        header("location:index.php?watercolor");
    }

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Watercolor</h1>
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
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="<?php echo $row_edit['title']?>"/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"><?php echo $row_edit['description']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <p><img src="../images/watercolor/<?php echo $row_edit['thumbnail']?>" width="100"></p>
                                <input type="file" name="file" />
                                <input type="hidden" value="<?php echo $row_edit['id']?>" name="id"/>
                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                List of watercolor posts
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="watercolor">
                            
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

            var watercolor = $("#watercolor");
            watercolor.html("");

            $.get("app/get_watercolor.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                watercolor.append('\
                    <tr>\
                        <td>'+value.title+'</td>\
                        <td>'+value.description+'</td>\
                        <td><img src="../images/watercolor/'+value.thumbnail+'" width="88" class="img-responsive" /></td>\
                        <td class="center"><a href="index.php?watercolor-update='+value.id+'" class="btn btn-primary btn-xs" type="button">Update</a></td>\
                        <td class="center"><a href="index.php?watercolor-delete='+value.id+'" class="btn btn-primary btn-xs" type="button">Delete</a></td>\
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
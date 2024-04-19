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

    $update_id = $_GET['graphicsdesign-update'];
    $edit = $db->query("SELECT * FROM graphicsdesign WHERE id = '$update_id'");
    $row_edit = mysqli_fetch_array($edit);

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $file_name = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "../images/graphicdesign/".$file_name);

        if($file_name == "" || empty($file_name)) {
            mysqli_query($conn, "UPDATE graphicsdesign set title = '$title', description = '$description' WHERE id = '$id'");
        }else {
            mysqli_query($conn, "UPDATE graphicsdesign set title = '$title', description = '$description', thumbnail = '$file_name' WHERE id = '$id'");
        }

        header("location:index.php?graphicsdesign");

    }

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Graphics Design</h1>
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
                                <textarea class="form-control" rows="3" name="description"><?php echo $row_edit['title']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <p><img width="88" src="../images/graphicdesign/<?php echo $row_edit['thumbnail']?>"></p>
                                <input type="file" name="file" />
                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <input type="hidden" value="<?php echo $row_edit['id']?>" name="id"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Graphics Design posts
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="graphicsdesign">
                            
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

            var graphicsdesign = $("#graphicsdesign");
            graphicsdesign.html("");

            $.get("app/get_graphicsdesign.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                graphicsdesign.append('\
                    <tr>\
                        <td>'+value.title+'</td>\
                        <td>'+value.description+'</td>\
                        <td><img src="../images/graphicdesign/'+value.thumbnail+'" width="88" class="img-responsive" /></td>\
                        <td class="center"><a href="index.php?graphicsdesign-update='+value.id+'" class="btn btn-primary btn-xs" type="button">Update</a></td>\
                        <td class="center"><a href="index.php?graphicsdesign-delete='+value.id+'" class="btn btn-primary btn-xs" type="button">Delete</a></td>\
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
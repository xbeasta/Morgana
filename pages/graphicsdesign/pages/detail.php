<?php
  
  require "../../../config.php";

  $id = $_GET['id'];

  $data = [];
  $sql = $db->query("SELECT * FROM graphicsdesign WHERE id = '$id'");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="graphicsdesign_pages_css.css" type="text/css">
    <link href="../../../lightbox/src/css/lightbox.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../../../images/logo.png" type="image/x-icon">

    <title>Morgana's | Graphics Design</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b99abd215e.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top custom_nav">
      <a class="navbar-brand mr-5" href="../../../index.php"><span class="nav_morgana">Morgana's</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mr-2" href="../../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="../../watercolor/watercolor.php">Watercolor</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-2" href="../graphicsdesign.php">Graphics Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../mycontacts/mycontacts.php">My Contacts</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid custom_background_color text-center pt-5 pb-5 custom_height_body">
      <div class="container">
        <div class="row">
          <?php while($row = mysqli_fetch_array($sql)) {?>
            <div class="col-md-1"></div>
            <div class="col-md-5 mb-5">
              <img class="img-fluid" src="../../../images/graphicdesign/<?php echo $row['thumbnail'] ?>">
            </div>
            <div class="col-md-5 text-left">
              <h1 class="border-bottom border-dark pb-2 mb-5"><?php echo $row['title'] ?></h1>
              <p class="mb-5"><?php echo $row['description'] ?></p>
              <a href="../graphicsdesign.php" class="btn btn-light">Return to previous page</a>
            </div>
            <div class="col-md-1"></div>
          <?php }?>
        </div>
      </div>
    </div>

    <div style="user-select: none; height: auto;" class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-6 text-center">
          <p class="footer_p"><span class="footer_credits">All Designs <span class="footer_copyright">&</span> Illustrations Belong To Morgana</span> <span class="footer_copyright">&copy;</span> <span class="footer_credits">2020</span></p>
        </div>
        <div class="col-md-6 text-center">

          <p class="footer_p">
            <span style=""><a href="https://www.instagram.com/morgana.39/"><img width="35" src="../../../images/instagram_logo.png"></a></span>
            <span style=""><a href="../../mycontacts/mycontacts.php"><img width="35" src="../../../images/at_logo.png"></a></span>
            <span style=""><a href="https://www.redbubble.com/people/Mct39/shop?asc=u"><img width="35" src="../../../images/rb_logo.png"></a></span>
          </p>

        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function(){

        var app = {

          show: function() {

            var graphicsdesign = $("#graphicsdesign");
            graphicsdesign.html("");

            $.get("../app/app_watercolor.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                graphicsdesign.append('\
                  <div class="col-md-3 text-center mb-2">\
                    <div class="card shadow-sm" style="">\
                      <img src="../../images/graphicdesign/'+value.thumbnail+'" class="card-img-top">\
                      <div class="card-body">\
                        <a href="pages/detail.php?id='+value.id+'" class="btn btn-light">'+value.title+'</a>\
                      </div>\
                    </div>\
                  </div>\
                ')
              })
            });

          }
        }

      // Display
      app.show();

      })
    </script>
    <!-- Popper.js, then Bootstrap JS, then Lightbox.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="lightbox/src/js/lightbox.js"></script>
  </body>
</html>
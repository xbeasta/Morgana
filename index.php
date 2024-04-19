<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "includes/head.php" ?>
  </head>
  <body>

    <?php include "includes/nav.php" ?>

    <div class="container-fluid custom_background_color carousel_custom_spacing">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              
                <div class="carousel-inner">
                  <div id="carousel_active"></div>
                  <div id="carousel"></div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="user-select: none;" class="container-fluid custom_background_color pt-5 pb-5">
      <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5">
          <div class="row mb-3">
            <div class="col-md-12">
              <h1 class=""><a class="watercolor_h_a" href="pages/watercolor/watercolor.php">Watercolor</a></h1>
            </div>
          </div>
          <div id="watercolor" class="row mb-5">
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Press <a href="pages/watercolor/watercolor.php">here</a> to see more of my watercolor</p>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <div style="user-select: none;" class="container-fluid custom_background_color pt-5 pb-5">
      <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5">
          <div class="row">
            <div class="col-md-12 mb-5">
              <h1 class="graphic_h"><a class="graphic_h_a" href="pages/graphicsdesign/graphicsdesign.php">Graphics design</a></h1>
            </div>
          </div>
          <div id="graphicsdesign" class="row mb-5">

          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Press <a href="pages/graphicsdesign/graphicsdesign.php">here</a> to see more of my graphics designs</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "includes/footer.php" ?>

    <!-- JavaScript -->
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
                  <div class="col-md-4">\
                    <a href="images/watercolor/'+value.thumbnail+'" data-lightbox="watercolor" data-title=""><img class="img-fluid img-thumbnail mb-1 custom_images_property" src="images/watercolor/'+value.thumbnail+'"></a>\
                  </div>\
                ')
              });
            });


            var graphicsdesign = $("#graphicsdesign");
            graphicsdesign.html("");

            $.get("app/get_graphicsdesign.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                graphicsdesign.append('\
                  <div class="col-md-4">\
                    <a href="images/graphicdesign/'+value.thumbnail+'" data-lightbox="graphicdesign" data-title=""><img class="img-fluid img-thumbnail mb-1 custom_images_property" src="images/graphicdesign/'+value.thumbnail+'"></a>\
                  </div>\
                ')
              });
            });

            var carousel_active = $("#carousel_active");
            carousel_active.html("");

            $.get("app/get_home_active.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                carousel_active.append('\
                  <div class="carousel-item active">\
                    <img src="images/'+value.thumbnail+'" class="d-block w-100">\
                  </div\
                ')
              });
            });

            var carousel = $("#carousel");
            carousel.html("");

            $.get("app/get_home.php", function(response){
              var todo = JSON.parse(response);
              todo.forEach(function(value, index){
                carousel.append('\
                  <div class="carousel-item">\
                    <img src="images/'+value.thumbnail+'" class="d-block w-100">\
                  </div\
                ')
              });
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
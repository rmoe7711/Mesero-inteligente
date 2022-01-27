<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Control con voz</title>
   
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img {width: 70%;margin: auto;}</style>

</head>

<body>
    

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://www.w3schools.com/bootstrap/img_chania.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="http://www.w3schools.com/bootstrap/img_chania2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="http://www.w3schools.com/bootstrap/img_flower.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="http://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  

    <script>
        function anterior() {
            $('#myCarousel').carousel('prev');
            
        }
        function siguiente() {
            $('#myCarousel').carousel('next');
        }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
    <script>
        if (annyang) {
            // Let's define our first command. First the text we expect, and then the function it should call
            var commands = {
                'siguiente': function () {
                    siguiente();
                },
               
                'anterior': function () {
                    anterior();
                },
            };
            annyang.setLanguage('es-MX');
            annyang.addCommands(commands);
            annyang.debug();
            annyang.start({ continuous: false });
        }
</script>
</body>

</html>
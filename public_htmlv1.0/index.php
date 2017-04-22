<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="icon" type="image/png" href="icon.png">
      <title>Editor - Home</title>
      
    <!-- font-awesome -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      
      <style>
      
          .card-img-top {
              width:100%;
          }
          
          .footer {
              position: absolute;
              bottom: 1;
              width: 100%;
              height: 60px;
              line-height: 60px; 
              background-color: #f5f5f5;
            }


          
      </style>
  </head>
    
  <body>

      <!====POPUP=====>
      <div class="modal fade" id="popUP" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-inverse">
                
              <div class="modal-body container" style="padding:0;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:white;margin-right:5px">×</span>
                  </button>
                  <img src="start.jpg" id="startImg" style="width:100%">
              </div>
            </div>
          </div>
        </div>
      
      <!====NAVBAR=====>
      
    <div class="pos-f-t fixed-top">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-inverse p-3">
          <h4 class="text-white"  style="float:right">Download</h4>
          <span>
        
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" data-name="rob">
              HTML
            </button>

            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" data-name="kirsten">
              CSS
            </button>

            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" data-name="tommy">
              JavaScript
            </button>
              
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" data-name="tommy">
              Complete
            </button>
                
          </span>
        </div>
      </div>
        
      <nav class="navbar navbar-inverse bg-primary navbar-toggleable-sm">
          
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#" style="margin-left:40px;margin-right:80px"><span class="fa fa-file-code-o" aria-hidden="true" style="color:WHITE;margin-right:8px"></span>HelloWorld!</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.html" style="margin-right:30px">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" style="margin-right:30px">
                <a class="nav-link" href="create.html">Create</a>
              </li>
              <li class="nav-item" style="margin-right:30px">
                <a class="nav-link" href="report.php">Report Bug</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>

            <button class="collapse-brand btn btn-primary" style="margin-right:30px;width:200px" id="downloadButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" disabled>Download
              <span id="downloadIcon" class="fa fa-download" aria-hidden="true" style="color:white"></span>
            </button>

            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button disabled class="btn btn-success my-2 my-sm-0" type="submit"><span id="searchIcon" class="fa fa-search" aria-hidden="true" style="color:white"></span></button>
            </form>
          </div>
        
      </nav>
    </div>

          
      <!-- Modal -->
    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">SAMPLE</h5>
            <div style="float:right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download<span id="downloadIcon" class="fa fa-download" aria-hidden="true" style="color:white;margin-left:10px" ></span></button>
            </div>
          </div>
          <div class="modal-body">
              <code style="background-color:white">NOthing</code>
          </div>
        </div>
      </div>
    </div>
          
          
      <!--- JUMBOTRON---->
      
     
    <div class="jumbotron jumbotron-fluid" style="background-image: url(bgImg.jpeg);text-align: center;margin-top:50px;color:white">
      <h1 class="display-3" style="font-family: 'Pacifico', cursive;color:white;margin:80px">Hello, world!</h1>
      
      <p class="lead" style="margin-top:250px">
        <a class="btn btn-primary btn-lg" href="create.html" role="button">Create Webpage</a>
      </p>
    </div>
      
      <!--- CARDS---->
      
      
      <div class="card-deck container">
      <div class="card" >
        <img class="card-img-top" src="img3.jpg" alt="Card image cap" width="260px">
        <div class="card-block">
          <h4 class="card-title">HTML 5</h4>
            <p class="card-text">HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.<br><br><a class="btn-link" href="https://en.wikipedia.org/wiki/HTML5" target="_blank">Learn More</a></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img2.jpg" alt="Card image cap" width="260px">
        <div class="card-block">
          <h4 class="card-title">CSS 3</h4>
          <p class="card-text">CSS3 is the latest evolution of the Cascading Style Sheets language. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.<br><br><a class="btn-link" href="https://developer.mozilla.org/en/docs/Web/CSS/CSS3" target="_blank">Learn More</a></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img1.jpg" alt="Card image cap" width="260px">
        <div class="card-block">
          <h4 class="card-title">JavaScript</h4>
          <p class="card-text">TJavaScript is a programming language that is run by most modern browsers. It supports object-oriented programming and procedural programming. It can be used to control web pages on the client side of the browser, server-side programs, and even mobile applications.<br><br><a class="btn-link" href="http://study.com/academy/lesson/what-is-javascript-function-uses-quiz.html" target="_blank">Learn More</a></p>
        </div>
      </div>
    </div>
      
      <br><br>
      <!---FOOTER--->
      <footer class="footer">
          <div class="container">
            <span class="text-muted">Created By AGB on 19-Apr, 2017. Last Updated On: </span>
          </div>
        </footer>
      
      
      
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
      
      
      <script>
          
          
          $('#popUP').modal('show');
      
        $("#downloadButton").click(function() {
            if($("#downloadIcon").hasClass("fa-download")){
                $("#downloadIcon").removeClass("fa-download");
                $("#downloadIcon").addClass("fa-times");
                $('.collapse').collapse('hide');
            } else {
                $("#downloadIcon").addClass("fa-download");
                $("#downloadIcon").removeClass("fa-times");
            }
            
        }); 
        
        $(".jumbotron").css({ minHeight: $(window).innerHeight() + 'px' });
        $(window).resize(function() {
            $(".jumbotron").css({ minHeight: $(window).innerHeight() + 'px' });
        });
          
        $(".jumbotron").css({ minWidth: $(window).innerWidth() + 'px' });
        $(window).resize(function() {
            $(".jumbotron").css({ minWidth: $(window).innerWidth() + 'px' });
        });
      
      </script>
  </body>
</html>
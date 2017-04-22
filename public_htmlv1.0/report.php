<!DOCTYPE html>
<html lang="en">
  <head>
      
      <link rel="icon" type="image/png" href="icon.png">
      <title>Editor - Feedback</title>
      
    <!-- font-awesome -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            
      <style>
          
          .footer {
              width: 100%;
              height: 60px;
              line-height: 60px; 
              background-color: #f5f5f5;
            }


          
      </style>
  </head>
    
  <body>

      <?php
        $name = $email = $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["input_name"]);
          }

          if ($_POST["input_email"]) {
            $email = test_input($_POST["input_email"]);
          }


          if ($_POST["input_feed"]) {
            $comment = test_input($_POST["input_feed"]);
          }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
        ?>
 
        
      <nav class="navbar navbar-inverse bg-primary navbar-toggleable-sm fixed-top">
          
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="margin-left:40px;margin-right:80px"><span class="fa fa-file-code-o" aria-hidden="true" style="color:WHITE;margin-right:8px"></span>HelloWorld!</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item" style="margin-right:30px">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item" style="margin-right:30px">
                <a class="nav-link" href="create.html">Create</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#" style="margin-right:30px">Report Bug <span class="sr-only">(current)</span></a>
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
      
      
      <!==== ALERT ====>
      <div class="alert alert-warning container my-4"  role="alert" style="top:65px">
          <h4 class="alert-heading"><i class="fa p-2 fa-cogs fa-flip-horizontal" aria-hidden="true"></i>Under Construction</h4>
          <p>Find and Replace under development.About page need to be constructed. More animations can be applied. Temporary Cookies to save the recovery file. More stronger html editor.</p>
          <p class="mb-0">Feedbacks and comments accepted. Developers required. Code OpenSourced at <button type="button" class="btn p-1 btn-link">github<i class="fa fa-external-link p-1" aria-hidden="true"></i></button></p>
        </div>
      
      <!==== FEEDBACK =====>
      <div class="alert alert-success alert-dismissible fade hide" role="alert" id="alert_box" style="float:right;width:400px;margin-right:150px;height:270px;margin-top:95px">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          <strong>Successfully Sumbitted!</strong> <p><br>I appreciate your time and effort to review this site.</p>
            </div>
      <div class="container" style="width:600px;float:left;margin-left:150px;margin-bottom:80px;top:65px">
      <br>
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-group">
                <label for="input_name">Name</label>
                <input type="text" class="form-control" name="input_name" placeholder="Enter Fullname">
              </div>
              <div class="form-group">
                <label for="input_email">Email address</label>
                <input type="email" class="form-control" name="input_email" aria-describedby="emailHelp" placeholder="Enter email id">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="input_feed">Feedbacks</label>
                <textarea class="form-control" name="input_feed" rows="3" style="resize:none" placeholder="Give Suggestions or Rebort an issue"></textarea>
                <small id="fileHelp" class="form-text text-muted">Support us by giving feedbacks</small>
              </div>
              <fieldset class="form-group">
                <label>Rate us</label><br>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Great!
                  </label>
                </div>
                <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Average Site
                  </label>
                </div>
                <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                        Need improvement.
                  </label>
                </div>
              </fieldset>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                    Get updates about the feedback and updates
                </label>
              </div>
              <button type="submit" name="submit" id="btn_send_mail" class="btn btn-primary">Submit</button>
            </form>

          
      </div>
      
      <!---FOOTER--->
      <footer class="footer fixed-bottom">
          <div class="container">
            <span class="text-muted">Created By AGB on 19-Apr, 2017. Last Updated On: </span>
          </div>
        </footer>
      
      
      
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
      

        <?php
            $emailTo = "wasdqwerty31@outlook.com";
            $subject = "Feedback_editor";
            $body = "Name:".$name."Email:".$email."Feed:".$comment;
            $headers = "From: Feedback Mailer";
            if (mail($emailTo, $subject, $body, $headers) && !empty($name)) {
                echo "The mail send successfully.";
            } else {
                echo "The email could not be sent.";
            }
        ?>

      
      <script>
        function alert_success() {
            $("#alert_box").removeClass("hide");
            $("#alert_box").addClass("show");
        }

      
      </script>
  </body>
</html>
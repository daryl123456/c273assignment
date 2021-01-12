<!DOCTYPE html>

<html lang="en">
    <head>
        <!--daryl 19042545-->
        <title>HOME</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script>
            $(document).ready(function () {
                $("#slider").slider({
                    value: 5, //the default value
                    min: 5, //the minimum value
                    max: 120, //the maximum value
                    step: 1, //incremental value
                    slide: function (event, ui) {
                        $("#duration").val(ui.value);
                    }
                });
                $("form").submit(function () {
                    var type = $("#itemTypes").val();
                    var duration = $("#duration").val();
                    

                    $.ajax({
                        type: "GET",
                        url: "http://localhost/C273_Assignment1/doExercise.php",
                        data: "type=" + type + "&duration=" + duration,
                        cache: false,
                        dataType: "JSON",
                        success: function (response) {
                            $('#results').html(response.result);

                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });

                    
                });

            });
        </script>
        <style>
            .navbar-custom{
                background-color: #282828;
                font-size: 20px;

            }
            .navbar-custom2{
                background-color: #97743A;
            }
            .carousel-item img{
                width: 100%;
            }
            .container{
                background-color: white;
                margin-top: 50px;
                padding: 20px;               
            }
            *       form .error {
                color: #ff0000;
            }

        </style>
    </head>
    <body style="background-image: url(images/ychback.jpg); background-repeat: no-repeat; background-attachment: fixed;">

        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <a class="navbar-brand"><img src="images/ych.png" height="50" width="170"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/C273_Assignment1/Login.html">LOGOUT</a>
                    </li>  
                </ul>

            </div>

        </nav>
        <div class="container">
            <h3>Exercise Entry</h3>

            <form id="form" method="post" action="#" class="form-horizontal">
                <div class="form-group">
                    <label for="itemTypes">Exercise Type:</label>
                    <select id="itemTypes" class="form-control">
                        <option value="Walk">
                            Walk
                        </option>
                        <option value="Run">
                            Run
                        </option>
                        <option value="Cycle">
                            Cycle
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="slider">Exercise Durations(Minutes)
                        <input type="text" id="duration" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:right" size="1"></label>
                    <div id="slider"></div>
                </div>

                <input class="btn btn-block btn-primary" type="submit" value="Submit"/>
            </form>
        </div>

    </body>
</html>
<!--daryl 19042545-->
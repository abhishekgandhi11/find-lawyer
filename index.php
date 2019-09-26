<?php

?>

<hrml>
    <head>
        <title>findlawyers</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script type="css/text">

        </script>
    </head>
    <body id="img" >
        
            <div style="background-image: url('images/back.jpg');background-image:blur(5px);">
                <!-- header -->
                <div>
                    <?php
                        include("header.html");
                    ?>
                </div>
                <!-- main division -->
                <div style="">
                <form name="F1" action="#" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div align="center" class="col-md-8" >
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:skyblue;border=1px;">Find Lawyer</h1>
                                </div>
                                <br>
                                <input type="text" name="problem" style="border-radius:5px;height:35px;width:230px;" placeholder="Problem">
                                <input type="text" name="city" style="border-radius:5px;height:35px;width:230px;" placeholder="City or Pincode">
                                <Button type="submit" name="submit" class="btn btn-success" style="border-radius:5px;height:35px;width:230px;" >Find</Button>
                                <br><br><br><br><br><br>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <!-- footer -->
                <div>
                    <?php
                        include("footer.html");
                    ?>
                </div>
            </div>
       
    </body>
</html>
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
    <body>
        <div style="background-image: url('images/register_back3.jpg');">
                <!-- header -->
                <div>
                    <?php
                        include("header.html");
                    ?>
                </div>
                <!-- main division -->
                <div>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div align="center" class="col-md-8" >
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:white;">User Log-in</h1>
                                </div>
                                <br><br>
                                <input type="text" name="email_id" style="border-radius:5px;height:35px;width:350px;" placeholder="Email id"><br><br>
                                <input type="text" name="password" style="border-radius:5px;height:35px;width:350px;" placeholder="Password"><br><br>
                                <Button type="submit" name="btn_login" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Log-In</Button><br><br><br>
                                <h2 style="color:white;">------- Or -------</h2>
                                <br><br>
                                <Button type="submit" name="btn_register" formaction="lawyer_register.php" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Lawyers Registration</Button>
                                <br><br><br><br>
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
            </div
    </body>
</html>
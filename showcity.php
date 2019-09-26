<hrml>
    <head>
        <title>findlawyers->Admin</title>
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
        <div >
                <!-- header -->
                <div>
                    <?php
                        include("header.html");
                    ?>
                </div>
                <!-- main division -->
                <div>
                    
                    <div align="center">    
                        <?php
                            echo "<h2 style='font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:black;'>". "Show City"."</h2>";
                            require_once('city_function.php');
                            show_data();
                        ?>         
                    </div>
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

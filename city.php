<?php
    require_once('city_function.php');
    if(isset($_POST['btn_addcity'])){
            $city_name = $_POST['txtcity_name'];
            $pincode = $_POST['txtcity_pincode'];
            $state_name = $_POST['txtstate_name'];
            add_city($city_name,$pincode,$state_name);
    }
    if(isset($_POST['btn_updatecity'])){
        $city_name = $_POST['txtcity_name_update'];
        $pincode = $_POST['txtcity_pincode_update'];
        $state_name = $_POST['txtstate_name_update'];
        update_city($city_name,$pincode,$state_name);
    }
    if(isset($_POST['btn_deletecity'])){
        $pincode = $_POST['txtcity_pincode_delete'];
        delete_city($pincode);
    }
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
                <form name="form_city" method="post">
                    <div class="container">
                        <div class="row">
                            <div align="center" class="col-md-5" >
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Add City</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtcity_name" style="border-radius:5px;height:35px;width:350px;" placeholder="City name"><br><br>
                                <input type="text" name="txtcity_pincode" style="border-radius:5px;height:35px;width:350px;" placeholder="City pincode"><br><br>
                                <input type="text" name="txtstate_name" style="border-radius:5px;height:35px;width:350px;" placeholder="State Name"><br><br>
                                <!-- <div>
                                
                                     <?php
                                       // require_once('city_function.php');
                                        //state_data();
                                    ?> 
                                
                                </div> -->
                                <Button type="submit" name="btn_addcity" value="btn_addcity" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Add City</Button><br><br><br>
                                <br><br>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div align="center" class="col-md-5">
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Update City</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtcity_pincode_update" style="border-radius:5px;height:35px;width:350px;" placeholder="City pincode"><br><br>
                                <input type="text" name="txtcity_name_update" style="border-radius:5px;height:35px;width:350px;" placeholder="City name"><br><br>
                                <input type="text" name="txtstate_name_update" style="border-radius:5px;height:35px;width:350px;" placeholder="State Name"><br><br>
                                <Button type="submit" name="btn_updatecity" value="btn_updatecity" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Update City</Button><br><br><br>
                                <br><br>
                           </div>
                        </div>
                        <div class="row">
                            <div align="center" class="col-md-5">
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:white;">Update City</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtcity_pincode_delete" style="border-radius:5px;height:35px;width:350px;" placeholder="City pincode"><br><br>
                                <Button type="submit" name="btn_deletecity" value="btn_deletecity" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Delete City</Button><br><br><br>
                                <br>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div align="center" class="col-md-5">
                            <br><br><br><br>
                            <Button type="submit" name="btn_showcity" value="btn_showcity" formaction="showcity.php" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Show All City</Button><br><br><br>
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
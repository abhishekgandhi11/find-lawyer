<?php
    require_once('state_function.php');
    if(isset($_POST['btn_addstate'])){
            $state_name = $_POST['txtstate_name'];
            add_state($state_name);
    }
    if(isset($_POST['btn_updatestate'])){
        $state_id = $_POST['txtstate_id_update'];
        $state_name = $_POST['txtstate_name_update'];
        update_state($state_id,$state_name);
    }
    if(isset($_POST['btn_deletestate'])){
        $state_id = $_POST['txtstate_id_delete'];
        delete_state($state_id);
    }
?>


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
        <div style="background-image: url('images/register_back2.jpg');">
                <!-- header -->
                <div>
                    <?php
                        include("header.html");
                    ?>
                </div>
                <!-- main division -->
                <div>
                <form name="form_law" method="post">
                    <div align="center" class="container">
                        <div class="row">
                            <div  class="col-md-4" >
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Add State</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtstate_name" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter State"><br><br>
                                <Button type="submit" name="btn_addstate" value="btn_addstate" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Add State</Button><br><br><br>
                                <br><br>
                            </div>
                            <div class="col-md-4">
                            <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Update State</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtstate_id_update" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter State id"><br><br>
                                <input type="text" name="txtstate_name_update" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter State"><br><br>
                                <Button type="submit" name="btn_updatestate" value="btn_updatestate" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Update State</Button><br><br>
                                <Button type="submit" name="btn_showstate" value="btn_showstate" formaction="showstate.php" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Show All State</Button><br><br><br>
                                <br><br>
                            </div>
                            <div align="center" class="col-md-4">
                            <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Delete State</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtstate_id_delete" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter State id"><br><br>
                                <Button type="submit" name="btn_deletestate" value="btn_deletestate" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Delete State</Button><br><br><br>
                                <br><br>
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
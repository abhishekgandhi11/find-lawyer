<?php
    require_once('law_function.php');
    if(isset($_POST['btn_addlaw'])){
            $law_name = $_POST['txtlaw_name'];
            add_law($law_name);
    }
    if(isset($_POST['btn_updatelaw'])){
        $law_id = $_POST['txtlaw_id_update'];
        $law_name = $_POST['txtlaw_name_update'];
        update_law($law_id,$law_name);
    }
    if(isset($_POST['btn_deletelaw'])){
        $law_id = $_POST['txtlaw_id_delete'];
       // echo $pincode;
        delete_law($law_id);
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
                    <div class="container">
                        <div class="row">
                            <div align="center" class="col-md-4" >
                                <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Add Law</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtlaw_name" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Law"><br><br>
                                <Button type="submit" name="btn_addlaw" value="btn_addlaw" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Add Law</Button><br><br><br>
                                <br><br>
                            </div>
                            <div class="col-md-4">
                            <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Update Law</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtlaw_id_update" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Law id"><br><br>
                                <input type="text" name="txtlaw_name_update" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Law"><br><br>
                                <Button type="submit" name="btn_updatelaw" value="btn_updatelaw" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Update Law</Button><br><br>
                                <Button type="submit" name="btn_showlaw" value="btn_showlaw" formaction="showlaw.php" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Show All Law</Button><br><br><br>
                                <br><br>
                            </div>
                            <div align="center" class="col-md-4">
                            <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:blue;">Delete Law</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtlaw_id_delete" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Law id"><br><br>
                                <Button type="submit" name="btn_deletelaw" value="btn_deletelaw" class="btn btn-success" style="border-radius:5px;height:35px;width:350px;" >Delete Law</Button><br><br><br>
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
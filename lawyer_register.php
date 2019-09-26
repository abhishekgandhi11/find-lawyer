<?php
    require_once('lawyer_register_function.php');
    if(isset($_POST['btn_addlawyer'])){
            $email_id = $_POST['txtemail_id'];
            echo $email_id;
            $first_name = $_POST['txtfirst_name'];
            echo $first_name;
            $last_name = $_POST['txtlast_name'];
            echo $last_name;
            $address1 = $_POST['txtaddress1'];
            echo $address1;
            $address2 = $_POST['txtaddress2'];
            echo $address2;
            $contact_no = $_POST['txtcontactno'];
            echo $contact_no;
            $experience = $_POST['txtexperience'];
            echo $experience;
            $law_name = $_POST['txtlaw_area'];
            echo $law_name;
            $city_name = $_POST['txtcity'];
            echo $city_name;
            $website = $_POST['txtwebsite'];
            echo $website;
            $state = $_POST['txtstate'];
            echo $state;
            $pass = $_POST['txtpassword'];
            set_lawyer_data($email_id,$first_name,$last_name,$address1,$address2,$contact_no,$experience,$law_name,$city_name,$website,$state,$pass);
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
        <div style="background-image: url('images/register_back2.jpg');">
                <!-- header -->
                <div>
                    <?php
                        include("header.html");
                    ?>
                </div>
                <!-- main division -->
                <div>
                <form name="form_lawyers_information" method="post">
                    <div align="center" class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                            <br><br><br>
                                <div class="container mt-3">
                                    <h2 style="color:red">Lawyers Registration</h2>
                                    <br>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#menu0">Personal Information</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1">Address</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu2">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu3">Working Area</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu4">Finish</a>
                                        </li>
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="menu0" class="container tab-pane active"><br>
                                        <h3>Personal Information</h3>
                                        <br>
                                            <input type="text" name="txtfirst_name" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter First Name"><br><br>
                                            <input type="text" name="txtlast_name" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter last Name"><br><br>                      
                                        </div>
                                        <div id="menu1" class="container tab-pane fade"><br>
                                        <h3>Address Information</h3><br>
                                            <input type="text" name="txtaddress1" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter address1"><br><br>
                                            <input type="text" name="txtaddress2" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter address2"><br><br>
                                            <input type="text" name="txtcity" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter City"><br><br>
                                            <input type="text" name="txtstate" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter State"><br><br> 
                                        </div>
                                        <div id="menu2" class="container tab-pane fade"><br>
                                        <h3>Contact Details</h3><br>
                                            <input type="text" name="txtcontactno" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Contact no"><br><br>
                                            <input type="text" name="txtemail_id" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter email id"><br><br>
                                            <input type="text" name="txtwebsite" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Website"><br><br>
                                        </div>
                                        <div id="menu3" class="container tab-pane"><br>
                                        <h3>Working Area</h3>
                                        <br>
                                            <input type="text" name="txtexperience" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter your working Experience"><br><br>
                                            <input type="text" name="txtlaw_area" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Law of area in you are working"><br><br>                      
                                        </div>
                                        <div id="menu4" class="container tab-pane fade"><br>
                                        <h3>Finish</h3>
                                            <input type="password" name="txtpassword" style="border-radius:5px;height:35px;width:350px;" placeholder="Enter Password"><br><br>
                                            <Button type="submit" name="btn_addlawyer" value="btn_addlawyer" class="btn btn-primary" style="border-radius:5px;height:35px;width:350px;" >Add Lawyer</Button><br><br>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            <div class="col-md-1"></div>
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
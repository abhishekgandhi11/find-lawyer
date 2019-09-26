<?php
    require_once('feedback_function.php');
    if(isset($_POST['btn_feedback'])){
            $lawyer_email_id = $_POST['txtlawyer_emailid'];
            $subject = $_POST['txtsubject'];
            $feedback =$_POST['txtfeedback'];
            $stars = $_POST['txtstars'];
            $user_email_id = $_POST['txtuser_emailid'];
            set_feedback($stars,$subject,$feedback,$lawyer_email_id,$user_email_id);
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
                <form name="form_law" method="post">
                    <div align="center" class="container">
                        <div class="row">
                            <div align="center" class="col-md-2" >
                            </div>
                            <div class="col-md-8">
                            <br><br><br>
                                <div style="">
                                    <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:red;">User FeedBack</h1>
                                </div>
                                <br><br>
                                <input type="text" name="txtlawyer_emailid" style="border-radius:5px;height:35px;width:550px;" placeholder="Enter Lawyer's email id"><br><br>
                                <input type="text" name="txtsubject" style="border-radius:5px;height:35px;width:550px;" placeholder="Enter Subject"><br><br>
                                <textarea type="text" name="txtfeedback" style="border-radius:5px;height:150px;width:550px;" placeholder="Give Your Feed Back"></textarea><br><br>
                                <input type="text" name="txtstars" style="border-radius:5px;height:35px;width:550px;" placeholder="Enter stars &#x2606 from 5"><br><br>
                                <input type="text" name="txtuser_emailid" style="border-radius:5px;height:35px;width:550px;" placeholder="Enter your email id"><br><br>
                                <Button type="submit" name="btn_feedback" value="btn_feedback" class="btn btn-primary" style="border-radius:5px;height:35px;width:550px;" >Send FeedBack</Button><br><br>
                                <br><br>
                            </div>
                            <div align="center" class="col-md-2">
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
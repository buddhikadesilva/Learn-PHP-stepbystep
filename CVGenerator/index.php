
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Generate CV</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
 <div class="row">
 <div class="col-sm-12"> 
                    <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                    
                        <input type="file" name="myfile" id="fileToUpload">
                        <input type="submit" name="submit" value="Upload your image" >
                        
                    </form>
                    </div>
 </div>
        <div class="form-group">
            <form action="view.php" method="get">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <h3>Basic Information<small>....</small></h3></div>
                            <div class="panel-body"><label>Full Name:</label> <br><input class="form-control" type="text" name="name" value=""><br>

                                <label>Age </label><br><input class="form-control" type="text" name="age" value=""><br>
                                <label>DOB </label><br><input type="date" name="dob"><br>
                                <label>Nationality </label><br><input class="form-control" type="text" name="nation" value=""><br>
                                <label>Sex :</label><br>
                                <div class="radio"><label><input type="radio" name="gender" value="Male">Male</label></div>
                                <div class="radio"><label><input type="radio" name="gender" value="Female">Female</label></div><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">   
                        <div class="panel panel-default">   
                            <div class="panel-heading">   <h3>Contact Details <small>....</small></h3></div>
                            <div class="panel-body"><label>Address </label><br><input class="form-control" type="text" name="ad1" value=""><br>
                                <input class="form-control" type="text" name="ad2" value=""><br>
                                <input class="form-control" type="text" name="ad3" value=""><br>

                                <label>Phone No. </label><br><input class="form-control" type="text" name="mobile" value=""><br>
                                <label>Email Address </label><br><input class="form-control" type="text" name="email" value=""><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Education & Knowledge<small>....</small></h3></div>
                            <div class="panel-body"><label>Languages: </label><br>
                                <div class="checkbox"><label><input class="checkbox" type="checkbox" name="language[]" value="Sinhala">Sinhala</label></div>
                                <div class="checkbox"><label> <input class="checkbox" type="checkbox" name="language[]" value="English">English</label></div>
                                <div class="checkbox"><label><input class="checkbox" type="checkbox" name="language[]" value="Tamil">Tamil</label></div>
                                <br>

                                <label>Education </label><br><input class="form-control" type="text" name="edu" value=""><br>
                                <label>Hobbies </label><br><input class="form-control" type="text" name="hobbies" value=""><br>

                            </div>


                        </div>





                    </div>

                </div>
                <div class="row">
                   
                    <div class="col-sm-12"> 
                        <label>About Me </label><br><input class="form-control" type="text" name="aboutme" value=""><br>
                        <button class="btn btn-info btn-block"><span class="glyphicon glyphicon-fire"></span>  Generate Your CV</button>
                    </div>

                </div>
            </form>  
        </div>

    </div>
    <?php
    // put your code here
    ?>
</body>
</html>

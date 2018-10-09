<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>

        <div class="container">
            <div class="row">

                <?php
                $name = $_GET['name'];
                $age = $_GET['age'];

                $address1 = $_GET['ad1'];
                $address2 = $_GET['ad2'];
                $town = $_GET['ad3'];
                $DOB = $_GET['dob'];
                $Nationality = $_GET['nation'];

                $contactNumber = $_GET['mobile'];
                $email = $_GET['email'];

                $languages = array("Sinhala", "English");

                $lan = $_GET['language'];
                //echo 'languages';





                $uni = "Uva Wellassa University";
                $aboutMe = $_GET['aboutme'];
                $edu = $_GET['edu'];

                $hobbies = $_GET['hobbies'];
                // put your code here


                echo "<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: lightblue;
}

h1 {
    color: white;
  
}
td {
    color: white;
  
}

p {
    font-family: verdana;
    font-size: 20px;
}
</style>
</head>";


                echo "<div style=\"background-color:#e3f3f9\"><table style=\"background-color:rgba(51, 176, 221,0.8)\" width=\"900\" border=\"0\" align=\"center\" cellpadding=\"5\">
                        
                        <tr>
				<td colspan=\"2\"><img src=\"cv.PNG\" height=\"180\" ><h1 style=\"color:#ffffff\" align=\"right\">$name</h1><hr/></td>
                                <td></td>
			</tr>
			<tr>
				<td colspan=\"2\"><h2>Basic Info</h2><hr/></td>
			</tr>
			<tr>
				<td width=\"50%\" align=\"right\"><span class=\"label label-primary\">Full Name:</span></td>
				<td>$name</td>
			</tr>
			<tr>
				<td align=\"right\"><span class=\"label label-primary\">Age:</span></td>
				<td>$age Years</td>
			</tr>
			<tr>
				<td align=\"right\"><span class=\"label label-primary\">Date of Birth:</span></td>
				<td>$DOB</td>
			</tr>
			
			<tr>
				<td align=\"right\"><span class=\"label label-primary\">Nationality:</span></td>
				<td>$Nationality</td>
			</tr>
			<tr>
				<td colspan=\"2\"><h2>Contact Details</h2><hr/></td>
			</tr>
			<tr>
				<td align=\"right\" valign=\"top\"><span class=\"label label-primary\">Address:</span></td>
				<td>$address1</br>
				$address2</br>
				$town</td>
			</tr>
			<tr>
				<td align=\"right\" valign=\"top\"><span class=\"label label-primary\">Phone Number:</span></td>
				<td>$contactNumber</br>
											</td>
			</tr>
			<tr>
				<td align=\"right\"><span class=\"label label-primary\">Email Address:</span></td>
				<td>$email</td>
			</tr>
			<tr>
				<td colspan=\"2\"><h2>Education & Knowledge</h2><hr/></td>
			</tr>
			<tr>
				<td align=\"right\"><span class=\"label label-primary\">Language:</span></td>
				<td>";
                foreach ($lan as $value) {
                    echo $value . " ";
                }echo "</td>
			</tr><tr>
				<td align=\"right\"><span class=\"label label-primary\">Education:</span></td>
				<td>$edu</br>
				</td>
			</tr><tr>
			</tr><tr>
				<td align=\"right\"><span class=\"label label-primary\">Hobbies:</span></td>
				<td>$hobbies</td>
			</tr>
			
			
			<tr>
				<td colspan=\"2\"><h2>About Me</h2><hr/></td>
			</tr>
			<tr>
				<td colspan=\"2\">$aboutMe
<hr/></td>
			</tr>
		</table></div>";



                echo "</html>";
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>


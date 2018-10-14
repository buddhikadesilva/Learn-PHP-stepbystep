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
    </head>
    <body>
        <?php
        $name_error = $age_error = $dob_error = $nic_error = $email_error = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $name_error = validateName($name);
            $email_error = validateEmail($email);
            $age_error = validateAge($age);
        }

        function validateName($name) {

            if (empty($name)) {
                return"Please enter your name";
//echo "Please enter your name";
            }

            //if(sizeof($name))return"Name shoud have to have more than 5";
        }

        function validateEmail($email) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                return "Please Enter valied Email Address";
            }
        }

        function validateAge($age) {

            if (filter_var($age, FILTER_VALIDATE_INT) === FALSE || $age > 0 and $age < 150) {
                return "Please Enter valied age";
            }
        }

        // put your code here
        ?>

        <form action="Validate.php" method="post">
            <div>Name         :<input type="text" name="name">*<?php echo $name_error ?></div>
            <div>Age          :<input type="text" name="age">*<?php echo $age_error ?></div>
            <div>Date of Birth:<input type="text" name="dob">*<?php echo $dob_error ?></div>
            <div>Email      :<input type="text" name="email">*<?php echo $email_error ?></div>
            <div>NIC no       :<input type="text" name="nic">*<?php echo $nic_error ?></div>


            <div><input type="submit" value="OK"></div>

        </form>


    </body>
</html>

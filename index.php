<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>

    <link rel="stylesheet" href="myform.css">

</head>
<body class="change">

    <?php

        if (empty($_POST['password'])){
            $passwordErr = "Enter Password";
        } else {
            $password = $_POST['password'];
        }

        if (!empty($_POST['password'])){

            $pattern = "/^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z])(
                ?=.*[\W]).{15,}$/";
            if (!preg_match($pattern, $password)){
                $passwordErr = "Must contain at least 15 characters with a c
                ombination of uppercase letters, lowercase letters,
                numbers and symbols";
            }
        }



        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <?php

        if (isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $secondname = $_POST['secondname'];
            $email = $_POST['email'];
            $DateOfBirth = $_POST['DateOfBirth'];
            $department = $_POST['department'];
        }

        if (isset($_POST['submit'])) {
            //checking facilities
            $gender = $_POST['gender'];
                if(empty($gender))
                {
                    $msg_gender = "You must select gender";
                }

                if(!empty($_POST['gender'])) {
                    $no_checked = count($_POST['gender']);

                }
            } 

    ?>
    
    <form action="input.php" method="POST">
        <div class="form-box">

            <h2>Sign Up</h2>

        
        <div class="input-group">
            <input type="text" class="input-field" name="firstname" placeholder="First Name" required>
        </div>
        
        <div class="input-group">
            <input type="text" class="input-field" name="secondname" placeholder="Second Name" required>
        </div>
        
        <div class="input-group">
            <input type="email" class="input-field" name="email" placeholder="E-mail" required>
        </div>
        
        <div class="input-group">
            <input type="date" class="input-field" name="DateOfBirth" placeholder="Date Of Birth">
        </div>
        
        <div class="input-grou">
            Favourite color
            <h3><input type="color" class="input-field" name="favouritecolor"></h3>
        </div>
        
        <div class="input-group">
        <label>Gender:</label><br>
        <input type="checkbox" name="gender" class="check" value="male" <?php if (isset($_POST['submit']) && isset($_POST['gender'][0])) echo "checked" ?> >
        <label>Male</label><br>
        <input type="checkbox" name="gender" class="check" value="female" <?php if (isset($_POST['submit']) && isset($_POST['gender'][1])) echo "checked" ?> >
        <label>Female</label><br>
        <input type="checkbox" name="gender" class="check" value="other" <?php if (isset($_POST['submit']) && isset($_POST['gender'][2])) echo "checked" ?> >
        <label>Other</label>
        </div>
        
        <div class="input-group">
            <input type="text" class="input-field" name="department" placeholder="Department" required>
        </div>
        
        <div class="input-group">
            <input type="password" class="input-field" name="password" placeholder="Password" required>
        </div>

        <div class="form2">
        <input type="submit" class="submit-btn" name="submit" value="Sign Up">
        </div>

        </div>
    </form>

    <script>
        $(document).ready(function(){
            $('.check').click(function(){
                $('.check').not(this).prop('checked', false)
            });
        });
    </script>

    <script type="text/javascript" src="script.js"></script>

</body>
</html>
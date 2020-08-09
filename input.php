<html>
    <head>
        <style>
            body {
                background-color: <?php echo $_POST['favouritecolor'];?>
            }
        </style>
    </head>

<body>

    <?php
        echo "First Name:".$_POST['firstname'].'<br />';
        echo "Second Name:".$_POST['secondname'].'<br />';
        echo "Email:".$_POST['email'].'<br />';
        echo "Date Of Birth".$_POST['DateOfBirth'].'<br />';
        echo "Department:".$_POST['department'].'<br />';
    ?>


</body>
</html>
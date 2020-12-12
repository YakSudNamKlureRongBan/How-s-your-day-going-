<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <h1 style="text-align:center;">Diary : <?php echo $_POST['Diary'];?></h1>
    <style>
        h1   {font-size:400%; color:rgb(60, 179, 113);
        }
        body {background-image: url('wallpaper.jpg');
        }
    </style>
</head>

<body>
    <h3 style="text-align:center;"><?php echo $_POST['Date'];?><br><br>
    <?php echo $_POST['Story'];?><br></h3>
    <h5 align="right"> Form : <?php echo $_POST['name'];?></h5><br>
    <?php echo $_POST['feeling'];
    $text = $_POST['feeling'];
    if ($text=="sad")
    {
        echo "สู้ๆ";
    }
    elseif ($text=="normal")
    {
        echo "ทำต่อไป";
    }
    elseif ($text=="happy")
    {
        echo "ดีแล้วนะ";
    }
    ?>
    </body>

</html>

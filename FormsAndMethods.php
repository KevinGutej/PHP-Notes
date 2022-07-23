<html>
    <?php
    if(isset($_POST['Age'], $_POST['Email']) && !empty($_POST['Age']) && !empty($_POST['Email'])) {
        echo $_POST['Age'] . "<br>";
        echo $_POST['Email'];
        $Age = (int)$_POST["Age"];
    if($Age < 15)
    {
        echo "You are too young to enter!";
    }
    else
    {
        echo "Welcome!";
    }
        
    }
    ?>

    <form method="POST" action="index2.php">
        <div>
            <label>Age: <input type = "number" name = "Age"></label>
            label

        </div>
        <div>
            <label>Email: <input type = "email" name = "Email"></label>
        </div>
        <div>
            <input type="url" value = "Send">
        </div>
    </form>
</html>


//==================================================================================================================================================


<html>
    <head>
        <title>Form Calculator</title>
    </head>
<body>
    <?php
    if( ! empty($_POST['1']) && ! empty($_POST['2'])) {
        if($_POST['operator'] == 'add') {
            $number = $_POST['1'];
            $number2 = $_POST['2'];

            $total = $number + $number2;
            echo $total;
        }
    }
    if( ! empty($_POST['1']) && ! empty($_POST['2'])) {
        if($_POST['operator'] == 'takeaway') {
            $number = $_POST['1'];
            $number2 = $_POST['2'];

            $total = $number - $number2;
            echo $total;
        }
    }
    if( ! empty($_POST['1']) && ! empty($_POST['2'])) {
        if($_POST['operator'] == 'times') {
            $number = $_POST['1'];
            $number2 = $_POST['2'];

            $total = $number * $number2;
            echo $total;
        }
    }
    if( ! empty($_POST['1']) && ! empty($_POST['2'])) {
        if($_POST['operator'] == 'division') {
            $number = $_POST['1'];
            $number2 = $_POST['2'];

            $total = $number / $number2;
            echo $total;
        }
    }
    ?>
    <form action ="" method = "post">
        <input type = "number" name = "1" placeholder = "number">
        <select name = "operator">
        <option value = "add">+</option>
        <option value = "takeaway">-</option>
        <option value = "times">*</option>
        <option value = "division">/</option>
        </select>
        <input type = "number" name = "2" placeholder = "number 2">
        <input type = "submit" value = "calculate">
    </form>
</body>
</html>
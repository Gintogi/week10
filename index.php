<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "This is index.php inside week10 folder";
        echo "<br>";
        $name = "Diego";
        echo "Hello, ". $name . "!<br>";
        echo "Hello, $name!<br>";
        echo 'Hello,' .$name.'!<br>';

        echo "Today is ".date("y/m/d")."<br>";
        echo "Today is ".date("l, y/m/d")."<br>";

        switch(date("l")){
            case "Monday":
                echo"วันจัทร์";
                break;
            case "Tuesday":
                echo"วันอังคาร";
                break;
            case "Wednesday":
                echo"วันพุทธ";
                break;
            case "Thursday":
                echo"วันพฤหัส";
                break;
            case "Friday":
                echo"วันศุกร์";
                break;
            case "Saturday":
                echo"วันเสาร์";
                break;
            case "Sunday":
                echo"วันอาทิตย์";
                break;
        }

        $thai_month_arr = array(
            "January" => "มกราคม",
            "Februaty" => "กุมภาพันธ์",
            "March" => "มีนาคม",
            "Aprill" => "เมษายน",
            "May" => "พฤษภาคม",
            "June" => "มิถุนายน",
            "July" => "กรกฎาคม",
            "August" => "สิงหาคม",
            "September" => "กันยายน",
            "Octorber" => "ตุฃาตม",
            "November" => "พฤศจิกายน",
            "December" => "ธันวาคม",
        );
            
        echo "ที่".date("d")."เดือน".$thai_month_arr[date("F")]."พ.ศ.".(date("y")+543);
        echo "<br>";

        if (date("h")<12){
            echo "Good morning! เวลา";
        } else {
            echo "Good afternoon!";
        }
        
        function calculateBMI($weight,$height){
            $bmi =$weight/($height*$height);
            return $bmi;
        }
        echo"<br>";
        $bmi = calculateBMI(60,1.75);
        echo "My BMI is ".number_format($bmi,2)."<br>";

        if($bmi < 18.5){
            echo "You are underweight.";
        }elseif($bmi >= 18.5 && $bmi < 24.9){
            echo "You are normal weight.";
        }elseif($bmi >= 25 && $bmi < 29.9){
            echo "You are overweight.";
        }else{
            echo "You are obese.";
        }

        $student = [
            ["name"=> "John",
            "grade"=> 90],
            ["name"=> "Jane",
            "grade"=> 85],
            ["name"=> "Bob",
            "grade"=> 78]
        ];
        echo "<br>";
        echo $student[2]["name"]."has a grade of".$student[2]["grade"]."<br>";
        echo $student[1]["name"]."has a grade of".$student[1]["grade"]."<br>";

        
    ?>
    <form action="search.php" method="get">
                <label for="keyword">Enter keyword:</label>
                <input type="text" id="keyword" name="keyword">
                <input type="submit" value="Search">
    </form>
    
    <form action="login.php" method= "post">
        <label for ="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for ="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Search">
    </form>

</body>
</html>
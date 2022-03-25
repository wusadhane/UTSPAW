<?php require_once 'auth/sessman.php'; // remove this after testing is over 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
</head>


<?php
if ($_GET['submit']) {
    $mass = $_GET['berat'];
    $height = $_GET['tinggi'];
    function bmi($mass, $height)
    {
        $bmi = $mass / ($height * $height);
        return $bmi;
    }
    $bmi = bmi($mass, $height);
    if ($bmi <= 18.5) {
        $output = "Under Weight";
    } else if ($bmi > 18.5 and $bmi <= 24.9) {
        $output = "Normal Weight";
    } else if ($bmi > 24.9 and $bmi <= 29.9) {
        $output = "Over Weight";
    } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
    echo "Your BMI value is " . $bmi . " and you are : ";
    echo "$output";
}
?>

<body>
    <div class="wrapper">
        <div class="title">
            Kalkulator BMI
        </div>
        <form method="post">
            <div class="field">
                <input type="text" name="berat" id="berat">
                <label>Berat Badan (kg)</label>
            </div>
            <div class="field">
                <input type="text" name="tinggi" id="tinggi">
                <label>Tinggi Badan (cm)</label>
            </div>
            <div class="field">
                <input type="submit" name="submit" id="submit" value="Hitung">
            </div>
        </form>
        <p><a href="auth/logout.php">Logout</a>
</body>

</html>
<?php

// exo 1

// if (isset($_GET["lastname"], $_GET["firstname"])) {
//     $firstName = $_GET["firstname"];
//     $lastName = $_GET["lastname"];

//     var_dump($firstName, $lastName);
// };

// exo 2

// if (isset($_GET["lastname"], $_GET["firstname"], $_GET["age"])) {
//     $firstName = $_GET["firstname"];
//     $lastName = $_GET["lastname"];
//     $age = $_GET["age"];

//     var_dump($firstName, $lastName, $age);
// }else{
//     echo "<p> il manque un ou des champs </p>";
// };

// exo 3

// if (isset($_GET["startDate"], $_GET["endDate"])) {
//     $startDate = $_GET["startDate"];
//     $endDate = $_GET["endDate"];

//     var_dump($endDate, $startDate);
// }else{
//     echo "<p> il manque un ou des champs </p>";
// };

// exo 4

// if (isset($_GET["server"], $_GET["language"])) {
//     $server = $_GET["server"];
//     $language = $_GET["language"];

//     var_dump($language, $server);
// }else{
//     echo "<p> il manque un ou des champs </p>";
// };

// exo 5

// if (isset($_GET["week"])) {
//     $week = $_GET["week"];

//     var_dump($week);
// }else{
//     echo "<p> il manque un ou des champs </p>";
// };

// exo 6

// if (isset($_GET["building"], $_GET["room"])) {
//     $building = $_GET["building"];
//     $room = $_GET["room"];

//     var_dump($room, $building);
// }else{
//     echo "<p> il manque un ou des champs </p>";
// };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><?php
        // exo 6
        // if (!isset($_POST["lastName"], $_POST["firstName"], $_POST["civ"])) {
        //     echo ("<form action='./index.php' method='post'>
        // <label for='fistName'>prémon</label><input type='text' name='firstName'>
        // <label for='lastName'>nom de famille</label><input type='text' name='lastName'>
        // <select name='civ' id='civility'>
        //     <option value=''>--select your sivility--</option>
        //     <option value='Mr'>monsieur</option>
        //     <option value='Mme'>madame</option>
        // </select>
        // <input type='submit' value='go'>");
        // }else{
        //     var_dump($_POST["lastName"], $_POST["firstName"], $_POST["civ"]);
        // }

        // exo 7

        // if (!isset($_POST["lastName"], $_POST["firstName"], $_POST["civ"])) {
        //     echo ("<form action='./index.php' method='post'>
        // <label for='fistName'>prémon</label><input type='text' name='firstName'>
        // <label for='lastName'>nom de famille</label><input type='text' name='lastName'>
        // <select name='civ' id='civility'>
        //     <option value=''>--select your sivility--</option>
        //     <option value='Mr'>monsieur</option>
        //     <option value='Mme'>madame</option>
        // </select>
        // <label for='avatar'>choisir un avatar</label><input type='file' name='avatar'>
        // <input type='submit' value='go'>");
        // }else{
        //     var_dump($_POST["lastName"], $_POST["firstName"], $_POST["civ"], substr($_POST["avatar"], -4));
        // }

        // exo 8

        // if (!isset($_POST["lastName"], $_POST["firstName"], $_POST["civ"], $_POST["avatar"])) {
        //     echo ("<form action='./index.php' method='post'>
        // <label for='fistName'>prémon</label><input type='text' name='firstName'>
        // <label for='lastName'>nom de famille</label><input type='text' name='lastName'>
        // <select name='civ' id='civility'>
        //     <option value=''>--select your sivility--</option>
        //     <option value='Mr'>monsieur</option>
        //     <option value='Mme'>madame</option>
        // </select>
        // <label for='avatar'>choisir un avatar</label><input type='file' name='avatar'>
        // <input type='submit' value='go'>");
        // echo "RETRY";
        // } else {
        //     if(substr($_POST["avatar"], -4) === ".pdf") {
        //         var_dump($_POST["lastName"], $_POST["firstName"], $_POST["civ"], substr($_POST["avatar"], -4));
        //     }else{
        //         echo ("<form action='./index.php' method='post'>
        //         <label for='fistName'>prémon</label><input type='text' name='firstName'>
        //         <label for='lastName'>nom de famille</label><input type='text' name='lastName'>
        //         <select name='civ' id='civility'>
        //             <option value=''>--select your sivility--</option>
        //             <option value='Mr'>monsieur</option>
        //             <option value='Mme'>madame</option>
        //         </select>
        //         <label for='avatar'>choisir un avatar</label><input type='file' name='avatar'>
        //         <input type='submit' value='go'>");
        //         echo "RETRY";
        //     }
        // }


        ?>

    </form>
</body>

</html>
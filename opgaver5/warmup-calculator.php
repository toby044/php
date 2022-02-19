<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Simpel Lommeregner</title>
</head>

<?php
/*
*
*   Lav en lommeregner ved hjælp af nedenstående formular. Du skal tage de indtastede værdiger fra 
*   first_num og second_num og printe det rigtige resultat i feltet "result".
*   Du skal tage højde for hvilken operator der er valgt og lave udregningen ud fra den
*
*/

$first = null;
$second = null;
$result = null;

if ($_POST) {

    $first = (int) $_POST['first_num'];
    $second = intval($_POST['second_num']);
    $operator = $_POST['operator'];
    $result = $_POST['result'];

    switch ($operator) {
        case "Plus":
            $result = $first + $second;
            break;

        case "Minus":
            $result = $first - $second;
            break;

        case "Gange":
            $result = $first * $second;
            break;

        case "Divider":
            $result = $first / $second;
            break;

        default:
        $_POST['result'] = 0;
    }
}

?>

<body>
    <div id="page-wrap">
        <h1>PHP - Calc</h1>
        <form action="" method="POST">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first; ?>" /> <b>Første tal</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second; ?>" /> <b>Andet tal</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Resultat</b>
            </p>
            <input type="submit" name="operator" value="Plus" />
            <input type="submit" name="operator" value="Minus" />
            <input type="submit" name="operator" value="Gange" />
            <input type="submit" name="operator" value="Divider" />
        </form>
    </div>
</body>

</html>
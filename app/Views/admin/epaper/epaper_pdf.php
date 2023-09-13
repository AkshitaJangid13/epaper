<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Multiple Page PDF</title>
</head>
<style>
    body,
    div,
    p {
        margin: 0;
        padding: 0;
        margin-top:-23.9px;
        margin-left:-20px;
        /* margin-right:-20px;
        margin-bottom:-65px;  */
    }
</style>

<body style="width:95%;">
    <?php
    foreach ($pages as $html) {
        echo $html;
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="">
<head>
    <title>лабараторная 2</title>
</head>
<style>
    body {
        background: #c7b39b;
        font-family: "Times New Roman";
    }
</style>
<body>+
<form name="test" action="" method="post">
    <label>String: </label><br />
    <textarea name="message" cols="40" rows="10"> </textarea>
    <br />
    <input type="submit" name="done" value="Done" />
</form>
</body>
</html>

<?php
    if (isset($_POST["message"]))
    {
        $str = $_POST["message"];
        $i = 0;
        $Number_Space = 0;
        while ($i <= strlen($str)-1)
        {
            if ($str[$i] == " ") $Number_Space++;

            if(($Number_Space == 2) and ($str[$i]!=" "))
            {
                $str[$i] = chr(ord($str[$i])-32);
            }

            if($Number_Space == 3)
                $Number_Space = 0;
            if($i % 3 == 0)
            {
                $char = $str[$i];
                echo "<span style='color: Purple'>$char</span>";
            }
            else{echo $str[$i];}

            $i++;
        }
        echo '<br>Total number of letters found in the text "o" and "O": ' . preg_match_all('~o~iu', $str);
    }
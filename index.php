<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />

    <meta name="author" content="Tomas Hujer" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="ZifZub" />
    <meta name="description" content="ZifZub test application" />
    <meta name="robots" content="index, follow" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <title>ZifZub</title>

</head>

<body>

    <?

    define('BR', '<br />');

    $a_multiple = array(
        3 => 'Zif',
        5 => 'Zuf'
    );

    for($i=0; $i<=100; $i++) {

        unset($out);

        foreach($a_multiple as $multiple => $value) {
            if($i && ($i % $multiple) == 0)
                $out .= $value;
        }

        echo isset($out)?$out.BR:$i.BR;
    }

    ?>


</body>
</html>


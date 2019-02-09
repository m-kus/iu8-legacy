<html>
<head>
    <style type="text/css">
        tr.shape {
            background-color: #eee;
        }
    </style>
</head>
<body>
<table cellspacing="0px" cellpadding="10px" border="1px">
    <?php

    include_once 'func.php';

    $scheme = parse($_POST['func']);
    $n = $_POST['count'];
    $sign = $_POST['sign'];

    $pairs = keys(pow(2, $n), 2);
    $odd = false;

    print thead($scheme);

    foreach ($pairs as $pair) {
        $number[0] = _decbin(--$pair[0]);
        $number[1] = _decbin(--$pair[1]);
        $number[2] = diff(_decbin($pair[0]), _decbin($pair[1]), $sign);

        $tr = array();

        for ($j = 0; $j < 3; $j++) {
            $num = $number[$j];

            for ($i = 0; $i < $n; $i++) {
                $sig["X$i"] = $num[$n - $i - 1];
            }

            $tr[$j] = ($odd) ? '<tr class="shape">' : '<tr>';

            $tr[$j] .= '<td>' . _print($num) . '</td>';

            $i = 1;

            foreach ($scheme as $step) {
                $sig["DD$i"] = exe($step['operation'], $step['operands'], $sign);

                $tr[$j] .= '<td>' . _print($sig["DD$i"]) . '</td>';

                $i++;

            }

            $tr[$j] .= '</tr>';
        }

        $last = count($scheme);

        if (in_array($sig["DD$last"], array('S0', 'S1', 'D+', 'D-', '|'))) {
            print $tr[0] . $tr[2] . $tr[1];

            $odd = $odd ? false : true;
        }

    }

    ?>

</table>
</body>
</html>
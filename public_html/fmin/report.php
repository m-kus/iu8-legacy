<html>
<head>
    <title>Вуаля</title>
    <style type="text/css">
        sub, sup {
            font-size: 10px;
        }

        em {
            border-top: 1px solid #000;
            font-style: normal;
        }

        body {
            font-size: 12px;
            width: 4000px;
        }
    </style>
</head>
<body>
<?php

function log2($n)
{

    return log10($n) / log10(2);

}

function keys($n, $k)
{

    if ($k > $n) die($k . ' > ' . $n);

    $j = 0;

    for ($i = 0; $i < $k; $i++) {

        $keys[$j][$i] = 1 + $i;

    }

    for ($i = 0; $i < $k; $i++) {

        if ($keys[$j][$k - $i - 1] < $n - $i) {

            if ($i) {

                $keys[$j][$k - $i] = $keys[$j][$k - $i - 1] + 1;
                $i -= 2;

            } else {

                $keys[$j + 1] = $keys[$j++];
                $keys[$j][$k - $i - 1]++;
                $i--;

            }

        } else if ($keys[$j][$k - $i - 2] < $n - $i - 1) {

            $keys[$j + 1] = $keys[$j++];
            $keys[$j][$k - $i - 2]++;

        }

    }

    if ($n != $k) unset($keys[$j]);

    return $keys;

}

function bin($dec, $n)
{

    return str_pad(strval(decbin($dec)), $n, '0', STR_PAD_LEFT);
}

function K($set, $key)
{

    return 'K<sub>' . $set . '</sub><sup>' . $key . '</sup>';

}

function term($set, $key)
{

    $res = '';

    for ($i = strlen($set) - 1; $i >= 0; $i--) {

        if ($key[$i] == '1') {

            $res .= 'X<sub>' . $set[$i] . '</sub>';

        } else {

            $res .= '<em>X</em><sub>' . $set[$i] . '</sub>';

        }
    }

    return $res;
}

# check input

$length = strlen($_POST['func']);

$n = log2($length, 2);

if ($n != intval($n)) die('Проверь стобец');

# init collections

$p = 0;

for ($i = 1; $i <= $n; $i++) {

    $keys = keys($n, $i);

    for ($j = 0; $j < count($keys); $j++) {

        $set[$p++] = implode('', $keys[$j]);

    }
}

# make system

if (isset($_POST['show'])) print '<h2>Система уравнений</h2>';

for ($s = 0; $s < $length; $s++) {

    $bin = bin($s, $n);

    $func = intval($_POST['func'][$s]);

    $str = '';

    for ($i = 0; $i < $p; $i++) {

        $key = '';

        for ($j = 0; $j < strlen($set[$i]); $j++) {

            $key .= intval($bin[$n - $set[$i][$j]]);

        }

        if ($k[$set[$i]][$key]['value'] != '0') {

            $k[$set[$i]][$key]['value'] = $func;
            $k[$set[$i]][$key]['count'] = 0;

        }

        if ($str != '') $str .= ' v ';

        $str .= K($set[$i], $key);

    }

    if (isset($_POST['show'])) print $str . ' = ' . $func . '<br/>';
}

print '<br/>';

# minimize step 1

print '<h2>Шаг 1. Избавляемся от нулевых коэффициентов</h2>';

$r = 0;

for ($s = 0; $s < $length; $s++) {

    $bin = bin($s, $n);

    $func = intval($_POST['func'][$s]);

    $str = '';

    if ($func) {

        $r++;
        $row[$r]['count'] = 0;
        $row[$r]['bin'] = $bin;

    }

    for ($i = 0; $i < $p; $i++) {

        $key = '';

        for ($j = 0; $j < strlen($set[$i]); $j++) {

            $key .= intval($bin[$n - $set[$i][$j]]);

        }

        if ($k[$set[$i]][$key]['value'] != '0') {

            if ($str != '') $str .= ' v ';

            $str .= K($set[$i], $key);

            $row[$r]['count']++;

        }
    }

    if ($func) print $str . ' = 1<br/>';
}

print '<br/>';

# ascending order

print '<h2>Шаг 2. Сортируем уравнения по возрастанию</h2>';

for ($i = 1; $i < $r; $i++) {

    for ($j = 1; $j < $r; $j++) {

        if ($row[$j + 1]['count'] < $row[$j]['count']) {

            $tmp = $row[$j];
            $row[$j] = $row[$j + 1];
            $row[$j + 1] = $tmp;

        }
    }
}

for ($s = 1; $s <= $r; $s++) {

    $bin = $row[$s]['bin'];

    $str = '';

    for ($i = 0; $i < $p; $i++) {

        $key = '';

        for ($j = 0; $j < strlen($set[$i]); $j++) {

            $key .= intval($bin[$n - $set[$i][$j]]);

        }

        if ($k[$set[$i]][$key]['value'] != '0') {

            if ($str != '') $str .= ' v ';

            $str .= K($set[$i], $key);

            $k[$set[$i]][$key]['count']++;

        }
    }

    print $str . ' = 1<br/>';
}

print '<br/>';

print '<h2>Шаг 3. Ищем часто встречающиеся термы минимального ранга</h2>';

# find terms with minimal range

for ($s = 1; $s <= $r; $s++) {

    $bin = $row[$s]['bin'];

    $m = 0;

    for ($i = 0; $i < $p; $i++) {

        $key = '';

        for ($j = 0; $j < strlen($set[$i]); $j++) {

            $key .= intval($bin[$n - $set[$i][$j]]);

        }

        if ($k[$set[$i]][$key]['value'] != '0') {

            if ($m == 0) $m = strlen($set[$i]);

            if ($m != strlen($set[$i])) {

                $k[$set[$i]][$key]['count']--;

                $row[$s]['count']--;

            }
        }
    }
}

for ($i = 1; $i < $r; $i++) {

    for ($j = 1; $j < $r; $j++) {

        if ($row[$j + 1]['count'] < $row[$j]['count']) {

            $tmp = $row[$j];
            $row[$j] = $row[$j + 1];
            $row[$j + 1] = $tmp;

        }
    }
}

for ($s = 1; $s <= $r; $s++) {

    $bin = $row[$s]['bin'];

    $min['count'] = 0;

    $str = '';

    for ($i = 0; $i < $p; $i++) {

        $key = '';

        for ($j = 0; $j < strlen($set[$i]); $j++) {

            $key .= intval($bin[$n - $set[$i][$j]]);

        }

        if ($k[$set[$i]][$key]['value'] != '0') {

            if ($min['count'] == 0) $min['length'] = strlen($set[$i]);

            if ($k[$set[$i]][$key]['value'] == -1) {

                unset($row[$s]);

                $min['count'] = PHP_INT_MAX;

            }

            if ($min['length'] == strlen($set[$i])) {

                if ($k[$set[$i]][$key]['count'] > $min['count']) {

                    $min['set'] = $set[$i];
                    $min['key'] = $key;
                    $min['count'] = $k[$set[$i]][$key]['count'];

                }

                if ($str != '') $str .= ' v ';

                $str .= K($set[$i], $key);//.'('.$k[$set[$i]][$key]['count'].')';

            }
        }
    }

    if ($min['count'] < PHP_INT_MAX) {

        $k[$min['set']][$min['key']]['value'] = -1;

    }

    print $str . ' = 1<br/>';
}

print '<br/>';

# finally

print '<h2>Шаг 4. Избавляемся от повторов</h2>';

$res = '';

for ($s = 1; $s <= $r; $s++) {

    if (isset($row[$s])) {

        $bin = $row[$s]['bin'];

        for ($i = 0; $i < $p; $i++) {

            $key = '';

            for ($j = 0; $j < strlen($set[$i]); $j++) {

                $key .= intval($bin[$n - $set[$i][$j]]);

            }

            if ($k[$set[$i]][$key]['value'] == '-1') {

                $str = K($set[$i], $key);

            }
        }

        if (in_array($str, $cache)) {

            unset($row[$s]);

        } else {

            $cache[$s] = $str;

            print $str . ' = 1<br/>';

        }
    }
}

# result

print '<h2>Ответ</h2>';

for ($s = 1; $s <= $r; $s++) {

    if (isset($row[$s])) {

        $bin = $row[$s]['bin'];

        for ($i = 0; $i < $p; $i++) {

            $key = '';

            for ($j = 0; $j < strlen($set[$i]); $j++) {

                $key .= intval($bin[$n - $set[$i][$j]]);

            }

            if ($k[$set[$i]][$key]['value'] == '-1') {

                if ($res != '') $res .= ' v ';

                $res .= term($set[$i], $key);

            }
        }
    }
}

print $res;

?>

</body>
</html>
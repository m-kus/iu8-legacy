<?php

$logic['8'] = array(
    '1' => 0,
    '0' => 1,
    '+' => 2,
    '-' => 3,
    'S1' => 4,
    'S0' => 5,
    'D+' => 6,
    'D-' => 7,
);

$logic['3'] = array(
    '1' => 0,
    '0' => 1,
    '|' => 2,
);

$sig = array();

function _and($arg1, $arg2, $sign = '3')
{
    global $logic;

    $and['8'] = array(
        '1' => array('1', '0', '+', '-', 'S1', 'S0', 'D+', 'D-'),
        '0' => array('0', '0', '0', '0', '0', '0', '0', '0'),
        '+' => array('+', '0', '+', 'S0', 'D+', 'S0', 'D+', 'S0'),
        '-' => array('-', '0', 'S0', '-', 'D-', 'S0', 'S0', 'D-'),
        'S1' => array('S1', '0', 'D+', 'D-', 'S1', 'S0', 'D+', 'D-'),
        'S0' => array('S0', '0', 'S0', 'S0', 'S0', 'S0', 'S0', 'S0'),
        'D+' => array('D+', '0', 'D+', 'S0', 'D+', 'S0', 'D+', 'S0'),
        'D-' => array('D-', '0', 'S0', 'D-', 'D-', 'S0', 'S0', 'D-'),
    );

    $and['3'] = array(
        '1' => array('1', '0', '|'),
        '0' => array('0', '0', '0'),
        '|' => array('|', '0', '|'),
    );

    return $and[$sign][$arg1][$logic[$sign][$arg2]];
}

function _nand($arg1, $arg2, $sign = '3')
{
    return _not(_and($arg1, $arg2, $sign), $sign);
}

function _or($arg1, $arg2, $sign = '3')
{
    global $logic;

    $or['8'] = array(
        '1' => array('1', '1', '1', '1', '1', '1', '1', '1'),
        '0' => array('1', '0', '+', '-', 'S1', 'S0', 'D+', 'D-'),
        '+' => array('1', '+', '+', 'S1', 'S1', 'D+', 'D+', 'S1'),
        '-' => array('1', '-', 'S1', '-', 'S1', 'D-', 'S1', 'D-'),
        'S1' => array('1', 'S1', 'S1', 'S1', 'S1', 'S1', 'S1', 'S1'),
        'S0' => array('1', 'S0', 'D+', 'D-', 'S1', 'S0', 'D+', 'D-'),
        'D+' => array('1', 'D+', 'D+', 'S1', 'S1', 'D+', 'D+', 'S1'),
        'D-' => array('1', 'D-', 'S1', 'D-', 'S1', 'D-', 'S1', 'D-'),
    );

    $or['3'] = array(
        '1' => array('1', '1', '1'),
        '0' => array('1', '0', '|'),
        '|' => array('1', '|', '|'),
    );

    return $or[$sign][$arg1][$logic[$sign][$arg2]];
}

function _nor($arg1, $arg2, $sign = '3')
{
    return _not(_or($arg1, $arg2, $sign), $sign);
}

function _xor($arg1, $arg2, $sign = '3')
{
    global $logic;

    $xor['8'] = array(
        '1' => array('0', '1', '-', '+', 'S0', 'S1', 'D-', 'D+'),
        '0' => array('1', '0', '+', '-', 'S1', 'S0', 'D+', 'D-'),
        '+' => array('-', '+', 'S0', 'S1', 'D-', 'D+', 'S0', 'S1'),
        '-' => array('+', '-', 'S1', 'S0', 'D+', 'D-', 'S1', 'S0'),
        'S1' => array('S0', 'S1', 'D-', 'D+', 'S0', 'S1', 'D-', 'D+'),
        'S0' => array('S1', 'S0', 'D+', 'D-', 'S1', 'S0', 'D+', 'D-'),
        'D+' => array('D-', 'D+', 'S0', 'S1', 'D-', 'D+', 'S0', 'S1'),
        'D-' => array('D+', 'D-', 'S1', 'S0', 'D+', 'D-', 'S1', 'S0'),
    );

    $xor['3'] = array(
        '1' => array('0', '1', '|'),
        '0' => array('1', '0', '|'),
        '|' => array('|', '|', '1'),
    );

    return $xor[$sign][$arg1][$logic[$sign][$arg2]];
}

function _not($arg, $sign = '3')
{
    $not['8'] = array(
        '1' => '0',
        '0' => '1',
        '+' => '-',
        '-' => '+',
        'S1' => 'S0',
        'S0' => 'S1',
        'D+' => 'D-',
        'D-' => 'D+',
    );

    $not['3'] = array(
        '1' => '0',
        '0' => '1',
        '|' => '|',
    );

    return $not[$sign][$arg];
}

function keys($n, $k) {

    if($k > $n) die($k.' > '.$n);

    $j = 0;

    for($i = 0; $i < $k; $i++) {

        $keys[$j][$i] = 1 + $i;

    }

    for($i = 0; $i < $k; $i++) {

        if($keys[$j][$k - $i - 1] < $n - $i) {

            if($i) {

                $keys[$j][$k - $i] = $keys[$j][$k - $i - 1] + 1;
                $i -= 2;

            } else {

                $keys[$j+1] = $keys[$j++];
                $keys[$j][$k - $i - 1]++;
                $i--;

            }

        } else if ($keys[$j][$k - $i - 2] < $n - $i - 1) {

            $keys[$j+1] = $keys[$j++];
            $keys[$j][$k - $i - 2]++;

        }

    }

    if($n != $k) unset($keys[$j]);

    return $keys;

}

function _decbin($arg, $len = 4)
{
    $res = decbin($arg);

    return str_pad($res, $len - count($res) + 1, '0', STR_PAD_LEFT);
}

function diff($arg1, $arg2, $sign)
{
    $diff['3'] = array(
        '0' => array('0' => '0', '1' => '|'),
        '1' => array('0' => '|', '1' => '1'),
    );

    $diff['8'] = array(
        '0' => array('0' => '0', '1' => '+'),
        '1' => array('0' => '-', '1' => '1'),
    );

    $res = array();

    for($i = 0; $i < strlen($arg1); $i++)
    {
        $res[$i] = $diff[$sign][$arg1[$i]][$arg2[$i]];
    }

    return implode('', $res);
}

function _print($arg)
{
    $out = array(
        '1' => '1',
        '0' => '0',
        '+' => '+',
        '-' => '&#150;',
        'S1' => 'S<sub>1</sub>',
        'S0' => 'S<sub>0</sub>',
        'D+' => 'D<sub>+</sub>',
        'D-' => 'D<sub>&#150;</sub>',
        '|' => '&#189;',
    );

    if(is_string($arg) && !in_array($arg, array('S0', 'S1', 'D+', 'D-')))
    {
        for($i = 0; $i < strlen($arg); $i++) $ret .= $out[$arg[$i]];
    }
    else
    {
        $ret = $out[$arg];
    }

    return $ret;
}

function exe($func, $args, $sign)
{
    global $sig;

    $func = '_'.$func;

    $count = count($args);

    if($count > 1)
    {
        $res = $sig[$args[0]];

        for($i = 1; $i < $count; $i++)
        {
            $res = $func($res, $sig[$args[$i]], $sign);
        }
    }
    else
    {
        $res = $func($sig[$args[0]], $sign);
    }

    return $res;
}

function parse($str)
{
    $i = 1;

    $scheme = array();

    while(preg_match('/\([a-zXD0-9\s]+\)/', $str, $expression))
    {
        $scheme["step$i"]['expression'] = $expression = $expression[0];

        preg_match('/(and)|(or)|(xor)|(not)|(nand)|(nor)/', $expression, $operation);

        $scheme["step$i"]['operation'] = $operation = $operation[0];

        preg_match_all('/(X|DD)([0-9])/', $expression, $operands);

        $scheme["step$i"]['operands'] = $operands = $operands[0];

        $str = str_replace($expression, "DD$i", $str);

        $i++;
    }

    return $scheme;
}

function thead($scheme)
{
    $thead = '<thead><td>- X -</td>';

    $i = 1;

    foreach($scheme as $step)
    {
        $thead .= "<td>DD$i = ".$step['expression']."</td>";

        $i++;
    }

    $thead .= '</thead>';

    return $thead;
}

?>
<?php

$ahov = array(
    'ammonia' => array(
        'title' => 'аммиак',
        'compressed' => array(
            'density' => array('gas' => 0.0008, 'liquid' => 0.681),
            'boiling' => -33.42,
            'K1' => 0.18,
            'K2' => 0.025,
            'K3' => 0.04,
            'K7' => array(
                'primary' => array(0, 0.3, 0.6, 1, 1.4),
                'secondary' => array(0.9, 1, 1, 1, 1),
            ),
        ),
        'isothermal' => array(
            'density' => array('gas' => 'none', 'liquid' => 0.681),
            'boiling' => -33.42,
            'K1' => 0.01,
            'K2' => 0.025,
            'K3' => 0.04,
            'K7' => array(
                'primary' => array(0, 1, 1, 1, 1),
                'secondary' => array(0.9, 1, 1, 1, 1),
             ),
        ),
    ),
    'fluoric_hydrogen' => array(
        'title' => 'водород фтористый',
        'density' => array('gas' => 'none', 'liquid' => 0.989),
        'boiling' => 19.52,
        'K1' => 0,
        'K2' => 0.028,
        'K3' => 0.15,
        'K7' => array(
            'secondary' => array(0.1, 0.2, 0.5, 1, 1),
        ),
    ),
    'chloride_hydrogen' => array(
        'title' => 'водород хлористый',
        'density' => array('gas' => 0.0016, 'liquid' => 1.191),
        'boiling' => -85.10,
        'K1' => 0.28,
        'K2' => 0.037,
        'K3' => 0.3,
        'K7' => array(
            'primary' => array(0.4, 0.6, 0.8, 1, 1.2),
            'secondary' => array(1, 1, 1, 1, 1),
        ),
    ),
    'dimethylamine' => array(
        'title' => 'диметиламин',
        'density' => array('gas' => 0.0020, 'liquid' => 0.680),
        'boiling' => 6.9,
        'K1' => 0.06,
        'K2' => 0.041,
        'K3' => 0.5,
        'K7' => array(
            'primary' => array(0, 0, 0, 1, 2.5),
            'secondary' => array(0.1, 0.3, 0.8, 1, 1),
        ),
    ),
    'acrylonitrile_acid' => array(
        'title' => 'нитрил акриловой кислоты',
        'density' => array('gas' => 'none', 'liquid' => 0.806),
        'boiling' => 77.3,
        'K1' => 0,
        'K2' => 0.007,
        'K3' => 0.8,
        'K7' => array(
            'secondary' => array(0.04, 0.1, 0.4, 1, 2.4),
        ),
    ),
    'oxides_of_nitrogen' => array(
        'title' => 'окислы азота',
        'density' => array('gas' => 'none', 'liquid' => 1.491),
        'boiling' => 21,
        'K1' => 0,
        'K2' => 0.04,
        'K3' => 0.4,
        'K7' => array(
            'secondary' => array(0, 0, 0.4, 1, 1),
        ),
    ),
    'sulfur_dioxide' => array(
        'title' => 'сернистый ангидрид',
        'density' => array('gas' => 0.0029, 'liquid' => 1.462),
        'boiling' => -10.1,
        'K1' => 0.11,
        'K2' => 0.049,
        'K3' => 0.333,
        'K7' => array(
            'primary' => array(0, 0, 0.3, 1, 1.7),
            'secondary' => array(0.2, 0.5, 1, 1, 1),
        ),
    ),
    'ethylene_oxide' => array(
        'title' => 'окись этилена',
        'density' => array('gas' => 'none', 'liquid' => 0.882),
        'boiling' => 10.7,
        'K1' => 0.05,
        'K2' => 0.041,
        'K3' => 0.27,
        'K7' => array(
            'primary' => array(0, 0, 0, 1, 3.2),
            'secondary' => array(0.1, 0.3, 0.7, 1, 1),
        ),
    ),
    'hydrogen_sulfide' => array(
        'title' => 'сероводород',
        'density' => array('gas' => 0.0015, 'liquid' => 0.964),
        'boiling' => -60.35,
        'K1' => 0.27,
        'K2' => 0.042,
        'K3' => 0.036,
        'K7' => array(
            'primary' => array(0.3, 0.5, 0.8, 1, 1.2),
            'secondary' => array(1, 1, 1, 1, 1),
        ),
    ),
    'formaldehyde' => array(
        'title' => 'формальдегид',
        'density' => array('gas' => 'none', 'liquid' => 0.815),
        'boiling' => -19,
        'K1' => 0.19,
        'K2' => 0.034,
        'K3' => 1,
        'K7' => array(
            'primary' => array(0, 0, 0.5, 1, 1.5),
            'secondary' => array(0.4, 1, 1, 1, 1),
        ),
    ),
    'phosgene' => array(
        'title' => 'фосген',
        'density' => array('gas' => 0.0035, 'liquid' => 1.432),
        'boiling' => 8.2,
        'K1' => 0.05,
        'K2' => 0.061,
        'K3' => 1,
        'K7' => array(
            'primary' => array(0, 0, 0, 1, 2.7),
            'secondary' => array(0.1, 0.3, 0.7, 1, 1),
        ),
    ),
    'fluorine' => array(
        'title' => 'фтор',
        'density' => array('gas' => 0.0017, 'liquid' => 1.512),
        'boiling' => -188.2,
        'K1' => 0.95,
        'K2' => 0.038,
        'K3' => 3,
        'K7' => array(
            'primary' => array(0.7, 0.8, 0.9, 1, 1.1),
            'secondary' => array(1, 1, 1, 1, 1),
        ),
    ),
    'phosphorus_trichloride' => array(
        'title' => 'фосфор треххлористый',
        'density' => array('gas' => 'none', 'liquid' => 1.570),
        'boiling' => 75.3,
        'K1' => 0,
        'K2' => 0.01,
        'K3' => 0.2,
        'K7' => array(
            'secondary' => array(0.1, 0.2, 0.4, 1, 2.3),
        ),
    ),
    'phosphorus_oxychloride' => array(
        'title' => 'фосфора хлорокись',
        'density' => array('gas' => 'none', 'liquid' => 1.675),
        'boiling' => 107.2,
        'K1' => 0,
        'K2' => 0.003,
        'K3' => 10,
        'K7' => array(
            'secondary' => array(0.05, 0.1, 0.3, 1, 2.5),
        ),
    ),
    'chlorine' => array(
        'title' => 'хлор',
        'density' => array('gas' => 0.0032, 'liquid' => 1.553),
        'boiling' => -34.1,
        'K1' => 0.18,
        'K2' => 0.052,
        'K3' => 1,
        'K7' => array(
            'primary' => array(0, 0.3, 0.6, 1, 1.4),
            'secondary' => array(0.9, 1, 1, 1, 1),
        ),
    ),
    'vomiting_gas' => array(
        'title' => 'хлорпикрин',
        'density' => array('gas' => 'none', 'liquid' => 1.658),
        'boiling' => 112.3,
        'K1' => 0,
        'K2' => 0.002,
        'K3' => 30,
        'K7' => array(
            'secondary' => array(0.03, 0.1, 0.3, 1, 2.9),
        ),
    ),
    'cyanogene' => array(
        'title' => 'хлорциан',
        'density' => array('gas' => 0.0021, 'liquid' => 1.220),
        'boiling' => 12.6,
        'K1' => 0.04,
        'K2' => 0.048,
        'K3' => 0.8,
        'K7' => array(
            'primary' => array(0, 0, 0, 1, 3.9),
            'secondary' => array(0, 0, 0.6, 1, 1),
        ),
    ),
    'etilenamin' => array(
        'title' => 'этиленамин',
        'density' => array('gas' => 'none', 'liquid' => 0.838),
        'boiling' => 55,
        'K1' => 0,
        'K2' => 0.009,
        'K3' => 0.125,
        'K7' => array(
            'secondary' => array(0.05, 0.1, 0.4, 1, 2.2),
        ),
    ),
    'etilensulfid' => array(
        'title' => 'этиленсульфид',
        'density' => array('gas' => 'none', 'liquid' => 1.005),
        'boiling' => 55,
        'K1' => 0,
        'K2' => 0.013,
        'K3' => 6.0,
        'K7' => array(
            'secondary' => array(0.05, 0.1, 0.4, 1, 2.2),
        ),
    ),
    'ethyl_mercaptan' => array(
        'title' => 'этилмеркаптан',
        'density' => array('gas' => 'none', 'liquid' => 0.839),
        'boiling' => 35,
        'K1' => 0,
        'K2' => 0.028,
        'K3' => 0.27,
        'K7' => array(
            'secondary' => array(0.1, 0.2, 0.5, 1, 1.7),
        ),
    ),
);

$depth = array(
    '0.01' => array(0,0.38,0.26,0.22,0.19,0.17,0.15,0.14,0.13,0.12,0.12,0.11,0.11,0.10,0.10,0.10),
    '0.05' => array(0,0.85,0.59,0.48,0.42,0.38,0.34,0.32,0.30,0.28,0.26,0.25,0.24,0.23,0.22,0.22),
    '0.1' => array(0,1.25,0.84,0.68,0.59,0.53,0.48,0.45,0.42,0.40,0.38,0.36,0.34,0.33,0.32,0.31),
    '0.5' => array(0,3.16,1.92,1.53,1.33,1.19,1.09,1.00,0.94,0.88,0.84,0.80,0.76,0.74,0.71,0.69),
    '1' => array(0,4.75,2.84,2.17,1.88,1.68,1.53,1.42,1.33,1.25,1.19,1.13,1.08,1.04,1.00,0.97),
    '3' => array(0,9.18,5.35,3.99,3.28,2.91,2.66,2.46,2.30,2.17,2.06,1.96,1.88,1.80,1.74,1.68),
    '5' => array(0,12.53,7.20,5.34,4.36,3.75,3.43,3.17,2.97,2.80,2.66,2.53,2.42,2.37,2.24,2.17),
    '10' => array(0,19.20,10.84,7.96,6.46,5.53,4.88,4.49,4.20,3.96,3.76,3.58,3.43,3.29,3.17,3.07),
    '20' => array(0,29.56,16.44,11.94,9.62,8.19,7.20,6.48,5.92,5.60,5.31,5.06,4.85,4.66,4.49,4.34),
    '30' => array(0,38.13,21.02,15.18,12.18,10.33,9.06,8.14,7.42,6.86,6.50,6.20,5.94,5.70,5.50,5.31),
    '50' => array(0,52.67,28.73,20.59,16.43,13.88,12.14,10.87,9.90,9.12,8.50,8.01,7.67,7.37,7.10,6.86),
    '70' => array(0,65.23,35.35,25.21,20.05,16.89,14.79,13.17,11.98,11.03,10.23,9.61,9.07,8.72,8.40,8.11),
    '100' => array(0,81.91,44.09,31.30,24.80,20.82,18.13,16.17,14.68,13.50,12.54,11.74,11.06,10.48,10.04, 9.70),
    '300' => array(0,166.0,87.79,61.47,48.18,40.11,34.67,30.73,27.75,25.39,23.49,21.91,20.58,19.45,18.46,17.60),
    '500' => array(0,231.0,121.0,84.50,65.92,54.67,47.09,41.63,37.49,34.24,31.61,29.44,27.61,26.04,24.69,23.50),
    '1000' => array(0,363.0,189.0,130.0,101.0,83.60,71.70,63.16,56.70,51.60,47.53,44.15,41.30,38.90,36.81,34.98,),
);

$speed = array(
    'inversion' => array(0,5,10,16,21),
    'isotherm' => array(0,6,12,18,24,29,35,41,47,53,59,65,71,76,82,88),
    'convection' => array(0,7,14,21,28),
);

function ahov($ahov, $key, $storing) {

    return ($key == 'ammonia')? $ahov[$key][$storing] : $ahov[$key];
}

function k1($a, $key, $state, $storing) {

    $k1 = 0;

    if($state == 'liquid') {

        switch($storing) {
            case 'compressed':  $k1 = $a['K1']; break;
            case 'isothermal':  $k1 = ($key == 'ammonia')? $a['K1'] : 0; break;
                case 'normal':  $k1 = 0; break;
        }

    } else {

        if($storing == 'compressed') {

            $k1 = 1;

        } else { die('как '.$a['title'].' может хранится не под давлением?!'); }
    }

    return $k1;
}

function k5($stability) {

    switch($_POST['stability']) {
        case 'inversion': return 1;
        case 'isotherm': return 0.23;
        case 'convection': return 0.08;
    }
}

function k7($a, $k1, $temp) {

    $k7 = array(0,0);

    if($k1) {

        $v1 = $a['K7']['primary'][floor($temp / 20) + 2];
        $v2 = $a['K7']['primary'][ceil($temp / 20) + 2];

        $t1 = 20 * floor($temp / 20);
        $t2 = $t1 + 20;

        $k7[1] = round($v1 + ($v2 - $v1) * ($temp - $t1) / ($t2 - $t1), 2);
    }

    if($k1 == 1) $k7[1] = 1;

    $v1 = $a['K7']['secondary'][floor($temp / 20) + 2];
    $v2 = $a['K7']['secondary'][ceil($temp / 20) + 2];

    $t1 = 20 * floor($temp / 20);
    $t2 = $t1 + 20;

    $k7[2] = round($v1 + ($v2 - $v1) * ($temp - $t1) / ($t2 - $t1), 2);

    return $k7;
}

function k8($stability) {

    switch($stability) {
        case 'inversion': return 0.081;
        case 'isotherm': return 0.133;
        case 'convection': return 0.235;
    }
}

function k4($wind) {

    $K4 = array(0,1,1.33,1.67,2.0,2.34,2.67,3.0,3.34,3.67,4.0,5.68);

    return $K4[$wind];
}

?>

<?php require_once('../ahov.inc'); ?>
<html>
    <head>
        <title>Утечка АХОВ</title>

        <style type="text/css">
            * {
                margin: 0;
                padding: 0;
            }

            #container {
                position: absolute;
                left: 50%;
                margin-left: -160px;
            }

            fieldset {
                margin: 10px;
                padding: 5px 10px;
                border: 1px dashed #aaa;
                width: 290px;
                line-height: 170%;
            }

            legend {
                padding: 0 10px;
                color: #aaa;
                font-size: 14px;
                font-family: Georgia, serif;
            }

            label {
                float: left;
                font-family: Georgia, serif;
            }

            input, select {
                margin-top: 3px;
                float: right;
                font-family: Georgia, serif;
            }

            p {
                color: #aaa;
                font-style: italic;
            }

            #submit {
                width: 310px;
                height: 100px;
                margin: 10px;
                padding: 10px;
                float: left;
                font-size: 50px;
                font-family: Georgia, serif;
                color: #888;
            }

         
        </style>
    </head>
    <body>
     
        
        <div id="container">
        <form action="ahov.php" method="post">

            <fieldset>
                <legend>Общие условия</legend>

                <label for="stability">СВУ</label>
                <select name="stability">
                    <option value="inversion">инверсия</option>
                    <option value="isotherm">изотермия</option>
                    <option value="convection">конвекция</option>
                </select>

                <br/>

                <label for="temp">Температура [°C]</label>
                <input name="temp" type="text" size="4" value=""/>

                <br/>

                <label for="wind">Скорость ветра [м/с]</label>
                <input name="wind" type="text" size="4" value=""/>

                <br/>

                <label for="height">Поддон [м]</label>
                <input name="height" type="text" size="4" value=""/>

                <br/>

                <label for="time">Время прогнозирования [ч]</label>
                <input name="time" type="text" size="4" value=""/>

                <br/>

                <label for="border">Рубеж [км]</label>
                <input name="border" type="text" size="4" value=""/>

                <br/>

                <label for="max">Максимальная зона поражения</label>
                <input name="max" type="checkbox" value="max"/>

                <br/>
                
            </fieldset>

            <fieldset>
                <legend>АХОВ</legend>

                <label for="ahov">Вещество</label>
                <select name="ahov">
                    <?php

                        $keys = array_keys($ahov);

                        foreach($keys as $key) {
                            print '<option value="'.$key.'">'.$ahov[$key]['title'].'</option>';
                        }


                    ?>
                </select>

                <br/>

                <label for="storing">Хранение</label>
                <select name="storing">
                    <option value="compressed">под давлением</option>
                    <option value="isothermal">изотермическое</option>
                    <option value="normal">при нормальных условиях</option>
                </select>

                <br/>

                <label for="state">Состояние</label>
                <select name="state">
                    <option value="liquid">жидкость</option>
                    <option value="gas">газ</option>
                </select>

                <br/>

                <label for="weight">Аварийная масса [т]</label>
                <input name="weight" type="text" size="4" value=""/>

                <br/>

                <p>// если масса не задана</p>

                <label for="value">Объем резервуара [м^3]</label>
                <input name="value" type="text" size="4" value=""/>

                <br/>

                <p>// для газа</p>

                <label for="pressure">Давление [кПа]</label>
                <input name="pressure" type="text" size="4" value=""/>

                <br/>

                <label for="content">Концентрация [%]</label>
                <input name="content" type="text" size="4" value=""/>

                <br/>

                <p>// для жидкости</p>

                <label for="filling">Коэффициент заполнения</label>
                <input name="filling" type="text" size="4" value=""/>

                <br/>

                
            </fieldset>           

            

            <input id="submit" type="submit" value="YAARRR!!!">

        </form>
        </div>
       
    </body>
</html>

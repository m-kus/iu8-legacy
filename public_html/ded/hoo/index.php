<?php require_once('../ahov.inc'); ?>
<html>
    <head>
        <title>Авария на ХОО</title>

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
        <form action="hoo.php" method="post">

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
                <input name="temp" type="text" size="4" value="20"/>

                <br/>

                <label for="wind">Скорость ветра [м/с]</label>
                <input name="wind" type="text" size="4" value="1"/>

                <br/>

                <label for="height">Высота слоя испарения [м]</label>
                <input name="height" type="text" size="4" value="0.05"/>

                <br/>

                <label for="time">Время прогнозирования [ч]</label>
                <input name="time" type="text" size="4" value="1"/>

                <br/>

                <label for="border">Рубеж [км]</label>
                <input name="border" type="text" size="4" value=""/>

                <br/>

                <label for="max">Максимальная зона поражения</label>
                <input name="max" type="checkbox" value="max"/>

                <br/>
                
            </fieldset>

            <?php 
            
            for($i = 0; $i < $_POST['number']; $i++) {

                print '<fieldset>
                            <legend>АХОВ #'.$i.'</legend>

                            <label for="ded'.$i.'">Вещество</label>
                            <select name="ded'.$i.'">';


               $keys = array_keys($ahov);

               foreach($keys as $key) {
                    print '<option value="'.$key.'">'.$ahov[$key]['title'].'</option>';
               }
                              
               print       '</select>

                            <br/>

                            <label for="weight'.$i.'">Аварийная масса [т]</label>
                            <input name="weight'.$i.'" type="text" size="4" value=""/>

                            <br/>
                    </fieldset>';

            }

            ?>

            <input name="number" type="hidden" value="<?php print $_POST['number']; ?>"/>

            <input id="submit" type="submit" value="YAARRR!!!">

        </form>
        </div>
       
    </body>
</html>

<html>
<head>
    <title>Жить ради риска</title>
    <style type="text/css">
        #container {
            width: 1000px;
            margin: auto;
            margin-top: 200px;
        }

        form, input {
            color: #888;
            font-size: 30px;
            font-family: Georgia, serif;
            margin-top: 5px;
        }

        #submit {
            width: 430px;
            height: 100px;
        }

        label.radio {
            font-size: 20px;
            line-height: 30px;
        }

        .ex {
            font-size: 20px;
        }
    </style>
</head>
<body>
<div id="container">
    <form action="report.php" method="POST">
        <label for="func">Функция реализуемая схемой</label><br/>
        <input type="text" name="func" size="64"/><br/>
        <span class="ex">например: (X1 and (X0 xor X2 xor (X3 nand X2)) and (X0 nor (not X3)))</span>
        <p></p>

        <label for="count">Количество входов</label><br/>
        <input type="text" name="count" size="1" maxlength="1"/>
        <p></p>

        <label for="sign">Логика</label>
        <br/><input id="3" type="radio" name="sign" value="3"/><label class="radio" for="3"> 3-значная</label>
        <br/><input id="8" type="radio" name="sign" value="8"/><label class="radio" for="8"> 8-значная</label>
        <p></p>
        <input id="submit" type="submit" value="Поехали!"/>

    </form>
</div>
</body>
</html>

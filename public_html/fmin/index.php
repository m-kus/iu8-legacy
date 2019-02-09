<html>
<head>
    <title>Хочешь уменьшить функцию?</title>
    <style type="text/css">
        #container {
            width: 1000px;
            margin: auto;
            margin-top: 250px;
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
    </style>
</head>
<body>
<div id="container">
    <form action="report.php" method="POST">
        <label for="func">Столбец функции</label><br/>
        <input type="text" name="func" size="64"/>
        <p></p>

        <label for="show">Показывать жуткую систему</label>
        <input id="show" type="checkbox" name="show"/>
        <p></p>
        <input id="submit" type="submit" value="Поехали!"/>
    </form>
</div>
</body>
</html>

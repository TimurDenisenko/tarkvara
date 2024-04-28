<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tarkvara.css">
    <title>Tarkvara sõnad</title>
    <script>
        const synad = {"teostus":"исполнение","algoritm":"алгоритм","kavand":"план","kasutajaliides":"пользовательский интерфейс",
            "mudel":"модель","andmebaasi skeem":"схема базы данных","standard":"стандард","tsükkel":"цикл","andmetöötlus":"обработка данных","andmestruktuur":"структура данных",
            "arenduskeskkond":"среда разработки","projektihaldus töörist":"работник по управлению проектами","kavandamine":"планирование","iteratsioon":"итерация","parandus":"исправление",
            "koskmudel":"каскадная модель","agiilne mudel":"агильная модель","spiraalne mudel":"спиральная модель","inkrementaalne mudel":"инкрементальная модель","nõudmised":"требования",
            "realiseerimine":"реализация","testimime":"тестирование","integreerimine":"интегригование","kasutamine":"использование","hooldus":"уход","eelised":"преимущества",
            "puudusedв":"недостаткий"}
        function clear()
        {
            document.getElementById("kontroll").style.color = "black"
            document.getElementById("kontroll").style.backgroundColor = "white"
        }
        function randomSuna()
        {

            const keys = Object.keys(synad)
            const juhuslikSyna=keys[Math.floor(Math.random()*keys.length)]
            document.getElementById("random-syna").innerHTML = juhuslikSyna
        }
        async function kontroll()
        {
            const syna = document.getElementById("kontroll").value.toLowerCase()
            if (syna === synad[document.getElementById("random-syna").innerHTML])
            {
                document.getElementById("kontroll").style.color = "white"
                document.getElementById("kontroll").style.backgroundColor = "green"
                let table = document.getElementById("table");
                let row = table.insertRow(1);
                let c2 = row.insertCell(0);
                let c1 = row.insertCell(1);
                c1.innerText = syna
                c2.innerText = document.getElementById("random-syna").innerHTML
                randomSuna()
                await new Promise(resolve => setTimeout(resolve, 1000))
                clear()
            }
            else
            {
                document.getElementById("kontroll").style.color = "white"
                document.getElementById("kontroll").style.backgroundColor = "red"
            }
        }
    </script>
</head>
<body onload="randomSuna()">
<table id="table">
    <tr>
        <td>Eesti keel</td>
        <td>Vene keel</td>
    </tr>
<tr>
    <td>
        <div id="random-syna"></div>
        <input type="button" value="Uuenda sõna" onclick="randomSuna()">
    </td>
    <td>
        <input type="text" name="kontroll" id="kontroll" onchange="kontroll()" onselect="clear()">
    </td>
</tr>
</table>
</body>
</html>

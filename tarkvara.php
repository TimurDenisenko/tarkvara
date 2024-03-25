<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarkvara sõnad</title>
    <script>
        const synad = {"teostus":"исполнение","algoritm":"алгоритм","kavand":"план","kasutajaliides":"пользовательский интерфейс",
            "mudel":"модель","andmebaasi skeem":"схема базы данных","standard":"стандард","tsükkel":"цикл","andmetöötlus":"обработка данных","andmestruktuur":"структура данных",
            "arenduskeskkond":"среда разработки","projektihaldus töörist":"работник по управлению проектами","kavandamine":"планирование","iteratsioon":"итерация","parandus":"исправление",
            "koskmudel":"каскадная модель","agiilne mudel":"агильная модель","spiraalne mudel":"спиральная модель","inkrementaalne mudel":"инкрементальная модель","nõudmised":"требования",
            "realiseerimine":"реализация","testimime":"тестирование","integreerimine":"интегригование","kasutamine":"использование","hooldus":"уход","eelised":"преимущества",
            "puudused":"недостатки"}
        function randomSuna()
        {

            const keys = Object.keys(synad)
            const juhuslikSyna=keys[Math.floor(Math.random()*keys.length)]
            document.getElementById("random-syna").innerHTML = juhuslikSyna
        }
        function kontroll()
        {
            const syna = document.getElementById("kontroll").value.toLowerCase()
            let vastus
            if (syna === synad[document.getElementById("random-syna").innerHTML])
            {
                vastus = "õige"
                document.getElementById("vastus").style.color = "green"
            }
            else
            {
                vastus = "vale"
                document.getElementById("vastus").style.color = "red"
            }
            document.getElementById("vastus").innerHTML = vastus
        }
    </script>
</head>
<body onload="randomSuna()">
<input type="button" value="Uuenda sõna" onclick="randomSuna()">
<div id="random-syna"></div>
<label for="kontroll">Kirjuta sõna vene keeles</label>
<input type="text" name="kontroll" id="kontroll" onchange="kontroll()">
<div id="vastus"></div>
</body>
</html>
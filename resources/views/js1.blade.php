<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javasript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeText() 
        {
            var span = document.getElementById("output");
            var textbox = document.getElementById("textbox");

            textbox.style.color = "red";
            textbox.style.fontSize = "13pt";
            textbox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success"; //langsung ganti 1 class

            span.innerHTML = textbox.value;
            hadiah();
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        <script>
            function hadiah()
            {
                alert("Selamat, Anda mendapatkan 100 juta!");
            }
        </script>
        <center><button class="btn btn btn-primary" onclick="hadiah();">Klik Disini!</button></center>
        <br>
        <button onclick="changeText();" class="btn btn-success">Click me!</button>
        <span id="output">Senpai!</span>
        <input id="textbox" type="text" class="form-control"/>
    </div>
</body>
</html>
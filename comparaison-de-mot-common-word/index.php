<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Common Words</title>
</head>
<body style="text-align: center">
<h1>Common words</h1>
<form action="" method="post">
    <textarea name="" id="text1" placeholder="Texte 1" style="width: 300px; height: 200px; resize: vertical; max-height: 300px; min-height: 200px;"></textarea>
    <textarea name="" id="text2" placeholder="Texte 2" style="width: 300px; height: 200px; resize: vertical; max-height: 300px; min-height: 200px;"></textarea>
    <br>
    <input type="button" value="Envoyer" id="submitBtn" style="margin-top: 20px" onclick="verify_word()">
</form>
<p id="common_words"></p>

<script>
    function verify_word() {
        var text1 = document.querySelector('#text1').value;
        var text2 = document.querySelector('#text2').value;

        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                document.querySelector("#common_words").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","traitement.php?text1=" + text1 + "&text2=" + text2, true);
        xmlhttp.send();
    }
</script>
</body>
</html>
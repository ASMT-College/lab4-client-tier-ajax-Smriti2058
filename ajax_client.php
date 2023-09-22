<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    list of gods:
    <input type="text" name="god" id="god" onkeyup="get_data_using_ajax()"/>
    <div id="god_results"></div>
    <script>
        function get_data_using_ajax(){
            var q = document.getElementById('god').value
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("god_results").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","ajax_server.php?q=" + q, true)
            xmlhttp.send();
        }
    </script>
</body>
</html>


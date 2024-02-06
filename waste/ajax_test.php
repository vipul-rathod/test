<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <input name="text1" id="text1" type="text" readonly>
    <button>Send request to show changes</button>
</body>
<script>
        $(document).ready(function(){
            $("button").click(function(){
                $.post("demo_test.txt", function(data, status){
                    $("*").attr("readonly", false);
                    // alert("Data: " + data + "\nStatus: " + status);
                })
            })
        })
    </script>
</html>



// use $get method in ajax

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.get("demo_test.txt", function(data, status){
                    alert("Data: " + data + "\nStatus: " + status);
                })
            })
        })
    </script>
</head>
<body>
    <button>Send request to show changes</button>
</body>
</html> -->
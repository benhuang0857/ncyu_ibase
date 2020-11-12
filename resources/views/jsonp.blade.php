<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script>
        $.ajax({
             url:"api/jsonp",
             dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
             success:function(json){
                 // do stuff with json (in this case an array)
                 console.log(json);
                 alert("Success");
             },
             error:function(){
                 alert("Error");
             }      
        });
    </script>
</body>
</html>
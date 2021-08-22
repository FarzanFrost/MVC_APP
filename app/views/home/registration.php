<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration Form</title>
</head>
<body>

    <script>



        function  btnfunct(){

            
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var password = document.getElementById("password").value;

            var content = document.getElementById("content");
            
            var httpreq = new XMLHttpRequest();

            httpreq.onreadystatechange = function(){
                console.log("Before readystate");
                if(this.readyState == 4 && this.status == 200){
                        console.log("in");
                        datavalues(this);
                        console.log("out");
                }

            }

            
            httpreq.open("POST" , "http://localhost/MVC_APP/public/registration/registrationbtn", true);
            httpreq.setRequestHeader("Content-type" , "application/x-www-form-urlencoded");
            httpreq.send("firstName="+firstName+"&lastName="+lastName+"&password="+password);
            

            function datavalues(httpreq){
                var result = JSON.parse(httpreq.responseText);
                content.innerHTML = result;
                console.log(result);
                
                
            };


        }


    </script>



    First Name: <br>
    <input type="text" id="firstName" name = "firstName"><br>
    Last Name:<br>
    <input type="text" id="lastName" name = "lastName"><br>

    Password:<br>
    <input type="password" id="password" name ="password"><br><br>

    <input type="button" value="register" id="btn" onclick = "btnfunct()" ><br>

    <div id = "content">


    </div>

    


</body>
</html>
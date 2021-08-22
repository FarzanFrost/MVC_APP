<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Searching</title>

</head>
<body>

    <script>


        function btnfunc(){
            var searchData = document.getElementById("search").value;
            console.log(searchData);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                console.log("Before readystate");
                if(this.readyState == 4 && this.status == 200){
                        console.log("in");
                        datavalues(this);
                        console.log("out");
                }

            }

            xhr.open("GET" , "http://localhost/MVC_APP/public/datareturn/" + searchData , true);
            xhr.send();
            console.log("Before Onload");

            function datavalues(xhr){
                let results = document.getElementById("data");
                var searchresponse = JSON.parse(xhr.responseText);
                console.log(searchresponse);
                results.innerHTML = "";
                if(searchresponse !== null){
                    for(let s of searchresponse){
                        results.innerHTML +=`${s.id} => ${s.name}<br/>`;
                   }
                }
                else{
                    results.innerHTML = "Result Not found!";
                }
            };

        };

    </script>

    <input type="text" id="search" required/>
    <input type="button" id="searchButton" value="Search" onclick = "btnfunc()">
    <div id="data">


    </div>

</body>
</html>
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Tutor</title>

    <style>

       *{
        background-color: blue;
       }
        
        .mainDiv{
            display: flex;
            justify-content: center;
        }


       
        .centerDiv{
            margin-top: 7em;
        }
        

        button {
       background-color: #4CAF50; /* Green */
        border: none;
       color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


button{
            margin-left: 25rem;
            margin-top: 10px;
        }



        textarea{
            background-color: rgba(0, 0, 0, 0.914);
            color: white;
            font-size: 20px;
            border: 10px solid rgba(255, 255, 255, 0.544);
            box-shadow: 20px;
            border-radius: 5px;
        
        }

        h1 {
            color: white;
            font-size: 50px;
        }

        h2{
            color: wheat;
            font-size: 40px;
        }


    </style>

</head>
<body>
    
    <div class="mainDiv">
        <div class="centerDiv">
            <h1>Welcome to Typing Tutor</h1>
            <h2 id="msg"></h2>

            <textarea id="typeArea" cols="80" rows="20"  placeholder="Type Your Text Here"></textarea>
            <br>
            <button id = "btn">Start</button>
        </div>
    </div>



    <script>

        var startTime , endTime;
        function playgame(){


            var dat = new Date();

            startTime = dat.getTime();

        }

        function endgame(){
            var dat = new Date();

            endTime = dat.getTime();

        }


        const arr = [

            "If life were predictable it would cease to be life, and be without flavor.",
            "The greatest glory in living lies not in never falling, but in rising every time we fall.",
            "I will be able to crack the interview"
        ];

        var btn = document.getElementById("btn");

        btn.addEventListener('click' , function(){

            var s1 = document.getElementById("msg");

            var idx = Math.floor((Math.random()*(arr.length)));

            s1.innerText = arr[idx];

            var intxt = btn.innerText;

            if(intxt == 'Start'){
                btn.innerText = "Done";
                playgame();
            }

            else{
                btn.innerText = "Start";
                endgame();

                let newtxt = document.getElementById("typeArea").value;

                let newarr1 = newtxt.split(" ");
                let newarr2 = arr[idx].split(" ");
                
                var cnt = newarr1.length;

                var mis = newarr2.length - newarr1.length;

                for(var i = 0; i<cnt; i++){
                    if(newarr1[i] != newarr2[i]){
                        mis++;
                    }
                }

                var val1 = ((endTime - startTime)/1000);
                var speed = Math.round(60*(cnt/(val1)));
                let fintxt = "Your Typing speed is " + speed+  " words per minute " + "You mistyped " + mis+ " words out of " + newarr2.length + " words.";
                s1.innerText = fintxt;


            }

            


        });



    </script>

</body>





</html>

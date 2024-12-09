<html>
    <head>
        <style>
            .container{
                width: 100%;
                height: 100vh;
                background: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .btn{
                padding: 10px 60px;
                background: #FEA116;
                border: 0;
                outline: none;
                cursor: pointer;
                font-size: 22px;
                font-weight: 500;
                border-radius: 30px;
            }
            .popup{
                width: 400px;
                background: #fff;
                border-radius: 6px;
                position: absolute;
                top:0%;
                left: 50%;
                transform: translate(-50%,-50%) scale(0.1);
                text-align: center;
                padding: 0 30px 30px;
                color: #333;     
                visibility: hidden;
                transition: transform 0.4s,top 0.4s;
            }
            .open-popup{
                visibility: visible;
                top:50%;
                transform: translate(-50%,-50%) scale(1);

            }
            .popup img{
                width: 100px;
                margin-top: -50px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                 
            }
            .popup h2{
                font-size: 38px;
                font-weight: 500;
                margin: 30px 0 10px;
            }
            .popup button{
                width: 30%;
                margin-top: 50px;
                padding: 10px 0;
                background: #FEA116;
                color: #fff;
                border: 0;
                outline: none;
                font-size: 18px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0,0,0,0.2);    
            }
            .popup a{ color: #000;}
        </style>
    </head>
    <body>
        <div class="container" style="background-color: #0F172B;">
            <button type="submit" class="btn" onclick="openPop()">Click For Confirmation...</button>
            <div class="popup" id="popup">
                <img src="img\404-tick.jpg">
                <h2>Thank You!</h2>
                <p>Your order has been placed successfully.Thanks!</p>
                <a href="vieworder.php"><button type="button" onclick="closePop()">OK</button></a>
            </div>
        </div>
       <script>
        let popup=document.getElementById("popup");

        function openPop(){
            popup.classList.add("open-popup");
        }

        function closePop(){
            popup.classList.remove("open-popup");
        }
       </script>     
    </body>
</html>
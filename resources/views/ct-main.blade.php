<html>
<head>
    <title>countrain-first-1</title>
    <style>
        body{background-color:#0c0c0f;color:#FFFFFF}

        h1{color:#ede5bb;text-align:right;letter-spacing:0.2em}

        .period{color:#FA6E6C}

        .bButton{color:#FFFFFF;text-decoration:none;background-color:#9684E340;}
        .bButton:hover{opacity:0.6;transition:all 0.1s;}

        .yellowL{color:#EDE5BB}

        .idDisp{text-align:right;}
        .logoutbutton{text-align:right;float:right;}

        .textbox{text-align:right; font-size:14px; position:relative;margin:35% 5% 5% 30%;
        padding:0.5em;0em;border:solid 1px #FFFFFF;}

        .conductress img{position:absolute;bottom:0;max-height:90%;max-width:90%}

    </style>

</head>


<body>

<h1>countrain<span class="period">.</div></h1>

<div class="idDisp">お客様の名前：{{$idDisp}}</div>

<div class="logoutbutton"><a href="logout" class="bButton">ログアウト</a></div>

<div class="textbox">countrainにようこそ！</div>

<div class="conductress"><img src= {{asset('/img/conductress.png')}} ></div>


</body>



</html>
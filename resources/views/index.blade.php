<html>
<head>
    <title>countrain</title>
    <style>
        body{background-color:#0c0c0f;}

        h1{color:#ede5bb;text-align:right;}

        .train img{position:absolute;bottom:0;height:90%;max-width:90%}
        body{background-color:#0c0c0f;color:#FFFFFF}

        h1{color:#ede5bb;text-align:right;letter-spacing:0.2em}

        .period{color:#FA6E6C}

        .train img{position:absolute;bottom:0;height:90%;max-width:90%;}

        .bButton{color:#FFFFFF;text-decoration:none;background-color:#9684E340;}
        .bButton:hover{opacity:0.6;transition:all 0.1s;}

        .yellowL{color:#EDE5BB}

        .forFirst{float:right;margin:6% 0 0 0;}

        .forRegistered{float:right;margin:5% 0 0 0;padding:0 8% 0 8%;clear:right}


    </style>

</head>


<body>

<h1>countrain<span class="period">.</span></h1>

<div class="train"><img src= {{asset('/img/trainAndStars.png')}} ></div>

<div class="forFirst">ご利用は<a href="piyo" class="bButton"><span class="yellowL">はじめてです</span><span class="period">.</span></a></div>

<div class="forRegistered">登録済<span class="period">.</span>

<form action="/countrain/ct-main" method="post">
<table>
    @csrf
    <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
    <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
    <tr><th></th><td><input class="bbutton" type="image" name="send" src={{asset('/img/login-button.png')}} alt="送信する."></td></tr>
</table>
</form>

</div>

</body>



</html>
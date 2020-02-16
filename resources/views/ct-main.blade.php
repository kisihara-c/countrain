@extends('layouts.ct-base')

@section('title','countrain')

@php
$welcomeText = [
'countrainにようこそ！',
'止まるんじゃねぇぞ…',
'すっごーい！',
'諦めないその心こそが、最大の武器になるのだからな！'
];
$randomN = rand(0,count($welcomeText)-1);
@endphp

@section('other')
<div style="clear:both;"></div>
<div class="menuBlock" style="display:flex;justify-content:flex-end;margin-top:2%;">
<div style=
"background-color:#454B58;
margin-left:2em;margin-right:2em;
width:10em;height:15em;">
<p>目的地</p>
<p>世界の海の最深地[11×10km]</p><hr>
<p>0/11×10km</p>
</div>
<div style=
"background-color:#454B58;
margin-right:1em;
width:10em;height:15em">
<p>目的地</p>
<p>？</p><hr>
<p>？/？</p>
</div>
</div>
@endsection

@section('textbox',$welcomeText[$randomN])


@section('conductress')
<img src= {{asset('/img/conductress.png')}} >
@endsection
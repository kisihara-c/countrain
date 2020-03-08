@extends('layouts.ct-base')

@section('title','countrain-main')

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
<div class="menuBlock">
<div class="menuBlock-mainlpiece" style=
"background-color:#454B58;
margin-left:2em;margin-right:2em;
width:10em;height:15em;">
<a href="ct-route-1" style="display:block;width:10em;height:15em;position:absolute;"></a>
<p>目的地</p>
<p>{{$item->route1LastStop}}[{{$item->route1NumberObStation}}×{{$item->route1Unit}}]</p><hr>
<p>{{$item->route1CurrentLocation}}×{{$item->route1Unit}}</p>
<span style="text-align:right"><p>/[{{$item->route1NumberObStation}}×{{$item->route1Unit}}]</p></span>
</div>

<div class="menuBlock-mainrpiece" style=
"background-color:#454B58;
margin-right:1em;
width:10em;height:15em">
@if(empty($item->route2LastStop))
<p>目的地</p>
<p>？</p>
<hr>
<p>？/？</p>
@else
<a href="ct-route-2" style="display:block;width:10em;height:15em;position:absolute;"></a>
<p>目的地</p>
<p>{{$item->route2LastStop}}[{{$item->route2NumberObStation}}×{{$item->route2Unit}}]</p><hr>
<p>{{$item->route2CurrentLocation}}×{{$item->route2Unit}}</p>
<span style="text-align:right"><p>/[{{$item->route2NumberObStation}}×{{$item->route2Unit}}]</p></span>
@endif
</div>

</div>
@endsection

@section('textbox',$welcomeText[$randomN])


@section('conductress')
<img src= {{asset('/img/conductress.png')}} >
@endsection
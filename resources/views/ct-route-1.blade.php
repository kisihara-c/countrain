@extends('layouts.ct-base')
@section('title','countrain-route1')

@php
$commentText = [
'まだ先があります',
'次の駅は次の駅駅になります',
'次の駅は谺｡縺ｮ鬧駅になります',
'次の駅は繧ｫ繧＃繝ｳァ駅になります',
'次の駅は医Ξ■､繝駅になります',
'止まるんじゃねぇぞ…',
'終点まで止まりません'
];
$randomN = rand(0,count($commentText)-1);
@endphp




@section('other')
<div style="clear:both;"></div>
<div class="trainWindow" style="float:right;margin-left:2em;margin-right:2em;
width:10em;height:15em;border:1px solid #EDE5BB">
<img src= {{asset('/img/countrain-deepsea.png')}} style="height:15em;width:10em;
object-fit:cover;
object-position:{{(intval(100 * $item->route1CurrentLocation / $item->route1NumberObStation))}}% 0;">
</div>

<div style="clear:both;"></div>

<div class="routeStatus" style="text-align:right;">
<p>目的地：{{$item->route1LastStop}}</p>
<p>{{$item->route1CurrentLocation}}×{{$item->route1Unit}} / [{{$item->route1NumberObStation}}×{{$item->route1Unit}}]</p>
</div>

<div style="text-align:right;">
<a href="piyo" class="bButton"><span class="yellowL">Go</span><span class="period">.</span></a>
</div>

<div style="text-align:right;">
<a href="piyo" class="bButton"><span class="yellowL">別の電車に乗り直す</span><span class="period">.</span></a>
</div>

@endsection


@section('textbox',$commentText[$randomN])

@section('conductress')
<img src= {{asset('/img/conductress.png')}} >
@endsection
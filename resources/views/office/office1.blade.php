@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
            @include('Exercise.commons.way')
            @include('Exercise.commons.cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.Genre.office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
                <h1>小顔になるエクササイズ</h1>
                <p>歯茎をなぞるようにして、舌をぐるぐる回しましょう。</p>
                <p>左右20回ずつ、気がついたときでもいいのでやっていると徐々にリフトラインがシェイプアップされてきます</p>
        </div>
            
  </div>
@endsection

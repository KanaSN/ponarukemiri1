@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.present location.office')
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
        
        <h3>太ももの引き締め</h3>
        <img class="card-img-top" src="{{ asset('images/office/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
        <h4>浅めに腰かけ、膝にクッションや雑誌を挟んでみましょう！<br>
        これだけで内ももの引き締めに効果があります。慣れてきたらそのまま上下運動を取り入れるなどして、工夫してみましょう。</h4>
        </div>
            
  </div>
@endsection
@extends('layout.master')

@section('content')
<div class="container content z-depth-1 ">
	<div class="row">
    <div class="col s12 m10 offset-m1">

      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="termek-content">
	            <div class="col s12 m12 l12">
	              <img src="{{ $subcategory->background }}" class="responsive-img" alt="garazskapu-background">
	              <div class="divider"></div>
	            </div>

	            @foreach($datas as $key=>$data)
	            <div class="col s12 m6">
	              <h4 class="small-font"><a class="ajax" href="/termek/{{$subcategory->name}}/{{$products[$key]->id}}"><i class="material-icons">play_arrow</i>{{ $data['name'] }}</a></h4>
	              <img src="{{ $data['poster'] }}" class="responsive-img" alt="{{ $data['name'] }}">
	              <span>{{ str_limit($data['desc'], $limit = 70, $end = '...')  }} </span><strong><a class="ajax" href="/termek/{{$subcategory->name}}/{{$products[$key]->id}}"> tovább »</a></strong>
	            </div>
	            @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

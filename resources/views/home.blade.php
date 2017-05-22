@extends('layouts.app')

@section('styles')
	@parent
	<link href="{{asset('/css/home.css')}}" rel="stylesheet">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
					<form class="subscribe" action="{{asset('home/subscribe')}}" method="post">
						{{csrf_field()}}
						@foreach($cats as $one)
						<div class='line'>
							<div class='line_name'>{{$one->name}}</div>
							<div class='line_check'>
								<input class='check' name="{{$one->id}}" type='checkbox'
								{{(isset($arr[$one->id]))?'checked':''}} />
							</div>
							<br style='clear:both' />
						</div>
						@endforeach
						<br />
						<div class="col-md-9">
							<div class="form-group email-left">
								<label class="sr-only" for="exampleInputEmail3" >Email address</label>
								<input type="email" value="{{$subs->email}}" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
							</div>
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-default button-right">Subscribe</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

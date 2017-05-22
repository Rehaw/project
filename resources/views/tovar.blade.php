@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tovar</div>
                <div class="panel-body">
					{!!$y->name!!}
					{!!$y->body!!}
					{!!$y->user_id!!}
					@if($y->picture != '')<img src="{{ asset('uploads/thumb') . '/'.  $y->picture }}">@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

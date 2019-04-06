
@extends('layouts.admin')

@section('content')
@if(Session::has('info'))
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">{{Session::get('info')}}</p>
	</div>
</div>
@endif

<div class="row">
	<div class="col-md-12">
<a href="/admin/create"><button type="submit" class="btn btn-success" >New Post</button></a>
</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
<p>Learning Laravel <a href="/admin/edit/1">Edit</a></p>
</div>
</div>
@endsection

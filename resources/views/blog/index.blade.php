@extends('layouts.app')

@section('title')
Blog
@endsection

@section('brandname')
Blog
@endsection

@section('content')
	<a href="/home" class="btn btn-primary"> Add new</a>
	
	<table class="w3-theme table table-bordered table-responsive" style="margin-top:18px;">
	<thead>
		<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Title</th>
			<th>Content</th>
			<th>Created At</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody class="w3-theme-l4">
		@foreach($blogs as $data)
		<tr>
			<td>{{ $loop->index+1 }}</td>
			<td>{{ $data->category }}</td>
			<td>{{ $data->title }}</td>
			<td>{{ $data->content }}</td>
			<td>{{ $data->created_at s}}</td>
			<td>
				<a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
			</td>
			<td>
				{!!Form::open(['method'=>'delete','route'=>['blog.destroy',$data->id]])!!}

				{!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}

				{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
@endsection
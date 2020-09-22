@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))

			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{Session('message')}}
			</div>
			@endif
			<h3>Add New Category</h3>
			<form method="post" action="{{url('addcategoryinf')}}">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('category_infs')}}">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="title" id="category_name" class="form-control">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly="">
					<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
				</div>

				<div class="form-group">
					<label>Status</label>
					<select class="form-group" name="status">
						<option>on</option>
						<option>off</option>
					</select>
				</div>				



				<div class="form-group">
					<button class="btn btn-primary">Add New Category</button>
				</div>
			</form>	


		</div>

<div class="col-sm-8 cat-view">
			<form method="post" action="{{url('multipledelete')}}">
				<div class="row">			
					{{ csrf_field() }}
					<input type="hidden" name="tbl" value="{{encrypt('category_infs')}}">
					<input type="hidden" name="tblid" value="{{encrypt('cinid')}}">
					<div class="col-sm-3">
						<select name="bulk-action" class="form-control">
							<option value="0">Bulk Action</option>
							<option value="1">Move to Trash</option>
						</select>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-default">Apply</button>
					</div>
					<div class="col-sm-3 col-sm-offset-4">
						<input type="text" id="search" class="form-control" placeholder="Search Category">
					</div>	
				</div>
			
				<div class="content">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><input type="checkbox" id="select-all"> Name</th>
								<th>Slug</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@if(count($data) > 0)
							@foreach($data as $category)
							<tr>
								<td>
									<input type="checkbox" name="select-data[]" value="{{$category->cinid}}"> 
									<a href="{{url('editcategoryinf')}}/{{$category->cinid}}">{{$category->title}}</a>
								</td>
								<td>{{$category->slug}}</td>
								<td>{{$category->status}}</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="3">No Data Found. </td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>  						
		</div>
	</div>
</div>


@stop
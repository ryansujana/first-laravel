@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Gallery</h1>
		</div>

	@if (count($errors) > 0)
	<div class="alert alert-danger">
	    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
	    <ul>
	      @foreach ($errors->all() as $error)
	          <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	</div>
	@endif
    @if(session('success'))
	<div class="alert alert-success alert-dismissable fade in">
	{{ session('success') }}
	</div> 
	@endif
    
		<div class="col-sm-12">
			<div class="row">
				<form method="post" action="{{url('addgallery')}}" enctype="multipart/form-data">
			  {{csrf_field()}}
			  		<input type="hidden" name="tbl" value="{{encrypt('forms')}}">
			  		<div class="col-sm-12">
						<div class="form-group">	
							<input type="text" name="title" class="form-control" placeholder="Enter title here">				
						</div>
				        <div class="form-group content featured-image">
								<h4>Gallery Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
				              <p><img id="output" style="max-width: 100%" /></p>    	
					          <input type="file" accept="image/*" id="file" name="filename[]" class="form-control"  multiple >
				        </div>
				    </div>
				    <div class="form-group">
				    	<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
				    </div>

			  </form>        
			</div>
		</div>
	</div>
</div>


<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@stop
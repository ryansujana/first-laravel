@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Sliders <a href="{{url('form')}}" class="btn btn-sm btn-default">Add New</a></h1>
    </div>
    <div class="col-sm-12">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
      {{Session('message')}}
      </div>
      @endif
    </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data) > 0)
            @foreach($data as $d)
            <tr>
              <td>{{$d->title}}</td>
              <td> <?php foreach (json_decode($d->filename)as $picture) { ?>
                 <img src="{{ asset('/forms/'.$picture) }}" style="height:120px; width:200px"/>
                <?php } ?>
              </td>
              <td><a href="{{url('deletegal')}}/{{$d->id}}"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="4">No Data Found.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop
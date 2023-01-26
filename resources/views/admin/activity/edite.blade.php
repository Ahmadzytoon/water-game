@extends('admin.layout.master')

@section('title')
activity_edite
@endsection

@section('css')
   
@endsection

@section('title_page1')
Activity
@endsection
@section('title_page2')
Edite
@endsection


@section('content')
<!-- /.row -->
<div class="row container m-aut">
  <div class="col-9">
      <div class="card-header">
        <h3 class="card-title">Add Activity</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('admin.activity.update',$data->id)}}" method="POST" files=true enctype="multipart/form-data" >
        {{-- @method('PATCH') --}}
        @method('PUT')

                @csrf

            <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="activity_name" class="form-control" id="" placeholder="" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="activity_price" class="form-control" id="" placeholder="" value="{{$data->price}}">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Short description</label>
                  <input type="text" name="short_description" class="form-control" id="" placeholder="" value="{{$data->short_description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Long description</label>
                    <input type="text" name="long_description" class="form-control" id="" placeholder="" value="{{$data->long_description}}">
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">image1</label>
                  <input type="file"  name="activity_image1">
        
                  {{-- <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="activity_image1">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div> --}}
             </div>
              <div class="form-group">
                  <label for="exampleInputFile">image2</label>
                  <input type="file"  name="activity_image2">

                  {{-- <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="activity_image2">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  
                  </div> --}}
                </div>
        <div>
        
        
        <!-- /.card-body -->
  
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
    <div>
@endsection


@section('scripts')
@endsection
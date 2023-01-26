@extends('admin.layout.master')

@section('title')
reservation
@endsection

@section('css')
   
@endsection

@section('title_page1')
    stauts
@endsection
@section('title_page2')
reservation
@endsection


@section('content')
<div class="container m-aut">
    <div class="">
              <div class="card-header">
                <h3 class="card-title">Add Activity</h3>
              </div>
        <!-- /.card-header -->
        <!-- form start -->
              <form action="{{route('admin.activity.store')}}" method="POST" enctype="multipart/form-data" >
                {{-- @method('PATCH') --}}
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="activity_name" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="number" name="activity_price" class="form-control" id="" placeholder="">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Short description</label>
                    <input type="text" name="short_description" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Long description</label>
                      <input type="text" name="long_description" class="form-control" id="" placeholder="">
                    </div>
                  <div class="form-group">
                    <label >image1</label>
                    <input type="file"  name="activity_image1">
    
                    {{-- <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="activity_image1">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div> --}}
                  </div>
                  <div class="form-group">
                      <label >image2</label>
                      <input type="file"  name="activity_image2">
    
                      {{-- <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="activity_image2">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    
                      </div> --}}
                    </div>
                </div>
                
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
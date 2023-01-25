@extends('admin.layout.master')

@section('title')
    user
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}
">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}
">

@endsection

@section('title_page1')
    home
@endsection
@section('title_page2')
user-shoe
@endsection


@section('content')

 <!-- /.row -->
 <div class="row">
    <div class="col-9">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Fixed Header Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>email</th>
                <th>is_admin</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-success">Approved</span></td>
                <td><button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                </td>
              </tr>
              <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-warning">Pending</span></td>
                <td><button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>





@endsection


@section('scripts')

<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


@endsection

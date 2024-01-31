@extends('admin.layouts.app')
@section('customCss')
<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('back/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('back/dist/css/adminlte.min.css')}}">
@endsection
@section('content')
<!-- table -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $key => $user)
                    <tr>
                    <td>{{$loop->index +1}}</td>
                    <td> {{ $user->lastname }}</td>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email}}</td>
                    <td>Role</td>
                    </tr>
                    <td>
                      <a href="{{ route('users.edit', $user->id) }}"><i class="fas fa-edit"></i></a> 
                      <a href="" onclick="document.getElementById('deleteFrom').submit();"><i class="fas fa-trash"></i></a>
                      <form id="deleteFrom" method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @method('delete')
                        @csrf
                    </td>
                    @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
@endsection
@section('customJs')
<!-- DataTables  & Plugins -->
<script src="{{ asset('back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('back/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('back/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('back/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('back/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
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
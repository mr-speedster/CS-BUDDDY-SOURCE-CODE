@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
        <!-- announce handling -->

        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Announcement</th>
              <th>Updator</th>
              <th>Date</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($announces as $announce)
            <tr>
              <td>{{$announce->id}}</td>
              <td>{{$announce->msg}}</td>
              <td>{{$announce->updator_name}}</td>
              <td>{{$announce->date}}</td>
              <td>{{$announce->time}}</td>
              <td>
                <a href="#"><i class="fas fa-pen text-info"></i></a><br />
                <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
    <!-- /Main Site -->
@endsection
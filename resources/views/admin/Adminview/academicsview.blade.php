@extends('admin.Adminview.layout.app')
@section('main-content')   
 <!-- Academic handling -->
        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>Exam Name</th>
              <th>Date</th>
              <th>Order</th>
              <th>Subject</th>
              <th>Mark</th>
              <th>Credit</th>
              <th>Roll No</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($academics as $academic)
            <tr>
              <td>{{$academic->exam_name}}</td>
              <td>{{$academic->date}}</td>
              <td>{{$academic->no}}</td>
              <td>{{$academic->subject}}</td>
              <td>{{$academic->mark}}</td>
              <td>{{$academic->credit}}</td>
              <td>{{$academic->roll_no}}</td>              
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
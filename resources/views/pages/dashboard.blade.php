@extends('layouts.app')

@section('content')
<div class="container">
  <div>{{$user->username}}</div>

<table id="courses">
            <tr>
              <th>Quartile</th>
              <th>course</th>
              <th>Exam</th>

              <th>credits</th>
              <th>grade</th>
            </tr>

            @foreach($user->grades as $grade)
      <tr>
          <td>{{$grade->nameTest}}</td>
          <td>{{$grade->typeTest}}</td>
          <td>{{$grade->ec}}</td>
          <td>{{$grade->grade}}</td>

      </tr>
       @endforeach
</table>  


<div class="row">
    <a href="/grade/create"> add new grade</a>
   
</div>




   
</div>
@endsection

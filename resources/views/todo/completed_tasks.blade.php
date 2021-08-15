@extends('layout.master')
@section('content')
<div class="container mt-5">
 
  <div class="card">
    <div class="card-body">
    <h2>Completed Tasks</h2>
    <div>
    <a class="btn btn-sm btn-warning float-right" href="{{route('todo.index')}}">Geri Dön</a>  
    </div>
    <br>
    <table class="table">
    <thead>
      <tr>
        <th>Task</th>
        <th>Completed at</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($todos as $todo)
        <tr>
            <td class="table-text">
                <div>{{ $todo->name }}</div>
            </td>
            <td>

            </td>
            <td>
                
            </td>
            </tr>
    @endforeach
     
    </tbody>
  </table>

    </div>
  </div>
</div>

@endsection
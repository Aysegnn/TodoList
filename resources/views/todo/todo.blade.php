@extends('layout.master')
@section('content')
<a class="btn btn-sm btn-primary float-right mt-3" href="{{route('signout')}}">Sign Out</a>   

<div class="w-100 h-100  pt-5 d-flex justify-content-center align-items-center">
    <div class="text-center pt-5" style="width:100%">
        <h5 class="display-4 text-white">Todo App</h5>

        <form action="{{route('todo.store')}}" method="post">
            @csrf
            <div class="input-group mb-3 w-100">
                <input type="text" name="todo" class="form-control form-control-lg" value="{{old('name')}}">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
            </div>
        </form>

    
 <div class="mt-5">
        <h3 class="text-white text-left">My Todo List</h3>
 </div>   
 <div class=" mt-3 bg-white w-100 text-left">  
    @if (count($todos) > 0)
            <div class="panel panel-default">
        
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <tbody>
                            @foreach ($todos as $todo)
                                <tr>
                                    <td class="table-text">
                                    <svg  task-id="{{$todo->id}}" xmlns="http://www.w3.org/2000/svg" class=" complete icon icon-tabler icon-tabler-circle" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <circle cx="12" cy="12" r="9" />
                                    </svg> 
                                        {{$todo->name}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
    <div class="input-group-append">
        <a class="btn btn-warning" href="">View Completed Tasks</a>   
     </div>
    </div>
</div>

@endsection


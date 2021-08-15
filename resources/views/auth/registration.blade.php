@extends('layout.master')

@section('content')
    <div class="container" style="padding:200px">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Todo App Register</h1>
                            </div>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('register.user') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                 </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                     <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                     @if ($errors->has('password'))
                                         <span class="text-danger">{{ $errors->first('password') }}</span>
                                     @endif
                                </div>

                                 <div class="form-group mb-3">
                                     <div class="checkbox">
                                         <label><input type="checkbox" name="remember"> Remember Me</label>
                                     </div>
                                 </div>

                                <div class="d-grid mx-auto">
                                     <button type="submit" class="btn btn-dark btn-block">Register</button>
                                 </div>
                             </form>
                             <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
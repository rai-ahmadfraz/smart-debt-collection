@extends('componant.app')
@section('title', 'home')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card">
                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @elseif(\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title">Update user</h4>
                        <div class="row">
                            <div class="col-md-6">
                            <form action="{{route('updateUser')}}">
                                <div class="form-group">
                                    <label for="name">Full name:</label>
                                    <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name">
                                    <input type="hidden" class="form-control" value="{{$user->id}}" name="id" id="id">
                                </div>
                                <div class="form-group">
                                    <label for="name">Contact No:</label>
                                    <input type="text" class="form-control" value="{{$user->contact_no}}" name="contact_no" id="contact_no">
                                </div>
                                <div class="form-group">
                                    <label for="name">Address:</label>
                                    <input type="text" class="form-control" value="{{$user->address}}" name="address" id="address">
                                </div>
                                @csrf
                                <div class="form-group">
                                    <label for="pwd">New password(optional):</label>
                                    <div class="row">
                                        <div class="col-md-10">
                                        <input type="password" class="form-control" name="password" id="pwd">
                                        </div>
                                        <div class="col-md-2">
                                        <span style="cursor:pointer" id="showbtn" onclick="myFunction()">show</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('componant.footer')

        </div>

    </div>

@endsection
@section('script')
    <script>
        function myFunction() {
            var x = document.getElementById("pwd");
            var y = document.getElementById("showbtn");
            if (x.type === "password") {
                x.type = "text";
                y.innerText = "hide";
            } else {
                x.type = "password";
                y.innerText = "show";
            }
        }
    </script>
@endsection

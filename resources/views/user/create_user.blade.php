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
                        <h4 class="card-title">Add user</h4>
                        <div class="row">
                            <div class="col-md-6">
                            <form action="{{route('storeNewUser')}}">
                                <div class="form-group">
                                    <label for="name">Full name:</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                @csrf
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <div class="row">
                                        <div class="col-md-10">
                                        <input type="password" class="form-control" name="password" id="pwd" required>
                                        </div>
                                        <div class="col-md-2">
                                        <span style="cursor:pointer" id="showbtn" onclick="myFunction()">show</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Role:</label>
                                    <select class="form-control" name="role" required>
                                        <option value="0">User</option>    
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contact_no">Contact No:</label>
                                    <input type="text" class="form-control" name="contact_no" id="contact_no" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" id="address" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
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

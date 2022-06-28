@extends('componant.app')
@section('title', 'home')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('addNewUser') }}" class="btn btn-primary">Add User/Admin</a>
                            </div>
                        </div>
                        <h4 class="card-title">Users</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key=>$user)
                                          <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><label class="badge badge-info">{{ $user->role ? 'Admin':'User' }}</label></td>
                                            <td>{{ $user->contact_no }}</td>
                                            <td title="{{ $user->address }}">{{ \Illuminate\Support\Str::limit($user->address, 10, $end='...') }}</td>
                                            <td>
                                                <div class="row action-row">
                                                    <div class="col-md64">
                                                        <a href="{{ url('accounts/change-role',$user->id) }}"> <button class="btn btn-outline-primary">Change Role</button></a> <br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="{{ url('accounts/delete-user',$user->id) }}"> <button class="btn btn-outline-danger">Delete</button></a>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <a href="{{ url('accounts/update-user-detail',$user->id) }}"> <button class="btn btn-outline-info">Edit</button></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('componant.footer')
        </div>
    </div>
    <style>
        .action-row a button{
            padding: 10px !important;
        }
    </style>
@endsection
@section('script')
    <script src="{{ url('js/data-table.js') }}"></script>
@endsection

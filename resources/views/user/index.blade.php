@extends('componant.app')
@section('title', 'home')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card bg-dark text-white border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <p style="border-bottom: 1px solid;"> User detail</p>
                                </div>
                                <table class="  table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>name:</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact:</td>
                                            <td>{{ Auth::user()->contact_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>email:</td>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 grid-margin stretch-card">
                        <div class="card bg-primary text-white border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <p style="border-bottom: 1px solid;"> Daily Status</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>#Of Calls:</td>
                                                    <td>0</td>

                                                </tr>
                                                <tr>
                                                    <td>#Of SMS:</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>#Of Email:</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>#Of Accounts:</td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>#Of RTP:</td>
                                                    <td>0</td>

                                                </tr>
                                                <tr>
                                                    <td>#Of AOD:</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>#Of PTPs:</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>#Of RCP:</td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card bg-success text-white border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <p style="border-bottom: 1px solid;"> Reminders</p>
                                </div>
                                <table class="table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>#Of Failed PTP's:</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>#Of Pre Term:</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td># AOD:</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Debtor</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID #</th>
                                            <th>Id Number</th>
                                            <th>Client Name</th>
                                            <th>Debtor Name</th>
                                            <th>Contact No</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($debtors as $key=>$debtor)
                                          <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{$debtor->id_number}}</td>
                                            <td>{{ $debtor->debtor_first_name }}</td>
                                            <td>{{ $debtor->first_name }}</td>
                                            <td>{{ $debtor->contact_no }}</td>
                                            <td>{{ $debtor->amount }}</td>

                                            <td>
                                                <label class="badge badge-info">On hold</label>
                                            </td>
                                            <td>
                                               <a href="{{ url('debtor/detail',$debtor->id) }}"> <button class="btn btn-outline-primary">View</button></a>
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
@endsection
@section('script')
    <script src="{{ url('js/data-table.js') }}"></script>
@endsection

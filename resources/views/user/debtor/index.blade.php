@extends('componant.app')
@section('title', 'home')
@section('link')
<style>
    .icon-size-css{
        font-size:35px;
        padding: 10px;
    }
    .my-model-size{
        max-width: 60%;
    }

</style>
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-1"><i data-toggle="modal" data-target="#sendEmailModal" class="icon-size-css icon-envelope"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-phone"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-direction"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-screen-smartphone"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-user"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-dislike" data-toggle="modal" data-target="#refusalToPayModal"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-like"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-speech"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-clock" data-toggle="modal" data-target="#reminderModal"></i></div>
                    <div class="col-1"><i class="icon-size-css icon-note"></i></div>
                    {{-- <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card bg-dark text-white border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <p style="border-bottom: 1px solid;"> User detail</p>
                                </div>
                                <table class="table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>name:</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact:</td>
                                            <td>3298932889</td>
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
                    </div> --}}
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Debtor</h4>
                        <div class="row">
                            <div class="col-md-8 border-right">
                                <table class="table-borderless debtor-detail-table" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>Id Number</td>
                                            <td>{{$debtors->id_number}}</td>
                                            <td>Surname</td>
                                            <td>{{$debtors->surname}}</td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td>{{$debtors->first_name}}</td>
                                            <td>Second Name</td>
                                            <td>{{$debtors->second_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$debtors->email}}</td>
                                            <td>Contact No</td>
                                            <td>{{$debtors->contact_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Initial</td>
                                            <td>{{$debtors->initial}}</td>
                                            <td>Title</td>
                                            <td>{{$debtors->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Reference</td>
                                            <td>{{$debtors->client_reference}}</td>
                                            <td>Client Division</td>
                                            <td>{{$debtors->client_division}}</td>
                                        </tr>
                                        <tr>
                                            <td>Old Client Reference</td>
                                            <td>{{$debtors->old_client_reference}}</td>
                                            <td>Client Profit Account</td>
                                            <td>{{$debtors->client_profile_account}}</td>
                                        </tr>
                                        <tr>
                                            <td>Account Type</td>
                                            <td>{{$debtors->account_type}}</td>
                                            <td>Amount</td>
                                            <td>{{$debtors->amount}}</td>
                                        </tr>
                                        <tr>
                                            <td>Debtor First Name</td>
                                            <td>{{$debtors->debtor_first_name}}</td>
                                            <td>Debtor Second Name</td>
                                            <td>{{$debtors->debtor_second_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Debtor Surname</td>
                                            <td>{{$debtors->debtor_surname}}</td>
                                            <td>Debtor Initial</td>
                                            <td>{{$debtors->debtor_initial}}</td>
                                        </tr>
                                        <tr>
                                            <td>Debtor Title</td>
                                            <td>{{$debtors->debtor_title}}</td>
                                            <td>Home Phone 1</td>
                                            <td>{{$debtors->home_phone1}}</td>
                                        </tr>
                                        <tr>
                                            <td>Home Phone 2</td>
                                            <td>{{$debtors->home_phone2}}</td>
                                            <td>Cell Phone 1</td>
                                            <td>{{$debtors->cell_phone1}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cell Phone 2</td>
                                            <td>{{$debtors->cell_phone2}}</td>
                                            <td>Interest Rate</td>
                                            <td>{{$debtors->interest_rate}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <h3>Account Info</h3>
                                <!-- {{var_dump($debtors)}} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @include('componant.footer')
        </div>
        <div class="modal" id="sendEmailModal">
            <div class="modal-dialog my-model-size">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Send Email</h4>
                    </div>
                    <div class="modal-body">
                        <h4 class="mb-4">Send an Email</h4>
                        <form action="/">
                            <div class="row">
                                <div class="col-md-8 border-right">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Recipient address:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="radio" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label" for="mySwitch">Normal Mail</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="radio" id="mySwitch" name="darkmode" value="no">
                                                <label class="form-check-label" for="mySwitch">Centralized Mail</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Template:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select class="form-control" name="template" required>
                                                    <option value="1">template 1</option>    
                                                    <option value="2">template 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Subject:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Message:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <input type="text" class="form-control" name="message" id="message" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h4>Attachment</h4>
                                        <label>Upload Attachment(pdf)</label>
                                        <input type="file" class="form-control" name="attachment" id="attachment" required>
                                    </div>
                                </div>
                            </div>
                            @csrf
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
        </div>
        <div class="modal" id="refusalToPayModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Refusal To Pay</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/">
                            <div class="form-group">
                                <label>Comment:</label>
                                <textarea name="comment" id="comment" class="form-control" cols="40" rows="4" required></textarea>
                            </div>
                            @csrf
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="reminderModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Reminder</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md4">
                                    <div class="form-group">
                                        <label>Reminder Date:</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md4">
                                    <div class="form-group">
                                        <label>Reminder Time:</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message:</label>
                                <input type="text" class="form-control" placeholder="Message">
                            </div>
                            @csrf
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
        </div>
    </div>
    <style>
        .debtor-detail-table td{
            padding: 5px;
        }
    </style>

@endsection
@section('script')
    <script src="{{ url('js/data-table.js') }}"></script>
@endsection

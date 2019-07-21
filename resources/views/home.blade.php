@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <?php $user = Auth::user() ?>
                    Welcome, {{$user->name}}!
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                            <div class="col-4">
                              <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">My Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-payments-list" data-toggle="list" href="#list-payments" role="tab" aria-controls="payments">My Payments</a>
                                <a class="list-group-item list-group-item-action" id="list-events-list" data-toggle="list" href="#list-events" role="tab" aria-controls="events">My Events</a>
                              </div>
                            </div>
                            <div class="col-8">
                              <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                        <table border = "1|1" class = "user-profile">
                                                <tr>
                                                    <td> Name: </td>
                                                    <td>  {{$user->name}}
                                                </tr>
                                                <tr>
                                                    <td> Email: </td>
                                                    <td>  {{$user->email}}
                                                </tr>
                                                <tr>
                                                    <td> Phone Number: </td>
                                                    <td>  {{$user->phone}}
                                                </tr>
                                                <tr>
                                                    <td> Program: </td>
                                                    <td>  {{$user->program}}
                                                </tr>
                                                <tr>
                                                    <td>Disability: </td>
                                                    <td>  {{$user->disability}} </td>
                                                </tr>
                                                <tr>
                                                    <td>Agreed to Terms & Conditions: </td>
                                                    <td> Yes, on registration. View Terms again: <a href="{{ asset('files/ORCATermsandConditions.pdf') }}" target="_blank">Terms & Conditions</a></td>
                                                </tr>
                                        </table>
                                </div>
                                <div class="tab-pane fade" id="list-payments" role="tabpanel" aria-labelledby="list-payments-list"> You have no payment history at this time</div>
                                <div class="tab-pane fade" id="list-events" role="tabpanel" aria-labelledby="list-events-list"> You have no upcoming events at this time. </div>
                              </div>
                            </div>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

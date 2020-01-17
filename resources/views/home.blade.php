@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 0;">
                <div class="card-header" style="background-color:#a8e063;border: 0;color:#2C3E50;">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <br>
                        @if(Auth::user()->role =='1')
                        <div class="row">
                            <div class="col">
                                <a href="/manage_user" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/2405/2405380.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>Manage User</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/manage_payment" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/svg/327/327013.svg" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Manage Payment</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="/add_trainer" style="text-decoration: none">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/858/858137.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>Assign Trainer</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/admin_view_appointment" style="text-decoration: none">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/858/858137.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>View Appoinments</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @endif

                        @if((Auth::user()->role =='0') && (Auth::user()->status =='1'))
                        <div class="row">
                            <div class="col">
                                <a href="/meal_view_all" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/992/992747.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>View Meal Details</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/pay_bill" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/svg/327/327013.svg" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Payment History</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="/workout_view_all" style="text-decoration: none">
                                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/2307/2307879.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>View Workout Details</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/bmi_all" style="text-decoration: none;">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://image.flaticon.com/icons/png/512/2307/2307885.png" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Update BMI</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col">
                                    <a href="/manage_appointment" style="text-decoration: none">
                                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                            <div class="card-body">
                                                <center>
                                                    <h2 class="card-title">
                                                        <img src="https://image.flaticon.com/icons/png/512/934/premium/934663.png" style="width:50px;height:50px;">
                                                    </h2>
                                                    <p>Manage Appointment</p>
                                                </center>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/fitbit" style="text-decoration: none">
                                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                            <div class="card-body">
                                                <center>
                                                    <h2 class="card-title">
                                                        <img src="https://image.flaticon.com/icons/svg/763/763812.svg" style="width:50px;height:50px;">
                                                    </h2>
                                                    <p>FitBit Details</p>
                                                </center>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif

                        @if((Auth::user()->role =='2') && (Auth::user()->status =='1'))
                      <div class="row">
                          <div class="col">
                              <a href="/manage_trainee" style="text-decoration: none">
                                  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                      <div class="card-body">
                                          <center>
                                              <h2 class="card-title">
                                                  <img src="https://image.flaticon.com/icons/png/512/858/858137.png" style="width:50px;height:50px;">
                                                  </h2>
                                              <p>Manage Trainee</p>
                                          </center>

                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="col">
                              <a href="/appointment_all" style="text-decoration: none;">
                                  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                      <div class="card-body">
                                          <center>
                                              <h2 class="card-title">
                                                  <img src="https://image.flaticon.com/icons/png/512/934/premium/934663.png" style="width:50px;height:50px;">
                                              </h2>
                                              <p>Manage Appointment</p>
                                          </center>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      @endif

                        @if((Auth::user()->role =='0') && (Auth::user()->status =='0'))
                        <center>
                           <p style="color:red;">Yor Account has beeb suspended.Contact admin@gmail.com for futher information </p>
                        </center>
                        @endif
                </div>
                <div class="card-footer" style="background-color:#a8e063;border: 0;height: 1px;">

                </div>
            </div>
        </div>

</div>
@endsection

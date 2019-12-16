@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Dashboard</button></a>
                    </div>

                    <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      @if (session('error'))
                          <div class="alert alert-danger" role="alert">
                              {{ session('error') }}
                          </div>
                      @endif
                        <?php
                        $get_unit = DB::table('assigns')->where('trainer_id',Auth::id())->orderByRaw('id DESC')->get();
                        ?>

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Addres</th>
                                <th>BMI</th>
                                <th width="280px">Actions</th>
                            </tr>
                            @foreach ($get_unit as $app)
                                <tr>
                                  <?php
                                  $assign_status = DB::table('users')->where('id', $app->user_id)->first();
                                  ?>
                                    <td>{{ $assign_status->name }}</td>
                                    <td>{{ $assign_status->email }}</td>
                                    <td>{{ $assign_status->phone }}</td>
                                    <td>{{ $assign_status->address }}</td>
                                    <?php
                                    $bmi = DB::table('bmis')->where('user_id', $app->user_id)->first();
                                    ?>
                                    <td>
                                      @if($bmi!=Null)
                                          {{$bmi->bmi}}
                                      @endif
                                      @if($bmi==Null)
                                        --
                                      @endif
                                    </td>
                                    <td>

                                        <a class="btn btn-primary btn-sm" href="/meal_details?id={{$app->user_id}}" style="margin-bottom:5px;">View Meal Details</a>
                                        <a class="btn btn-success btn-sm" href="/workout_details?id={{$app->user_id}}">View Workout Details</a>


                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

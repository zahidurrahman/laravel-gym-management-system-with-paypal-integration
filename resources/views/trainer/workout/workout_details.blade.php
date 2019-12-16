@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/manage_trainee"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Back</button></a>
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
                          $user_id=$_GET['id'];
                          $get_unit = DB::table('workouts')->where('user_id',$user_id)->orderByRaw('id DESC')->get();
                        ?>
                        <a class="btn btn-success btn-sm" style="float:right;" href="/add_workout?id={{$user_id}}">Add New Workout</a>
                        <br>  <br>
                        <table class="table">
                            <tr>
                                <th>Day Number</th>
                                <th width="280px">Actions</th>
                            </tr>
                            @foreach ($get_unit as $app)
                                <tr>

                                    <td>{{ $app->name_day }}</td>
                                    <td>

                                        <a class="btn btn-info btn-sm" href="/view_workout?id={{$app->id}}">View</a>
                                        <a class="btn btn-danger btn-sm" href="{{'/del_workout/'.$app->id}}">Delete</a>
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

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
                        $get_unit = DB::table('users')->where('role',0)->orderByRaw('id DESC')->get();
                        ?>

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Assign Status</th>
                                <th>Traniner Name</th>
                                <th width="280px">Actions</th>
                            </tr>
                            @foreach ($get_unit as $app)
                                <tr>
                                    <td>{{ $app->name }}</td>
                                    <td>{{ $app->email }}</td>
                                    <td>{{ $app->phone }}</td>
                                    <td>{{ $app->address }}</td>
                                    <td>
                                        @if($app->role=='1')
                                            <button class="btn btn-success btn-sm">Admin</button>
                                        @endif
                                        @if($app->role=='0')
                                             <button class="btn btn-primary btn-sm">GYM Member</button>
                                         @endif
                                         @if($app->role=='2')
                                              <button class="btn btn-info btn-sm">GYM Trainer</button>
                                          @endif
                                    </td>
                                    <td>
                                      <?php
                                      $assign_status = DB::table('assigns')->where('user_id', $app->id)->first();
                                      ?>
                                      @if($assign_status==Null)
                                      <a class="btn btn-danger btn-sm">Not Assigned</a>
                                      @endif
                                      @if($assign_status!=Null)
                                      <a class="btn btn-success btn-sm">Assigned</a>
                                      @endif

                                    </td>
                                    <td>
                                      <?php
                                      $trainer = DB::table('assigns')->where('user_id', $app->id)->first();
                                      ?>
                                      @if($assign_status==Null)
                                      <a>Not found</a>
                                      @endif
                                      @if($assign_status!=Null)
                                        <?php
                                        $trainer_details = DB::table('users')->where('id', $trainer->trainer_id)->first();
                                        ?>
                                        <a class="btn btn-success btn-sm">{{$trainer_details->name}}</a>
                                      @endif

                                    </td>
                                    <td>
                                      @if($assign_status!=Null)
                                        <a class="btn btn-info btn-sm" href="{{'/edit_trainer?id='.$trainer->id}}">Edit Trainer</a>
                                      @endif
                                      @if($assign_status==Null)
                                        <a class="btn btn-warning btn-sm" href="{{'/assign_trainer?id='.$app->id}}">Add Trainer</a>
                                      @endif

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

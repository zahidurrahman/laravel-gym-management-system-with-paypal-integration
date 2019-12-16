@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Back</button></a>
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
                          $get_unit = DB::table('workouts')->where('user_id',Auth::id())->orderByRaw('id DESC')->get();
                        ?>
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

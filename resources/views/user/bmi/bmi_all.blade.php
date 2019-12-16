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
                          $get_unit = DB::table('bmis')->where('user_id',Auth::id())->orderByRaw('id DESC')->get();
                        ?>

                        <a class="btn btn-success btn-sm" style="float:right;" href="/add_bmi">Add BMI</a>
                        <br>  <br>
                        <table class="table">
                            <tr>
                                <th>Wight</th>
                                <th>Height</th>
                                <th>BMI</th>
                                <th width="280px">Actions</th>
                            </tr>
                            @foreach ($get_unit as $app)
                                <tr>

                                    <td>{{ $app->weight}}</td>
                                    <td>{{ $app->height}}</td>
                                    <td>{{ $app->bmi}}</td>
                                    <td>

                                        <a class="btn btn-info btn-sm" href="/edit_bmi?id={{$app->id}}">Edit</a>

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

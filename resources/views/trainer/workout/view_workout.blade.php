@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ URL::previous() }}"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Back</button></a>
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
                       $id=$_GET['id'];
                       $get_unit = DB::table('workouts')->where('id',$id)->first();
                       ?>
                      <h1>{{$get_unit->name_day}}</h1>
                      <h3>Details</h3>
                      <?php echo $get_unit->workout_details;  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

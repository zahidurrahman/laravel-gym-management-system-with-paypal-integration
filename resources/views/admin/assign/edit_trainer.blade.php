@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 0;">
                <div class="card-header" style="background-color:#a8e063;border: 0;color:#2C3E50;">
                  <div class="card-header">
                      <a href="/add_trainer"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Dashboard</button></a>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <br>
                        <form method="POST" action="{{ route('edit_trainer') }}">
                          <?php
                            $id=$_GET['id'];
                            $trainer = DB::table('assigns')->where('id',$id)->first();
                            //get the trainer name
                            $trainer_details = DB::table('users')->where('id', $trainer->trainer_id)->first();

                           ?>
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}"/>
                            <div class="form-group row">
                                   <label for="email" class="col-md-4 col-form-label text-md-right">Select Trainer</label>
                                   <div class="col-md-6">
                                     <select class="form-control"name="trainer_id"  required>
                                          <option  selected value="{{$trainer_details->id}}">
                                              {{$trainer_details->name}}
                                          </option>
                                          <?php
                                          $get_unit = DB::table('users')->where('role',2)->get();
                                          ?>
                                         @foreach($get_unit as $unit)
                                          <option value="{{$unit->id}}">
                                            {{$unit->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <?php
                                            $trainer_count = DB::table('assigns')->where('trainer_id',$unit->id)->count();
                                            ?>
                                            @if($trainer_count==null)
                                            <span>Number of Trainee  =   0</span>
                                            @endif
                                            @if($trainer_count!=null)
                                                <span>Number of Trainee  = {{$trainer_count}}</span>
                                            @endif

                                          </option>
                                          @endforeach

                                      </select>
                                   </div>
                             </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit Trainer
                                    </button>
                                </div>
                            </div>
                        </form>

                </div>
                <div class="card-footer" style="background-color:#a8e063;border: 0;height: 1px;">

                </div>
            </div>
        </div>

</div>
@endsection

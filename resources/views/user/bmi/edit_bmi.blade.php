@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <a href="/bmi_all"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Back</button></a>
                </div>

                <div class="card-body">
                   <?php
                      $id=$_GET['id'];
                      $get_unit = DB::table('bmis')->where('id',$id)->first();
                   ?>
                    <form method="POST" action="{{ route('edit_bmi') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}"/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Weight[KG]</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step=any class="form-control @error('name') is-invalid @enderror" name="weight" value="{{$get_unit->weight}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Height[Meter]</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step=any class="form-control @error('name') is-invalid @enderror" name="height" value="{{$get_unit->height}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit BMI
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

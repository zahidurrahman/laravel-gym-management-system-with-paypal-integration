@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add BMI</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add_bmi') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Weight[KG]</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step=any class="form-control @error('name') is-invalid @enderror" name="weight" value="{{ old('weight') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Height[Meter]</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step=any class="form-control @error('name') is-invalid @enderror" name="height" value="{{ old('weight') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add BMI
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

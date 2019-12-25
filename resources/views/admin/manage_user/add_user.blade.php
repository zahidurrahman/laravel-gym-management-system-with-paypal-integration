@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/manage_user"><button class="btn btn-warning"><i class="fa fa-arrow-left" ></i>&nbsp;Dashboard</button></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('add_user') }}">
                                @csrf
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control"name="role" id="first" required>
                                    <option disabled selected value="">--Select--</option>
                                    <option value='1'>Admin</option>
                                    <option value='0'>User</option>
                                    <option value='2'>Trainer</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add User" class="btn btn-primary">
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

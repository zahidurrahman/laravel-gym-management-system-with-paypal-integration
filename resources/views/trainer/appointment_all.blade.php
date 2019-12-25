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
                        $get_unit = DB::table('appoinments')->where('trainer_id',Auth::id())->orderByRaw('id DESC')->get();
                        ?>

                        {{--<a class="btn btn-success btn-sm" style="float:right;" href="/add_appointment">Add New Appointment</a>--}}
                        <br>  <br>
                        <table class="table">
                            <tr>
                                <th>Appointment Date</th>
                                <th>Status</th>
                                <th>Notes</th>
                                <th width="280px">Actions</th>
                            </tr>
                            @foreach ($get_unit as $app)
                                <tr>

                                    <td>{{ $app->d_t}}</td>
                                    <td>
                                        @if($app->status=='1')
                                            <button class="btn btn-success btn-sm">Approved</button>
                                        @endif
                                        @if($app->status=='0')
                                            <button class="btn btn-warning btn-sm">Wait For Approval</button>
                                        @endif

                                    </td>
                                    <td>{{ $app->notes}}</td>
                                    <td>
                                        @if($app->status=='1')
                                            <button class="btn btn-success btn-sm">Already Approved</button>
                                        @endif
                                        @if($app->status=='0')
                                              <a class="btn btn-danger btn-sm" href="/approve_appointment?id={{$app->id}}">Approve IT</a>
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

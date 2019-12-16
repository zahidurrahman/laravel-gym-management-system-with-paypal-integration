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
                        <?php
//                        $get_unit = DB::table('mypays')
//                            ->get();
                        ?>

                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>User Email</th>
                                <th>Transaction ID</th>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Pay date</th>
                                <th>Expire date</th>

                            </tr>

                            @foreach ($get_unit as $app)
                                <tr>
                                    <td>{{ $app->owner->name }}</td>
                                    <td>{{ $app->owner->email }}</td>
                                    <td>{{ $app->transaction_id }}</td>
                                    <td>{{ $app->currency_code }}</td>
                                    <td>{{ $app->amount }}</td>
                                    <td>

                                        <button class="btn btn-success btn-sm">{{ $app->payment_status }}</button>

                                    </td>
                                    <td>{{ $app->payment_date }}</td>
                                    <td>

                                        <button class="btn btn-danger btn-sm">{{ $app->expire_date }}</button>

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

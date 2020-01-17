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
                      <iframe src="http://localhost/fitbit/index.php" style="width:100%;height:1533px;" frameBorder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

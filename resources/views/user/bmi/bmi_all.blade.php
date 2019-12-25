@extends('layouts.app')
<style>

    #report_content {
        width: 900px;
        margin: 0 auto;
        /*    border: 1px solid red;*/
    }
    .factor_container {
        padding: 0 0 30px 0 !important;
        width: 100%;
        float: left;
    }
    .factor_name{
        width: 100%;
        float: left;
        font-size: 24px;
        font-weight: 600;
    }
    .factor_desc {
        width: 100%;
        float: left;
        margin-bottom: 0;
    }

    .sum_sub_heading {
        width: 100%;
        text-align: center;
        margin: 0 0 20px 0;
    }
    .sum_factor_container {
        padding: 0 0 30px 0 !important;
        width: 100%;
        float: left;
    }
    .sum_factor_name{
        width: 100%;
        float: left;
        /*    font-size: 24px; */
        /*    font-weight: 600;*/
    }
    .sum_factor_desc {
        width: 100%;
        float: left;
        margin-bottom: 0;
    }



    .score_text {
        text-align: left;
        margin-top: 20px;
        float:left;
        width: 100%;
        padding-bottom: 10px;
    }
    .score {
        color: #CC0000;
        font-weight: bold;
    }
    .score_descriptor {
        text-align: left;
        margin-top: 10px;
    }
    .downarrow{
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7px 7.5px 0 7.5px;
        border-color: #F6881F transparent transparent transparent;
    }
    .arrow_upperpart{
        background-color: #F6881F !important;
        height: 30px;
        margin-left: 0;
        width: 14px;
    }
    .graph_container{
        width: 100%;
        margin: 0 auto;
        height: 25px;
        position: relative;
        z-index: 0;
        float:left;
    }
    .graph_container_text{
        width: 100%;
        margin: 0 auto;
        height: 25px;
        position: relative;
        z-index: 0;
        font-size: 12px;
        float:left;
    }
    .arrow_holder {
        z-index: 9999;
        width: 100%;
        margin: 0 auto;
        float: left;
    }
    .arrow_container{
        position: relative;
        z-index: 9999;
        top:25px;
        width: 16px;
        margin-left: -8px !important;
    }

    .left_0{
        float:left;
        width:16%;
        height: 25px;
        background-color: #F50636 !important;
    }
    .left_10{
        float:left;
        width:2.5%;
        height: 25px;
        background-color: #EFF20B  !important;
    }
    .left_20{
        float:left;
        width:6.5%;
        height: 25px;
        background-color: #58D68D !important;
    }
    .left_30{
        float:left;
        width:5%;
        height: 25px;
        background-color: #F2580B !important;
    }
    .left_40{
        float:left;
        width:5%;
        height: 25px;
        background-color: #A30CB5 !important;
    }
    .left_50{
        float:left;
        width:5%;
        height: 25px;
        background-color: #B5940C   !important;
    }
    .left_60{
        float:left;
        width:30%;
        height: 25px;
        background-color: #3D67B1 !important;
    }
    .left_70{
        float:left;
        width:10%;
        height: 25px;
        background-color: #385FA5 !important;
    }
    .left_80{
        float:left;
        width:10%;
        height: 25px;
        background-color: #325696 !important;
    }
    .left_90{
        float:left;
        width:10%;
        height: 25px;
        background-color: #2B4B84 !important;
    }

    .left_0_text{
        float:left;
        width:9%;
        text-align: left;
    }
    .left_10_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_20_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_30_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_40_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_50_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_60_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_70_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_80_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_90_text{
        float:left;
        width:10%;
        text-align: left;
    }
    .left_100_text{
        float:left;
        margin-left: -2px;
        width: 1px;
        height: 25px;
    }

</style>
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
                          $app = DB::table('bmis')->where('user_id',Auth::id())->first();
                        ?>

                        <a class="btn btn-success btn-sm" style="float:right;" href="/add_bmi">Add BMI</a>
                        <br>  <br>
                        <table class="table">
                            <tr>
                                <th>Wight</th>
                                <th>Height</th>
                                <th>BMI Kg/M<sup>2</sup></th>
                                <th width="280px">Actions</th>
                            </tr>

                                <tr>
                                    @if($app!=null)
                                    <td>{{ $app->weight}}</td>
                                    <td>{{ $app->height}}</td>
                                    <td>
                                        {{ $app->bmi}}
                                        @if($app->bmi<16)
                                            <span style="color:red">Severe Thickness</span>
                                        @endif
                                        @if($app->bmi>=16 &&$app->bmi<18.5 )
                                            <span style="color:red">Moderate Thickness</span>
                                        @endif
                                        @if($app->bmi>=18.5&&$app->bmi<=25)
                                            <span style="color:green">Normal</span>
                                        @endif
                                        @if($app->bmi>25&&$app->bmi<=30)
                                            <span style="color:red">Overweight</span>
                                        @endif
                                        @if($app->bmi>30&&$app->bmi<=35)
                                            <span style="color:red">Obese Class I</span>
                                        @endif
                                        @if($app->bmi>35&&$app->bmi<=40)
                                            <span style="color:red">Obese Class II</span>
                                        @endif
                                        @if($app->bmi>40)
                                            <span style="color:red">Obese Class III</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="/edit_bmi?id={{$app->id}}">Edit</a>
                                    </td>
                                </tr>
                                @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($app!=null)
        <div class="container-fluid">
            <br>
            <h4>BMI Report</h4>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:red;stroke-width:1;stroke:red;" />

            </svg>
            <span>Severe Thickness</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#EFF20B;stroke-width:1;stroke:#EFF20B;" />

            </svg>
            <span>Moderate Thickness</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#58D68D;stroke-width:1;stroke:#58D68D;" />

            </svg>
            <span>Normal</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#F2580B;stroke-width:1;stroke:#F2580B;" />

            </svg>
            <span>OverWeight</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#A30CB5;stroke-width:1;stroke:#A30CB5;" />

            </svg>
            <span>Obese Class I</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#B5940C;stroke-width:1;stroke:#B5940C;" />

            </svg>
            <span>Obese Class II</span>
            <svg width="20" height="20">
                <rect width="20" height="20" style="fill:#385FA5;stroke-width:1;stroke:#385FA5;" />

            </svg>
            <span>Obese Class III</span>
            <br><br>
            <div class="row">
                <div class="col-sm-12" style="background-color:lavender; overflow-x: scroll;">

                    <div id="report_content">


                        <div class="page_content">

                            <div class="factor_container">


                                <div class="arrow_holder">
                                    <div class="arrow_container" style="left:{{ $app->bmi}}%;">
                                        <div class="arrow_upperpart"></div>
                                        <div class="downarrow"></div>
                                    </div>
                                </div>

                                <div class="graph_container">
                                    <div class="left_0"></div>
                                    <div class="left_10"></div>
                                    <div class="left_20"></div>
                                    <div class="left_30"></div>
                                    <div class="left_40"></div>
                                    <div class="left_50"></div>
                                    <div class="left_60"></div>
                                    <div class="left_70"></div>
                                    <div class="left_80"></div>
                                    <div class="left_90"></div>
                                </div>

                                <div class="graph_container_text">
                                    <div class="left_0_text">0%</div>
                                    <div class="left_10_text">10%</div>
                                    <div class="left_20_text">20%</div>
                                    <div class="left_30_text">30%</div>
                                    <div class="left_40_text">40%</div>
                                    <div class="left_50_text">50%</div>
                                    <div class="left_60_text">60%</div>
                                    <div class="left_70_text">70%</div>
                                    <div class="left_80_text">80%</div>
                                    <div class="left_90_text">90%</div>
                                    <div class="left_100_text">100%</div>
                                </div>


                            </div>

                        </div>



                    </div>
                    <br><br><br><br><br><br>
                    <ul>
                        <li>Healthy BMI range: 18.5 kg/m2 - 25 kg/m2</li>
                        <li>Healthy weight for the height: 59.9 kgs - 81.0 kgs</li>
                        <li>Ponderal Index: 11.1 kg/m3</li>
                    </ul>
                </div>

            </div>

        </div>
        @endif
    </div>
@endsection

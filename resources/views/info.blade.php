<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title></title>
    <style type="text/css">
        .status_0{
            display: inline-block;
            border-radius: 50%;
            width: 1em;
            height: 1em;
            background-color: red;
        }

        .status_1{
            display: inline-block;
            border-radius: 50%;
            width: 1em;
            height: 1em;
            background-color: green; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row alert alert-white mt-3">
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('image/logo.png') }}">
            </div>
            <div class="col-sm-12 col-md-3 ml-auto" id="now">
                
            </div>
        </div>
        <div class="row alert alert-primary ">
            <div class="col-sm-12 col-md-6">溫度：<span id="temp"></span>°C</div>
            <div class="col-sm-12 col-md-6">濕度：<span id="humidity"></span>%RH</div>
        </div>

        <div class="row alert alert-secondary">
            <div class="col-md-4 col-sm-12">{{ config('machine.datas.0') }}：<span id='D0'></span></div>
            <div class="col-md-4 col-sm-12">{{ config('machine.datas.1') }}：<span id='D1'></span></div>
            <div class="col-md-4 col-sm-12">{{ config('machine.datas.2') }}：<span id='D2'></span></div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S9"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.9') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S25"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.25') }}</div>
            </div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S10"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.10') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S26"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.26') }}</div>
            </div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S11"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.11') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S27"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.27') }}</div>
            </div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S12"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.12') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S28"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.28') }}</div>
            </div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S13"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.13') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S29"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.29') }}</div>
            </div>
        </div>
        <div class="row alert alert-success">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_0 align-self-center" id="S14"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.14') }}</div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="status_1 align-self-center" id="S30"></div>&nbsp;&nbsp;&nbsp;
                <div>{{ config('machine.status.30') }}</div>
            </div>
        </div>
        <div class="row alert alert-danger">
            
        </div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tea.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="{{ asset('js/jquery.knob.min.js') }}"></script>
</body>
</html>
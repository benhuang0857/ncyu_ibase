$(document).ready(function(){
    time();
    getData();
    getStatus();
    getAlert();
    getTemp();
    getBerry();
    char();
    $('.knob').knob({'min':-7.0, 'max':7.0});
});

function time(){
    $('#now').text(new Date().toLocaleString());
    setTimeout("time()", 1000);
}

function getData() {
    $.ajax({
        url:  "api/getData",
        method: 'GET',
        dataType: "json",
        success: function(json){
            $.each(json, function(key, object){
                $('#'+Object.keys(object)[0]).text(Object.values(object)[0]);
            });
        }
    });
    setTimeout('getData()', 1000);
}

function getAlert() {
    $.ajax({
        url:  "api/getAlert",
        method: 'GET',
        dataType: "json",
        success: function(json){
            var string = '';
            $('.alert-danger').text('');
            $.each(json, function(key, object){
                string = '<div class="col-md-6 col-sm-12">' + Object.values(object)[0] + '</div>';
                $('.alert-danger').append(string);
            });
        }
    });
    setTimeout('getAlert()', 1000);
}

function getStatus() {
    $.ajax({
        url:  "api/getStatus",
        method: 'GET',
        dataType: "json",
        success: function(json){
            $.each(json, function(key, object){
                $('#'+Object.keys(object)[0]).removeClass().addClass('align-self-center').addClass(Object.values(object)[0]);
            });
        }
    });
    setTimeout('getStatus()', 1000);
}

function getTemp() {
    $.ajax({
        url: 'api/getTemp',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            $('#temp').text(json.records.locations[0].location[1].weatherElement[0].time[0].elementValue[0].value);
            $('#humidity').text(json.records.locations[0].location[1].weatherElement[1].time[0].elementValue[0].value);
        }
    });
    setTimeout('getTemp()', 3 * 60 * 60 * 1000);
}

function getBerry() {
    $.ajax({
        url: 'api/getBerry',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var temperature = JSON.parse(json['temperature']);
            var humidity = JSON.parse(json['humidity']);
            var acid = JSON.parse(json['acid']);
            for(var i=0; i<=24; i++)
            {
                $('#berry-temp'+i).text(temperature[i]);
                $('#berry-humidity'+i).text(humidity[i]);
            }

            for(var i=0; i<=1; i++)
            {
                $('#acid'+i).val(acid[i]);
            }
        }
    });
    setTimeout('getBerry()', 3 * 60 * 60 * 1000);
}

function char() {

    $.ajax({
        url: 'api/getBerryConductance',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            // Sales graph chart
            var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
            // $('#revenue-chart').get(0).getContext('2d');

            var salesGraphChartData = {
                labels: [json[4]['created_at'], json[3]['created_at'], json[2]['created_at'], json[1]['created_at'], json[0]['created_at']],
                datasets: [
                    {
                    label: '導電度',
                    fill: false,
                    borderWidth: 2,
                    lineTension: 0,
                    spanGaps: true,
                    borderColor: '#d4edda',
                    pointRadius: 3,
                    pointHoverRadius: 7,
                    pointColor: '#d4edda',
                    pointBackgroundColor: '#d4edda',
                    data: [json[4]['conductance'], json[2]['conductance'], json[2]['conductance'], json[1]['conductance'], json[0]['conductance']]
                    }
                ]
            }

            var salesGraphChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                    ticks: {
                        fontColor: '#000000'
                    },
                    gridLines: {
                        display: false,
                        color: '#000000',
                        drawBorder: false
                    }
                    }],
                    yAxes: [{
                    ticks: {
                        stepSize: 5000,
                        fontColor: '#efefef'
                    },
                    gridLines: {
                        display: true,
                        color: '#efefef',
                        drawBorder: false
                    }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            // eslint-disable-next-line no-unused-vars
            var salesGraphChart = new Chart(salesGraphChartCanvas, {
                type: 'line',
                data: salesGraphChartData,
                options: salesGraphChartOptions
            })
        }
    });
    setTimeout('char()',100000);
}
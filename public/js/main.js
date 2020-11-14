$(document).ready(function(){
    time();
    getData();
    getStatus();
    getAlert();
    getTemp();
    getBerry();
    sunshinechar();
    environmentchar();
    phchar();
    $('.knob').knob();
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
            var conductance = json['conductance'];
            
            /*
            *溫度濕度
            */
            $('#apDiv27').text(temperature[0]);
            $('#apDiv28').text(humidity[0]);

            $('#apDiv29').text(temperature[1]);
            $('#apDiv30').text(humidity[1]);

            $('#apDiv32').text(temperature[2]);
            $('#apDiv31').text(humidity[2]);

            $('#apDiv55').text(temperature[3]);
            $('#apDiv56').text(humidity[3]);

            $('#apDiv51').text(temperature[4]);
            $('#apDiv52').text(humidity[4]);

            $('#apDiv53').text(temperature[5]);
            $('#apDiv54').text(humidity[5]);

            $('#apDiv39').text(temperature[6]);
            $('#apDiv40').text(humidity[6]);

            $('#apDiv41').text(temperature[7]);
            $('#apDiv42').text(humidity[7]);

            $('#apDiv43').text(temperature[8]);
            $('#apDiv44').text(humidity[8]);

            $('#apDiv99').text(temperature[9]);
            $('#apDiv100').text(humidity[9]);

            $('#apDiv101').text(temperature[10]);
            $('#apDiv102').text(humidity[10]);

            $('#apDiv103').text(temperature[10]);
            $('#apDiv104').text(humidity[10]);

            $('#apDiv81').text(temperature[11]);
            $('#apDiv82').text(humidity[11]);

            $('#apDiv83').text(temperature[12]);
            $('#apDiv84').text(humidity[12]);

            $('#apDiv85').text(temperature[13]);
            $('#apDiv86').text(humidity[13]);

            $('#apDiv9').text(temperature[14]);
            $('#apDiv10').text(humidity[14]);

            $('#apDiv11').text(temperature[15]);
            $('#apDiv12').text(humidity[15]);

            $('#apDiv13').text(temperature[16]);
            $('#apDiv14').text(humidity[16]);

            $('#apDiv21').text(temperature[17]);
            $('#apDiv22').text(humidity[17]);

            $('#apDiv23').text(temperature[18]);
            $('#apDiv24').text(humidity[18]);

            $('#apDiv25').text(temperature[19]);
            $('#apDiv26').text(humidity[19]);

            $('#apDiv63').text(temperature[20]);
            $('#apDiv64').text(humidity[20]);

            $('#apDiv65').text(temperature[21]);
            $('#apDiv66').text(humidity[21]);

            $('#apDiv67').text(temperature[22]);
            $('#apDiv68').text(humidity[22]);


            $('#conductance').val(conductance);
            $('#apDiv97').text(conductance);


            $("#apDiv94").css('background-image', 'url("/images/berry/farm01.png")');
            $("#apDiv94").css('background-size', 'cover');

            $("#apDiv95").css('background-image', 'url("/images/berry/farm02.png")');
            $("#apDiv95").css('background-size', 'cover');
        }
    });
    setTimeout('getBerry()', 10000);
}

function sunshinechar() {

    $.ajax({
        url: 'api/getBerrySunshine',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var sunshine4 = JSON.parse(json[4]['sunshine']);
            var sunshine3 = JSON.parse(json[3]['sunshine']);
            var sunshine2 = JSON.parse(json[2]['sunshine']);
            var sunshine1 = JSON.parse(json[1]['sunshine']);
            var sunshine0 = JSON.parse(json[0]['sunshine']);
            new Chart(document.getElementById("sunshine-line-chart"), {
                type: 'line',
                data: {
                  labels: [01, 02, 03, 04 , 05],
                  datasets: [ { 
                      data: [sunshine4[0],sunshine3[0],sunshine2[0],sunshine1[0],sunshine0[0]],
                      label: "溫室1",
                      borderColor: "#3cba9f",
                      fill: false
                    }, { 
                      data: [sunshine4[1],sunshine3[1],sunshine2[1],sunshine1[1],sunshine0[1]],
                      label: "溫室2",
                      borderColor: "#e8c3b9",
                      fill: false
                    }, { 
                      data: [sunshine4[2],sunshine3[2],sunshine2[2],sunshine1[2],sunshine0[2]],
                      label: "溫室3",
                      borderColor: "#c45850",
                      fill: false
                    }
                  ]
                }
              });
        }
    });
    setTimeout('sunshinechar()',60000);

}

function environmentchar() {

    $.ajax({
        url: 'api/getBerrySunshine',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            new Chart(document.getElementById("environment-line-chart"), {
                type: 'line',
                data: {
                  labels: [01, 02, 03, 04 , 05],
                  datasets: [ { 
                      data: [json[4]['environment'],json[2]['environment'],json[2]['environment'],json[1]['environment'],json[0]['environment']],
                      label: "環境溫度",
                      borderColor: "#f38426",
                      fill: false
                    }
                  ]
                }
              });
        }
    });
    setTimeout('environmentchar()',60000);

}

function phchar() {

    $.ajax({
        url: 'api/getBerrySunshine',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var ph4 = JSON.parse(json[4]['acid']);
            var ph3 = JSON.parse(json[3]['acid']);
            var ph2 = JSON.parse(json[2]['acid']);
            var ph1 = JSON.parse(json[1]['acid']);
            var ph0 = JSON.parse(json[0]['acid']);
            new Chart(document.getElementById("ph-line-chart"), {
                type: 'line',
                data: {
                  labels: [01, 02, 03, 04 , 05],
                  datasets: [ { 
                      data: [ph4[0],ph3[0],ph2[0],ph1[0],ph0[0]],
                      label: "PH01",
                      borderColor: "#a2d246",
                      fill: false
                    },{ 
                        data: [ph4[1],ph3[1],ph2[1],ph1[1],ph0[1]],
                        label: "PH02",
                        borderColor: "#e8c3b9",
                        fill: false
                    }
                  ]
                }
              });
        }
    });
    setTimeout('phchar()',60000);

}
$(document).ready(function(){
    time();
    getData();
    getStatus();
    getAlert();
    getTemp();
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
                $('#char'+Object.keys(object)[0]).val(Object.values(object)[0]);
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
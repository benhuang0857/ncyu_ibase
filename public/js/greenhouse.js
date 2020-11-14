$(document).ready(function(){
    getGreenhouse();
});

function getGreenhouse() {
    $.ajax({
        url: 'api/getGreenhouse',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var voltage = json['voltage'];
            var air_temperature = json['air_temperature'];
            var air_humidity = json['air_humidity'];
            var co2 = json['co2'];
            var sunshine = json['sunshine'];
            var soil_temperature = json['soil_temperature'];
            var soil_humidity = json['soil_humidity'];
            var air_pressure = json['air_pressure'];

            $('#apDiv17').text(voltage);
            $('#apDiv18').text(air_temperature);
            $('#apDiv19').text(air_humidity);
            $('#apDiv20').text(co2);
            $('#apDiv21').text(sunshine);
            $('#apDiv22').text(air_pressure);

            $('#apDiv29').text(soil_temperature);
            $('#apDiv30').text(soil_humidity);
        }
    });
    setTimeout('getGreenhouse()', 15 * 60 * 1000);
}
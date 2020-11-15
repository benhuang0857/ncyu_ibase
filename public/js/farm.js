$(document).ready(function(){
    getFarm();
});

function getFarm() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            console.log(json);
            var temp = JSON.parse(json['temperature']);
            var humidity = JSON.parse(json['humidity']);
            var water_level = JSON.parse(json['water_level']);
            var flow = JSON.parse(json['flow']);

            $('#apDiv17').text(temp[0]);
            $('#apDiv18').text(humidity[0]);
            $('#apDiv19').text(water_level[0]);
            $('#apDiv20').text(flow[0]);

            $('#apDiv29').text(temp[1]);
            $('#apDiv30').text(humidity[1]);
            $('#apDiv31').text(water_level[1]);
            $('#apDiv32').text(flow[1]);
        }
    });
    setTimeout('getFarm()', 15 * 60 * 1000);
}
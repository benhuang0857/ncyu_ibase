$(document).ready(function(){
    $('.knob').knob();
});

function getFarm() {
    $.ajax({
        url: 'api/getFarm',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var temp = json['temperature'];
            var humidity = json['humidity'];
            var water_level = json['water_level'];
            var flow = json['flow'];

            $('#apDiv17').text(temp);
            $('#apDiv18').text(humidity);
            $('#apDiv19').text(water_level);
            $('#apDiv20').text(flow);
        }
    });
    setTimeout('getFarm()', 3 * 60 * 60 * 1000);
}
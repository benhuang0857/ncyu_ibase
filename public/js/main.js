$(document).ready(function(){
    getBerry();
    sunshinechar();
    environmentchar();
    phchar();
    getImg();
    $('.knob').knob();
});

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
            //$('#apDiv26').text('43.2');

            $('#apDiv63').text(temperature[20]);
            $('#apDiv64').text(humidity[20]);

            $('#apDiv65').text(temperature[21]);
            $('#apDiv66').text(humidity[21]);

            $('#apDiv67').text(temperature[22]);
            $('#apDiv68').text(humidity[22]);


            $('#conductance').val(conductance);
            $('#apDiv97').text(conductance);
        }
    });
    setTimeout('getBerry()', 15 * 60 * 1000);
}

function getImg() {
    $.ajax({
        success: function(json){
            $("#apDiv94").css('background-image', 'url("http://140.130.89.171/images/berry/farm01.png")');
            $("#apDiv94").css('background-size', 'cover');

            $("#apDiv95").css('background-image', 'url("http://140.130.89.171/images/berry/farm02.png")');
            $("#apDiv95").css('background-size', 'cover');
        }
    });
    setTimeout('getImg()', 60 * 1000);
}

function sunshinechar() {
  $.ajax({
      url: 'api/getBerrySunshine',
      method: 'GET',
      dataType: 'json',
      success: function(json){
        var ctx = document.getElementById('sunshine-line-chart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            //labels: [02, 04, 06, 08 , 10, 12, 14, 16, 18, 20, 22, 24],
            datasets: [{ 
                data: [],
                label: "溫室1",
                borderColor: "green",
                fill: false,
              },
              { 
                data: [],
                label: "溫室2",
                borderColor: "white",
                fill: false,
              },
              { 
                data: [],
                label: "溫室3",
                borderColor: "red",
                fill: false,
              }
            ]
          }
        });
        var dt = new Date();

        for(var i=0; i<Object.keys(json).length - 1; i++)
        {
          var data = JSON.parse(json[i]['sunshine']);
          var time = dt.getHours() - Object.keys(json).length;
          $.each(data,function(index, val){
            myChart.data.datasets[index].data.push(val);
            
          });
          myChart.data.labels.push((time)%24 + i +2);
        }
        myChart.update();
      }
  });
  setTimeout('sunshinechar()', 60 * 60 * 1000);
}

function environmentchar() {

  $.ajax({
      url: 'api/getBerrySunshine',
      method: 'GET',
      dataType: 'json',
      

      success: function(json){
        var ctx = document.getElementById('environment-line-chart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            //labels: [02, 04, 06, 08 , 10, 12, 14, 16, 18, 20, 22, 24],
            datasets: [{ 
                data: [],
                label: "溫度",
                borderColor: "orange",
                fill: false,
              }
            ]
          }
        });
        var dt = new Date();

        for(var i=0; i<Object.keys(json).length - 1; i++)
        {
          var val = json[i]['environment'];
          var time = dt.getHours() - Object.keys(json).length;
          myChart.data.datasets[0].data.push(val);
          myChart.data.labels.push((time)%24 + i +2);
        }
        myChart.update();
      }
  });
  setTimeout('environmentchar()',60 * 60 * 1000);

}

/*
function phchar() {

    $.ajax({
        url: 'api/getBerryPH',
        method: 'GET',
        dataType: 'json',
        success: function(json){
            var ph11 = JSON.parse(json[11]['acid']);
            var ph10 = JSON.parse(json[10]['acid']);
            var ph9 = JSON.parse(json[9]['acid']);
            var ph8 = JSON.parse(json[8]['acid']);
            var ph7 = JSON.parse(json[7]['acid']);
            var ph6 = JSON.parse(json[6]['acid']);
            var ph5 = JSON.parse(json[5]['acid']);
            var ph4 = JSON.parse(json[4]['acid']);
            var ph3 = JSON.parse(json[3]['acid']);
            var ph2 = JSON.parse(json[2]['acid']);
            var ph1 = JSON.parse(json[1]['acid']);
            var ph0 = JSON.parse(json[0]['acid']);

            new Chart(document.getElementById("ph-line-chart"), {
                type: 'line',
                data: {
                  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
                  datasets: [ { 
                      data: [
                        ph11[0],ph10[0],ph9[0],ph8[0],
                        ph7[0],ph6[0],ph5[0],ph4[0],
                        ph3[0],ph2[0],ph1[0],ph0[0],
                        ph11[0],ph10[0],ph9[0],ph8[0],
                        ph7[0],ph6[0],ph5[0],ph4[0],
                        ph3[0],ph2[0],ph1[0],ph0[0],
                      ],
                      label: "PH01",
                      borderColor: "#a2d246",
                      fill: false
                    },{ 
                        data: [
                          ph11[1],ph10[1],ph9[1],ph8[1],
                          ph7[1],ph6[1],ph5[1],ph4[1],
                          ph3[1],ph2[1],ph1[1],ph0[1],
                          ph11[1],ph10[1],ph9[1],ph8[1],
                          ph7[1],ph6[1],ph5[1],ph4[1],
                          ph3[1],ph2[1],ph1[1],ph0[1],
                        ],
                        label: "PH02",
                        borderColor: "#e8c3b9",
                        fill: false
                    }
                  ]
                },
                options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              suggestedMin: 5.0,
                              suggestedMax: 7.0
                          }
                      }]
                  }
                }
              });
        }
    });
    setTimeout('phchar()',60 * 60 * 1000);
}
*/

function phchar() {

  $.ajax({
      url: 'api/getBerrySunshine',
      method: 'GET',
      dataType: 'json',
      

      success: function(json){
        var ctx = document.getElementById('ph-line-chart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            //labels: [02, 04, 06, 08 , 10, 12, 14, 16, 18, 20, 22, 24],
            datasets: [{ 
                data: [],
                label: "ph01",
                borderColor: "#a2d246",
                fill: false,
              },
               { 
                data: [],
                label: "ph02",
                borderColor: "#e8c3b9",
                fill: false,
              },
            ]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          suggestedMin: 5.0,
                          suggestedMax: 7.0
                      }
                  }]
              }
            }
        });
        var dt = new Date();

        for(var i=0; i<Object.keys(json).length - 1; i++)
        {
          var data = JSON.parse(json[i]['acid']);
          var time = dt.getHours() - Object.keys(json).length;
          $.each(data,function(index, val){
            myChart.data.datasets[index].data.push(val);
            
          });
          myChart.data.labels.push((time)%24 + i +2);
        }
        myChart.update();
      }
  });
  setTimeout('phchar()',60 * 60 * 1000);

}


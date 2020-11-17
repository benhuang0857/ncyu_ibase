$(document).ready(function(){
    getData();
    getStatus();
    getWeight();
    getMachineStatus();
    getTexture();
    $('.knob').knob();
});

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

function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
    }
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
  }
  
function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
    if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function getStatus() {
    $.ajax({
        url:  "api/getStatus",
        method: 'GET',
        dataType: "json",
        success: function(json){
            $i = 7;
            $j = 1;
            $.each(json, function(key, object){
                if(Object.values(object)[0] == 'status_1')
                    $('#'+Object.keys(object)[0]).attr('src','/images/map_'+$j+'.png');
                else
                    $('#'+Object.keys(object)[0]).attr('src','/images/map_'+$i+'.png');
                    
                $i++;
                $j++;
            });
        }
    });
    setTimeout('getStatus()', 1000);
}

function getMachineStatus() {
    $.ajax({
        url:  "api/getMachineStatus",
        method: 'GET',
        dataType: "json",
        success: function(json){
            if(json[0]['value'] == 1)
            {
                $('#apDiv15').text("機台異常");
            }
            else if(json[0]['value'] == 0)
            {
                $('#apDiv15').text("正常");
            }
            
            if(json[1]['value'] == 1)
            {
                $('#apDiv17').text("自動模式");
            }
            else if(json[1]['value'] == 0)
            {
                $('#apDiv17').text("手動模式");
            }  
            
            if(json[2]['value'] == 1)
            {
                $('#apDiv19').text("自動運轉中");
            }
            else if(json[1]['value'] == 0)
            {
                $('#apDiv19').text("待機中");
            } 
        }
    });
    setTimeout('getMachineStatus()', 1000);
}

function getWeight() {
    $.ajax({
        url:  "api/getWeight",
        method: 'GET',
        dataType: "json",
        success: function(json){
            if(json[0]['value'] == 1)
                $('#apDiv13').text("2兩");
            else if(json[1]['value'] == 1)
                $('#apDiv13').text("4兩");
            else
                $('#apDiv13').text("未設定");
        }
    });
    setTimeout('getWeight()', 1000);
}

function getTexture() {
    $.ajax({
        url:  "api/getTexture",
        method: 'GET',
        dataType: "json",
        success: function(json){
            if(json[0]['value'] == 1)
                $('#apDiv21').text("鋁箔");
            else if(json[1]['value'] == 1)
                $('#apDiv21').text("電鍍");
            else if(json[2]['value'] == 1)
                $('#apDiv21').text("自訂");
            else
                $('#apDiv21').text("未設定");
        }
    });
    setTimeout('getTexture()', 1000);
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
    setTimeout('getTemp()', 1000);
}

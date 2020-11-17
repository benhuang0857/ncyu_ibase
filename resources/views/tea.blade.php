<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>智慧農業戰情中心</title>
    <!--link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='{{asset('fat_nav/Source+Sans+Pro.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/humblegs.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/jquery.fatNav.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/main.css')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('fat_nav/reset.css')}}">
	<link rel="stylesheet" href="{{asset('fat_nav/index.css')}}">
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
    <style type="text/css">
    #apDiv1 {
	position: absolute;
	left: 1271px;
	top: 150px;
	width: 500px;
	height: 298px;
	z-index: 2;
}
    #apDiv2 {
	position: absolute;
	width: 20px;
	height: 20px;
	z-index: 2;
	left: 1775px;
	top: 31px;
}
   #apDiv3 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 190px;
}
   #apDiv4 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 332px;
}
   #apDiv5 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 474px;
}
   #apDiv6 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 616px;
}
   #apDiv7 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 758px;
}
   #apDiv8 {
	position: absolute;
	width: 586px;
	height: 124px;
	z-index: 2;
	left: 48px;
	top: 900px;
}
    #apDiv9 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1249px;
	top: 190px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv10 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1249px;
	top: 478px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv11 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1249px;
	top: 765px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv12 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1593px;
	top: 192px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv13 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1593px;
	top: 275px;
	color: #F8B62D;
	font-size: 40px;
	text-align: center;
	line-height: 60px;
	font-family: Arial, Helvetica, sans-serif;
}
    #apDiv14 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1593px;
	top: 366px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv15 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 449px;
	color: #F8B62D;
	font-size: 40px;
	text-align: center;
	line-height: 60px;
}
    #apDiv16 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 532px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv17 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 615px;
	color: #F8B62D;
	font-size: 40px;
	text-align: center;
	line-height: 60px;
}
    #apDiv18 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 704px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv19 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 787px;
	font-size: 40px;
	text-align: center;
	line-height: 60px;
	color: #F8B62D;
}
    #apDiv20 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 871px;
	color: rgba(255,255,255,0.9);
	font-size: 50px;
	text-align: center;
	line-height: 60px;
}
    #apDiv21 {
	position: absolute;
	width: 263px;
	height: 61px;
	z-index: 2;
	left: 1592px;
	top: 953px;
	color: #F8B62D;
	font-size: 40px;
	text-align: center;
	line-height: 60px;
}
    #apDiv22 {
	position: absolute;
	width: 250px;
	height: 140px;
	z-index: 2;
	left: 1258px;
	top: 268px;
	/*border: 1px solid #FC0;*/
}
    #apDiv23 {
	position: absolute;
	width: 250px;
	height: 140px;
	z-index: 2;
	left: 1258px;
	top: 554px;
	/*border: 1px solid #FC0;*/
}
    #apDiv24 {
	position: absolute;
	width: 250px;
	height: 140px;
	z-index: 2;
	left: 1258px;
	top: 841px;
	/*border: 1px solid #FC0;*/
}
    #apDiv25 {
	position: absolute;
	width: 30px;
	height: 30px;
	z-index: 2;
	left: 1488px;
	top: 420px;
	text-align: center;
	color: rgba(255,255,255,0.9);
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
    #apDiv26 {
	position: absolute;
	width: 230px;
	height: 30px;
	z-index: 2;
	left: 1246px;
	top: 420px;
	color: rgba(255,255,255,0.9);
	text-align: right;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
    #apDiv27 {
	position: absolute;
	width: 30px;
	height: 30px;
	z-index: 2;
	left: 1488px;
	top: 707px;
	text-align: center;
	color: rgba(255,255,255,0.9);
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
    #apDiv28 {
	position: absolute;
	width: 230px;
	height: 30px;
	z-index: 2;
	left: 1246px;
	top: 707px;
	color: rgba(255,255,255,0.9);
	text-align: right;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
    #apDiv29 {
	position: absolute;
	width: 30px;
	height: 30px;
	z-index: 2;
	left: 1488px;
	top: 994px;
	text-align: center;
	color: rgba(255,255,255,0.9);
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
    #apDiv30 {
	position: absolute;
	width: 230px;
	height: 30px;
	z-index: 2;
	left: 1246px;
	top: 994px;
	color: rgba(255,255,255,0.9);
	text-align: right;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 31px;
}
body::-webkit-scrollbar {
			display: none;
		}
    </style>
    <!--link-->
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('images/map_7.png','images/map_8.png','images/map_9.png','images/map_10.png','images/map_11.png','images/map_12.png')">
    
    <section class="bg">
        <div class="cover" id="map">
            

            <section>
              <img src="images/map_01.png" width="1921" height="1080" alt="map">
              <div id="apDiv30">
				<span id='D2'></span></div>
			  </div>
              <div id="apDiv29">件</div>
              <div id="apDiv28">
				<span id='D1'></span></div>
			  </div>
              <div id="apDiv27">件</div>
              <div id="apDiv26">
				<span id='D0'></span></div>
			  </div>
              <div id="apDiv25">件</div>
              <div id="apDiv23" style="text-align: center;">
				<input type="text" class="knob" id="charD1"
					data-fgColor="red"
					data-thickness=".2"
					data-width="120"
					data-cursor=true
					data-rotation=anticlockwise
					data-min="0"
					data-max="1000"
					value=0
					readonly
				>
			  </div>
              <div id="apDiv24" style="text-align: center;">
				<input type="text" class="knob" id="charD2"
					data-fgColor="green"
					data-thickness=".2"
					data-width="120"
					data-cursor=true
					data-rotation=anticlockwise
					data-min="0"
					data-max="1000"
					value=0
					readonly
				>
			  </div>
              <div id="apDiv22" style="text-align: center;">
				<input type="text" class="knob" id="charD0"
					data-fgColor="orange"
					data-thickness=".2"
					data-width="120"
					data-cursor=true
					data-rotation=anticlockwise
					data-min="0"
					data-max="1000"
					value=0
					readonly
				>
			  </div>
             
              <div id="apDiv21">無</div>
              <div id="apDiv20">材質設定</div>
              <div id="apDiv19">無</div>
              <div id="apDiv18">運作模式</div>
              <div id="apDiv17">無</div>
              <div id="apDiv16">執行模式</div>
              <div id="apDiv15">無</div>
              <div id="apDiv14">機台狀態</div>
              <div id="apDiv13">無</div>
              <div id="apDiv12">重量設定</div>
              <div id="apDiv11">生產件數</div>
              <div id="apDiv10">目標件數</div>
              <div id="apDiv9">總件數</div>
              <div id="apDiv3"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_7.png" width="586" height="124" id="S11"></a></div>
              <div id="apDiv4"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_8.png" width="586" height="124" id="S12"></a></div>
              <div id="apDiv5"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_9.png" width="586" height="123" id="S13"></a></div>
              <div id="apDiv6"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_10.png" width="586" height="119" id="S14"></a></div>
              <div id="apDiv7"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_11.png" width="586" height="123" id="S15"></a></div>
              <div id="apDiv8"><a href="#" onMouseOut="MM_swapImgRestore()"><img src="images/map_12.png" width="586" height="123" id="S16"></a></div>

              <div id="apDiv2">
                <!--menu-->
                <table>
                    <tr>
                        <td>
                            <div class="fat-nav ">
                                <div class="fat-nav__wrapper ">
                                    <ul>
                                        <li><a href="/logo">首頁-LOGO</a></li>
                                        <li><a href="/map ">首頁-地圖</a></li>
                                        <li><a href="/farm ">首頁(即時資訊)-1</a></li>
                                        <li><a href="/greenhouse ">首頁(即時資訊)-2</a></li>
                                        <li><a href="/berry ">草莓</a></li>
                                        <li><a href="/tea">茶葉機</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
              </div>
             
         
              <!--menu_over-->
                
          </section>
            <!-- right_over-->


</div>
        <!-- </section> -->
        <script src="{{asset('fat_nav/jquery1.11.2.min.js')}} "></script>
        <script type="text/javascript " src="{{asset('fat_nav/jquery.fatNav.min.js')}} "></script>
		<script type="text/javascript " src="{{asset('fat_nav/main.js')}} "></script>
		<!-- JS, Popper.js, and jQuery -->
		<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{ asset('js/tea.js') }}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
		<script src="{{ asset('js/jquery.knob.min.js') }}"></script>
</body>

</html>

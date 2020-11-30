<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <!-- IE可能不見得有效 -->
    <META HTTP-EQUIV="EXPIRES" CONTENT="0">
    <!-- 設定成馬上就過期 -->
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <!-- 與第一行是同樣的作用 -->
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
    <!-- 常見此寫法 -->
    <title>智慧農業戰情中心</title>
    <link rel="stylesheet" href="index.css">
	<!--link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='{{asset('fat_nav/Source+Sans+Pro.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/humblegs.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/jquery.fatNav.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('fat_nav/main.css')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('fat_nav/reset.css')}}">
    <link rel="stylesheet" href="{{asset('fat_nav/index.css')}}">
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
		width: 366px;
		height: 40px;
		z-index: 2;
		left: 84px;
		top: 151px;
		color: rgba(255,255,255,0.9);
		font-size: 36px;
		text-align: justify;
		font-weight: bold;
		font-family: inherit;
		}
		#apDiv4 {
		position: absolute;
		width: 364px;
		height: 40px;
		z-index: 2;
		left: 694px;
		top: 153px;
		font-size: 36px;
		color: rgba(255,255,255,0.9);
		font-weight: bold;
		font-family: inherit;
		text-align: justify;
		}
		#apDiv5 {
		position: absolute;
		width: 364px;
		height: 40px;
		z-index: 2;
		left: 1308px;
		top: 145px;
		color: rgba(255,255,255,0.9);
		font-size: 36px;
		font-weight: bold;
		text-align: justify;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv6 {
		position: absolute;
		width: 281px;
		height: 41px;
		z-index: 2;
		left: 1041px;
		top: 483px;
		color: rgba(255,255,255,0.9);
		font-size: 36px;
		font-weight: bold;
		text-align: center;
		}
		#apDiv7 {
		position: absolute;
		width: 550px;
		height: 210px;
		z-index: 2;
		left: 72px;
		top: 206px;
		color: rgba(255,255,255,0.9);
		font-size: 36px;
		font-weight: bold;
		text-align: justify;
		/*border: 1px solid #FC0;*/
		}
		#apDiv8 {
		position: absolute;
		width: 550px;
		height: 210px;
		z-index: 2;
		left: 685px;
		top: 206px;
		color: rgba(255,255,255,0.9);
		font-size: 36px;
		font-family: inherit;
		font-weight: bold;
		text-align: justify;
		/*border: 1px solid #FC0;*/
		}
					
		#apDiv27 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 494px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		}
		#apDiv28 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 518px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv29 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 565px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		}
		#apDiv30 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 590px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv31 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 712px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-weight: bold;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv32 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 688px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-weight: bold;
		}
		#apDiv33 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 518px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv34 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 494px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv35 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 565px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv36 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 590px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv37 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 712px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv38 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 688px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}

		#apDiv39 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 494px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv40 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 518px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv41 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 565px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv42 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 590px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv43 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 688px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv44 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 712px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}

		#apDiv45 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 518px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv46 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 419px;
		top: 596px;
		font-family: inherit;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv46 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 494px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv47 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 565px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv48 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 590px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv49 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 688px;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		text-align: center;
		}
		#apDiv50 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 712px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv51 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 880px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv52 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 905px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv53 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 952px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv54 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 976px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv55 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 760px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv56 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 115px;
		top: 783px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv57 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 880px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv58 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 905px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv59 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 952px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}
		#apDiv60 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 976px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv61 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 783px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv62 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 145px;
		top: 760px;
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
		color: rgba(255,255,255,0.9);
		}


		#apDiv81 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 494px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv82 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 518px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv83 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 565px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv84 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 590px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv85 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 688px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv86 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 712px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}

		#apDiv87 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 518px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv88 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 494px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv89 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 565px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv90 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 590px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv91 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 712px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv92 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 688px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}


		#apDiv99 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 760px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		}
		#apDiv100 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 783px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv101 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 879px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		}
		#apDiv102 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 905px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv103 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 951px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		}
		#apDiv104 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 336px;
		top: 976px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Gadget, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv105 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 760px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv106 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 783px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv107 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 879px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv108 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 905px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv109 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 951px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv110 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 366px;
		top: 976px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv9 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 760px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv10 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 783px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv11 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 879px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv12 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 905px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv13 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 951px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv14 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 554px;
		top: 976px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv15 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 760px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv16 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 783px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv17 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 879px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv18 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 905px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv19 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 951px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		}
		#apDiv20 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 584px;
		top: 976px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		color: rgba(255,255,255,0.9);
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv21 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 494px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv22 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 518px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv23 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 565px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv24 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 590px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv25 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 688px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv26 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 712px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv63 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 760px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv64 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 783px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv65 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 879px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv66 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 905px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv67 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 951px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv68 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 780px;
		top: 976px;
		text-align: center;
		color: rgba(255,255,255,0.9);
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv69 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 494px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv70 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 518px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv71 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 565px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}   
		#apDiv72 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 590px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv73 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 688px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}  
		#apDiv74 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 712px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv75 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 760px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv76 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 783px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv77 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 879px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv78 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 905px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #1f718a;
		line-height: 20px;
		}
		#apDiv79 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 951px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		#apDiv80 {
		position: absolute;
		width: 30px;
		height: 20px;
		z-index: 2;
		left: 810px;
		top: 976px;
		color: rgba(255,255,255,0.9);
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #14ae67;
		line-height: 20px;
		}
		#apDiv93 {
		position: absolute;
		width: 257px;
		height: 173px;
		z-index: 2;
		left: 1056px;
		top: 537px;
		/*border: 1px solid #FC0;*/
		}
		#apDiv94 {
		position: absolute;
		width: 375px;
		height: 275px;
		z-index: 2;
		left: 1462px;
		top: 462px;
		border: 1px solid #FC0;
		}
		#apDiv95 {
		position: absolute;
		width: 375px;
		height: 275px;
		z-index: 2;
		left: 1462px;
		top: 757px;
		border: 1px solid #FC0;
		}
		#apDiv96 {
		position: absolute;
		width: 550px;
		height: 210px;
		z-index: 2;
		left: 1297px;
		top: 206px;
		/*border: 1px solid #FC0;*/
		}
		#apDiv97 {
		position: absolute;
		width: 150px;
		height: 30px;
		z-index: 2;
		left: 1054px;
		top: 743px;
		color: rgba(255,255,255,0.9);
		font-size: 24px;
		text-align: right;
		font-family: Arial, Helvetica, sans-serif;
		line-height: 31px;
		}
		#apDiv98 {
		position: absolute;
		width: 120px;
		height: 30px;
		z-index: 2;
		left: 1204px;
		top: 743px;
		color: rgba(255,255,255,0.9);
		font-size: 24px;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		line-height: 31px;
		}

		body::-webkit-scrollbar {
			display: none;
		}

	</style>
    <!--link-->
</head>

<body>
    
    <section class="bg">
        <div class="cover" id="map">
            

            <section>
              <img src="images/strawberry.png" width="1920" height="1080" alt="map">
              <div id="apDiv98">us / cm</div>
              <div id="apDiv97"></div>
              <div id="apDiv96">
				<canvas class="char" id="ph-line-chart" width="600" height="220"></canvas>
			  </div>
              <div id="apDiv95">
				
			  </div>
              <div id="apDiv94">
				  
			  </div>
              <div id="apDiv93" style="text-align: center;">
				<input type="text" class="knob" id="conductance"  style="text-align: center;"
					data-fgColor="#66CC66"
					data-thickness=".2"
					data-angleOffset=-125
					data-angleArc=250
					data-rotation=anticlockwise
					data-min="100"
					data-max="-1000"
					value=0
					readonly
				>
			  </div>
              <div id="apDiv80">%</div>
              <div id="apDiv79">&deg;C</div>
              <div id="apDiv78">%</div>
              <div id="apDiv77">&deg;C</div>
              <div id="apDiv76">%</div>
              <div id="apDiv75">&deg;C</div>
              <div id="apDiv74">%</div>
              <div id="apDiv73">&deg;C</div>
              <div id="apDiv72">%</div>
              <div id="apDiv71">&deg;C</div>
              <div id="apDiv70">%</div>
              <div id="apDiv69">&deg;C</div>
              <div id="apDiv68">56</div>
              <div id="apDiv67">56</div>
              <div id="apDiv66">56</div>
              <div id="apDiv65">56</div>
              <div id="apDiv64">56</div>
              <div id="apDiv63">56</div>
              <div id="apDiv26">56</div>
              <div id="apDiv25">56</div>
              <div id="apDiv24">56</div>
              <div id="apDiv23">56</div>
              <div id="apDiv22">56</div>
              <div id="apDiv21">56</div>
              <div id="apDiv20">%</div>
              <div id="apDiv19">&deg;C</div>
              <div id="apDiv18">%</div>
              <div id="apDiv17">&deg;C</div>
              <div id="apDiv16">%</div>
              <div id="apDiv15">&deg;C</div>
              <div id="apDiv14">56</div>
              <div id="apDiv13">56</div>
              <div id="apDiv12">56</div>
              <div id="apDiv11">56</div>
              <div id="apDiv10">56</div>
              <div id="apDiv9">56</div>
              <div id="apDiv110">%</div>
              <div id="apDiv109">&deg;C</div>
              <div id="apDiv108">%</div>
              <div id="apDiv107">&deg;C</div>
              <div id="apDiv106">%</div>
              <div id="apDiv105">&deg;C</div>                          

              <div id="apDiv104">56</div>
              <div id="apDiv103">56</div>
              <div id="apDiv102">56</div>
              <div id="apDiv101">56</div>
              <div id="apDiv100">56</div>
              <div id="apDiv99">56</div>

              <div id="apDiv92">&deg;C</div>
              <div id="apDiv91">%</div>
              <div id="apDiv90">%</div>
              <div id="apDiv89">&deg;C</div>
              <div id="apDiv88">&deg;C</div>
              <div id="apDiv87">%</div>
              <div id="apDiv86">56</div>
              <div id="apDiv85">56</div>
              <div id="apDiv84">56</div>
              <div id="apDiv83">56</div>
              <div id="apDiv82">56</div> 
              <div id="apDiv81">56</div>

              <div id="apDiv62">&deg;C</div>
              <div id="apDiv61">%</div>
              <div id="apDiv60">%</div>
              <div id="apDiv59">&deg;C</div>
              <div id="apDiv58">%</div>
              <div id="apDiv57">&deg;C</div>
              <div id="apDiv56">56</div>
              <div id="apDiv55">56</div>
              <div id="apDiv54">56</div>
              <div id="apDiv53">56</div>
              <div id="apDiv52">56</div>
              <div id="apDiv51">56</div>

                  <div id="apDiv50">%</div>
              <div id="apDiv49">&deg;C</div>
              <div id="apDiv48">%</div>
              <div id="apDiv47">&deg;C</div>
              <div id="apDiv46">&deg;C</div>
               <div id="apDiv45">%</div>
              <div id="apDiv44">28</div>
              <div id="apDiv43">28</div>
              <div id="apDiv42">28</div>
              <div id="apDiv41">23</div>
              <div id="apDiv40">28</div>
              <div id="apDiv39">56</div>
              <div id="apDiv38">&deg;C</div>
              <div id="apDiv37">%</div>
              <div id="apDiv36">%</div>
              <div id="apDiv35">&deg;C</div>
              <div id="apDiv34">&deg;C</div>
               <div id="apDiv33">%</div>
              <div id="apDiv32">28</div>
		      <div id="apDiv31">28</div>
		      <div id="apDiv30">28</div>			  
		      <div id="apDiv29">28</div>
		      <div id="apDiv28">28</div>
               <div class="cover" id="apDiv27">56</div>
               
            <div id="apDiv7">
				<canvas class="char" id="sunshine-line-chart" width="600" height="220"></canvas>
			</div>
              <div id="apDiv8">
				<canvas class="char" id="environment-line-chart" width="600" height="220"></canvas>
			  </div>
              <div id="apDiv6">土壤電導率</div>
              <div id="apDiv5">土壤PH值</div>
                <div id="apDiv4">環境溫度</div>
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
                <div id="apDiv3">現場日照度</div>
         
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
		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
		<script src="{{ asset('js/jquery.knob.min.js') }}"></script>
</body>

</html>

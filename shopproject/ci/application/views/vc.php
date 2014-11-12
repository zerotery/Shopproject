<html>
	<head>
		
		<link rel="stylesheet" href="<? echo base_url();?>boot/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="layout.css">-->
		<link rel="stylesheet" href="<? echo base_url();?>boot/css/bootstrap-theme.min.css">
		<meta charset="UTF-8">
		<style>
		* { margin: 0; padding: 0; }
		.all{ width:1000px; height:100%; margin:0px auto; position:relative; }
		.header{ height:100px; padding:8px; }
		.left{ background-color:#80ec00; height:100%; width:250px; position:absolute;}
		.content{ position:absolute; margin:0 300px 0 300px; padding:8px; }
		.right{ background-color:#8080ec; height:100%; width:250px; position:absolute; right:0; }
		.footer{ position:absolute; height:100px; text-align:center; bottom:-120px; width:100%; }
		.top {
				height: 31px;
				position: relative;
				min-width: 600px;
				z-index: 2000000020;
				border: 0;
				outline: 0;
				font-family: Arial;
				font-size: 12px;
			}
	</style>

	</head>
	<body>
	<div class="top">
		<nav class="navbar navbar-inverse" role="navigation">

		</nav>



	</div>
	<br>
	<div class="all">
    <div class="header"><div class="container-fluid">
  		<div class="row">
			<div class="col-xs-12 " style="background-color:#80ec00;"><!-headder-->
				<center><h1>Head</h1></center>
			</div>
    
  		</div>
	</div>
	</div>
    <div class="left"><b>This is left side.</b>    
    </div>  
     <div class="content">
           <p>การจัดวางโครงสร้าง (Layout) ของเว็บ ถือเป็นจุดเริ่มต้นและจุดสำคัญมากในการออกแบบ ก่อนที่จะสร้างส่วนอื่นๆ เว็บโปรแกรมเมอร์ส่วนใหญ่มักออกแบบเค้าโครงของเว็บเพจไว้ก่อนเสมอ จากนั้นจึงกำหนดโครงสร้างอื่นๆต่อไป
            </p>
            <p>ตัวอย่างนี้ผู้เขียนได้ออกแบบ Layout อย่างคร่าวๆ โดยใช้แท็ก DIV ใน HTML พร้อมกับใช้ CSS ในการจัดการให้ข้อมูลออกมาในรูปแบบที่ต้องการ
            </p>
       </div>
       <div class="right"><b>This is right side.</b></div>
       <div class="footer"><b>This is footer</b></div>
</div>
	
		






		<script src="<? echo base_url();?>boot/js/sjquery.min.js"></script>
		<script src="<? echo base_url();?>boot/js/bootstrap.min.js"></script>
	</body>
		
</html>
<html>
<style type="text/css">
	*{margin:0;padding:0;}
	body{
		background:url("background.JPG");
	}
	@font-face{
		font-family:catull;
		src:url('Roboto-Condensed.ttf');
	}
	#navbar
	{
		border:1px black solid;
		height:30px;
	}
	#maindiv{
		background: url("ann.png");
		width:800px;
		height: 500px;
		margin:0 auto;
		margin-top: 70px;
		position: relative;
		z-index: -1;
	}
	#signin{
		position: absolute;
		color: #00aeef;
		height:30px;
		width:200px;
		margin-left:580px;
		text-align: center;
		margin-top: 70px;
		font-size: 28px;
		font-family:catull;
		
	}
	#arrow{
		position: absolute;
		height: 50px;
		width: 50px;
		background:url("arrow.PNG");
		margin-left: 1050px;
		margin-top: 290px;
	}
	#larrow{
		position: absolute;
		height: 50px;
		width: 50px;
		background:url("larrow.PNG");
		margin-left: 268px;
		margin-top: 290px;
	}
	#register{
		position: absolute;
		width:200px;
		height: 30px;
		font-size: 38px;
		float: right;
		margin-right: 60px;
		margin-top: 428px;
		text-align: center;
		font-family: catull;
		color: #00aeef;
		bottom:0;
	}
	
	#bop1{
		position: absolute;
		color: #00aeef;
		height:30px;
		width:150px;
		text-align: center;
		margin-top: 540px;
		margin-left:320px;
		font-size: 28px;
		font-family:catull;
	}
	#bop2{
		position: absolute;
		color: #00aeef;
		height:30px;
		width:150px;
		margin-left:500px;
		text-align: center;
		margin-top: 540px;
		font-size: 28px;
		font-family:catull;
	}
	#bop3{
		position: absolute;
		color: #00aeef;
		height:30px;
		width:150px;
		margin-left:680px;
		text-align: center;
		margin-top: 540px;
		font-size: 28px;
		font-family:catull;
	}
	#bop4{
		position: absolute;
		color: #00aeef;
		height:30px;
		width:150px;
		margin-left:910px;
		text-align: center;
		margin-top: 540px;
		font-size: 25px;
		font-family:catull;
	}
	#shape1{
		display: block;
		width:300px;
		height: 300px;
		border:1px black solid;
		position: absolute;
		margin:0 auto;
		margin-top:100px;
		margin-left: 270px;
		
	}
	#shape2{
		display: block;
		width:300px;
		height: 300px;
		border:1px black solid;
		position: absolute;
		margin:0 auto;
		margin-top:100px;
		margin-left: 270px;
		
	}
	#shape3{
		display: block;
		width:300px;
		height: 300px;
		border:1px black solid;
		position: absolute;
		margin:0 auto;
		margin-top:100px;
		margin-left: 270px;
		
	}
	#shape4{
		display: block;
		width:300px;
		height: 300px;
		border:1px black solid;
		position: absolute;
		margin:0 auto;
		margin-top:100px;
		margin-left: 270px;
		
	}

	
</style>
<script type="text/javascript">
	function fop1()
	{
		var hide= document.getElementsByClassName("hide");
		for(i=0;i<4;i++){hide.item(i).style.display="none";}
		document.getElementById("shape1").style.display = "block";
	}
	function fop2()
	{
		var hide= document.getElementsByClassName("hide");
		for(i=0;i<4;i++){hide.item(i).style.display="none";}
		document.getElementById("shape2").style.display = "block";
	}
	function fop3()
	{
		var hide= document.getElementsByClassName("hide");
		for(i=0;i<4;i++){hide.item(i).style.display="none";}
		document.getElementById("shape3").style.display = "block";
	}
	function fop4()
	{
		var hide= document.getElementsByClassName("hide");
		for(i=0;i<4;i++){hide.item(i).style.display="none";}
		document.getElementById("shape4").style.display = "block";
	}
</script>
<body onload="fop1()">
	<div id="navbar"></div>
	<div id="signin">ANNOUNCEMENTS</div>
	<a href="event.html"\><div id="larrow"></div></a>
	<a href="final.html"\><div id="arrow"></div></a>
	<a href = "#" onclick="fop1()"><div id="bop1" >OP1</div></a>
	<a href = "#" onclick="fop2()"><div id="bop2" >OP2</div></a>
	<a href = "#" onclick="fop3()"><div id="bop3" >OP3</div></a>
	<a href = "#" onclick="fop4()"><div id="bop4" >OP4</div></a>
	<div id="maindiv">
		<form action="create.php" method="POST">
		<div class="hide" id="shape1">
            
			<!-- OPTION 1 -->
			<h3>Date:			<input type="text" name="o1day" maxlength="2" size="2" placeholder="dd" />
			                   <input type="text" name="o1month" maxlength="2" size="2" placeholder="mm" />
				               <input type="text" name="o1year" maxlength="4" size="4" placeholder="yyyy" /><br/></h3>
			Building<br/><select name="o1b" >
			<option selected>SJT</option>
			<option>TT</option>
			<option>MB</option>
			<option>SMV</option>
			</select><br/>
			Morning<br/><input type="text" name="o1p1m" size="30" /><input type="text" name="o1p2m" size="30" /><br/>
			Evening<br/><input type="text" name="o1p1e" size="30" /><input type="text" name="o1p2e" size="30" />

		</div>

		
    </form>
	</div>
</body>
</html>
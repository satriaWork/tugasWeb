<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div id="halaman1">
		<div id="atas">
			<div id="logo"> 
				<a style="font-family: Cooper black;color: white;">Institute<br>
				Telkom of Technology</a>
			</div>

		<div class="menu" id="link1" style="">
			<p><a href="halaman1.html" style="text-decoration: none;">Home &ensp;</a>  
				<a href="halaman1.html" style="text-decoration: none;">Abouts &ensp;</a>  
				<a href="halaman3.html" style="text-decoration: none;">Research &ensp;</a>  
				<a href="halaman2.php" style="text-decoration: none;">People &ensp;</a>  
				<a href="halaman5.html" style="text-decoration: none;">Comment </a>
			</p>
		</div>

		<div id="menu2">
		  <div class="dropdown" style="float: left;">
		    <button class="dropbtn">Course
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Link 1</a>
		      <a href="#">Link 2</a>
		      <a href="#">Link 3</a>
		    </div>
 		 </div>

 		 <div class="dropdown" style="float: left;">
		    <button class="dropbtn">University Life 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Link 1</a>
		      <a href="#">Link 2</a>
		      <a href="#">Link 3</a>
		    </div>
 		 </div>

 		 <div class="dropdown" style="float: left;">
		    <button class="dropbtn">Research
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Link 1</a>
		      <a href="#">Link 2</a>
		      <a href="#">Link 3</a>
		    </div>
 		 </div> 

 		 <div class="dropdown" style="float: left;">
		    <button class="dropbtn">Global
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Link 1</a>
		      <a href="#">Link 2</a>
		      <a href="#">Link 3</a>
		    </div>
 		 </div>    

		</div>
		</div>

		

<div id="php1" style="height: 200px;margin-top: 50px;">
	<div id="php2" style="width: 600px;margin: auto;">
		<table class="table table-hover" >
			<thead class="thead-dark">
				<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Telephone</th>
				<th>Email</th>
				</tr>
			</thead>
<?php
// untuk meload data xml (orang.xml) dengan cara SimpleXML 
$peoples = new SimpleXMLElement('xml/orang.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
// melakukan looping penampilan data orang
foreach($peoples as $orang)
{
        echo "
<tr>
<td width='200'>{$orang->Name}</td>
<td width='200'>{$orang->Position}</td>
<td width='130'>{$orang->Telephone}</td>
<td width='80'>{$orang->Email}</td>
</tr>
 
";
}
echo '</table>';
?>		
</div>		
</div>


		<div id="footer">
			<div id="footer1">
				<div id="footer11" style="width: 300px;margin: auto;margin-top: 20px;">
					<p  style="font-family: Cooper black;color: white;font-size: 30px; margin:auto;">Part of<br>
					Telkom Group</p>
				</div>
			</div>
			<div id="footer2">
				<p style="width: 200px;margin: auto;font-size: 20px;font-family: comic sans ms; color: yellow;margin-top: 20px;"><font style="font-weight: bold;font-size: 25px;">Information for</font><br><br>
					<a href="halaman1.html" style="color: white;">Home &ensp;</a><br>  
					<a href="halaman1.html" style="color: white;">Abouts &ensp;</a><br>
					<a href="halaman3.html" style="color: white;">Research &ensp;</a><br>  
					<a href="halaman2.php" style="color: white;">People &ensp;</a><br>  
					<a href="halaman5.html" style="color: white;">Comment </a>
			</p>
			</div>
			<div id="footer3">
				<p style="width: 200px;margin: auto;font-size: 20px;font-family: comic sans ms; color: yellow;margin-top: 20px;"><font style="font-weight: bold;font-size: 25px;">Contact Us</font><br><br>
					<p href="" style="text-decoration: none; color: white;width: 200px;margin: auto;font-size: 20px;font-family: comic sans ms; color: white;margin-top: 20px;">Telp : (021)883-2231</p>< 
					<p href="" style="text-decoration: none;color: white;width: 200px;margin: auto;font-size: 20px;font-family: comic sans ms; color: white;margin-top: 20px;">Jalan D.I. Panjaitan Nomor 21</p>					
				</p>
			</div>
		</div>
	</div>

</body>
</html>
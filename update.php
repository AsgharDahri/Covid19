<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="animated.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">


</head>
<body onload="fetch()"  onload="search()">
	<div>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">COVID-19</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li ><a href="index.php">Home</a></li>
						<li><a href="update.php">Live Update.</a></li>
						<li><a href="about.html">About Us.</a></li>
						
						
					</ul>
					<ul class="nav navbar-nav navbar-right"  class="nav-item active">
						<li><a href="index.php"  >
							<div class="animated flash">
								STAY HOME STAY SAFE !
							</div>
						</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	
	
			  
			<section class="corona_update">
				<div class="mb-3">
					<h1 class="text-center">COVID-19 Live Updates. </h1>
					<form class="col-lg-12">
				    <input class="form-control mr-sm-2" id="se" type="search" placeholder="Search" aria-label="Search">
				    <br><br>
				    <button class="col-lg-4" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form>
				  <br><br><br><br><br><br>
				</div>

				<div width="200px"class=" teble-responsive-md" class="container">
					<table class=" table table-bordered table-strped text-center " id="tbval">
						<tr>
							<th style="width:12%">Country</th>
							<th style="width:12%">Confirmed</th>
							<th style="width:12%">Recovered</th>
							<th style="width:12%">Deaths</th>
							

						</tr>
					</table>
					
				</div>
				
			</section>

	
			

	<!-- <div class="carousel-item">
		<h1 class="text-center">Things You Can Do To Stay Positive During COVID-19</h1>
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div> -->


	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<script>
function search(){
	$.get("https://api.covid19api.com/summary",
			function(data){
				// console.log(data['Countries'].length);
				// var sea=document.getElementById('se');
				var sea="Pakistan";
				for(var i=1; i<(data['Countries'].length); i++)
				{
					var s=data['Countries'].length;
						// if(sea=)
						{
							console.log(data['Countries'].length);
						}
						




				}
			}
	);
}

	function fetch() {
		$.get("https://api.covid19api.com/summary",
			function(data){
				// console.log(data['Countries'].length);
				var tbval=document.getElementById('tbval');
				for(var i=1; i<(data['Countries'].length); i++)
				{
						var x=tbval.insertRow();
						x.insertCell(0);
						tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
						tbval.rows[i].cells[0].style.background='#3a4e57';
						tbval.rows[i].cells[0].style.color='#fff';

						x.insertCell(1);
						tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
						tbval.rows[i].cells[1].style.background='#3a4e57';
						tbval.rows[i].cells[1].style.color='#fff';

						x.insertCell(2);
						tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
						tbval.rows[i].cells[2].style.background='#3a4e57';
						tbval.rows[i].cells[2].style.color='#fff';

						x.insertCell(3);
						tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
						tbval.rows[i].cells[3].style.background='#3a4e57';
						tbval.rows[i].cells[3].style.color='#fff';

						// x.insertCell(4);
						// tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
						// tbval.rows[i].cells[4].style.background='#7a4a91';


						// x.insertCell(5);
						// tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
						// tbval.rows[i].cells[5].style.background='#7a4a91';



						// x.insertCell(6);
						// tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
						// tbval.rows[i].cells[6].style.background='#7a4a91';





						// x.insertCell(5);
						// tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
						// tbval.rwos[i].cells[5].style.background='#7a4a91';


						// x.insertCell(6);
						// tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewRecovered'];
						// tbval.rows[i].cells[6].style.background='#7a4a91';



				}
			}
	);
}
</script>
</body>

</html>
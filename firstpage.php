<!DOCTYPE>
<html>
<?php
	"include connect.php";
?>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript"></script>
	<script>
	$(document).ready(function (){
			$(".category").click(function(){$(".categories").slideDown(400);});
			$(".category").mouseleave(function(){$(".categories").slideUp(400);});
		});
	</script>
	
	<style>
	header
	{
		background-color:blue;
	}
	h2
	{
		margin-left:39%;
	}
	a
	{
		text-decoration:none;
		color:black;
	}
	#2
	{
		margin-top:0;
		text-align:center;
		text-decoration:none;
		color:black;
		font-size:18;
		margin-left:40%;
	}
	#1a
	{
		display:inline;
		
	}
	#logout
	{
		float:right;
	}
	#2
	{
		display:block;
	}
	#floatright{
		float:right;
	}
	
	
	
	nav{background-color:#7e7e7e;
height:30px;
padding:10px;
color:black;
}				/*doubt*/
nav ul li 
{
	font-weight:200;
	font-size:25px;
	text-align:center;
	float:right;
	margin-right:15%;
	list-style-type:none;
	margin-top:0;
	cursor: pointer;
	
}

.plannewevent a{
			text-decoration:none;
			color:black;			/*fa is a link to other page*/
	}
.plannewevent a:hover , .category:hover , .profile:hover
{
	font-style:italic;
	color:red;
	text-decoration:underline;

}

nav ul li .categories {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 20%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1; 
}


.category .categories {
    
	text-align:left;
	border-bottom-right-radius:20%;
	background-color:#d5dbd0;
	padding-left:3%;
}
.categories a:link
{ text-decoration:none; }
.categories a:hover 
{		
	background-color: #f1f1f1;
	text-align:left;
	padding:1%;
	color:black;
	text-decoration:none;
}
	</style>
</head>
<header><h2>Event Management</h2>
<a href="login.php" id="logout">LogOut</a></header><br><br>
<body>
<nav>
	<ul>
		<li><div class="profile">My Profile</div></li>
		<li>
		<div class="category">Category
		<div class="categories">
			<a href="technical.php">Technical</a><br>
			<a href="management.php">Management</a><br>
			<a href="arts.php">Arts</a><br>
			<a href="cultural.php">Cultural</a><br>
		</div>
		</div>
		</li>
		<li><div class="plannewevent"><a href="plannewevent.php">Plan New Event</a></div></li>
	</ul>
</nav> 
<div id="2a">
	<p id="2"><a href="technical.php"><strong>Technical</strong></a></p>
	<p id="2"><a href="management.php"><strong>Management</strong></a></p>
	<p id="2"><a href="arts.php"><strong>Arts</strong></a></p>
	<p id="2"><a href="cultural.php"><strong>Cultural</strong></a></p>
</div>
</body>
</html>


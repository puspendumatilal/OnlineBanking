<html>
<head>
	<style type="text/css">
	#wrapper
	{
	height:100px;
	width:1200px;
	}
	#header
	{
	height:100px;
	width:1200px;
	background-image:url(image/bghead.JPG);
	float:left;
	}
	nav ul {
	-webkit-font-smoothing:antialiased;
	text-shadow:0 1px 0 #FFF;
    background: #ddd;
    
    list-style: none;
    margin:-20px;
	padding:50px;
    width: 25%;
}
nav li {
    float: left;
   margin:-20px;
	padding:50px;
    position: relative;
    min-width: 25%;
}
nav a {
    background : yellow ;
    color: white;
    display: block;
    font: bold 16px/20px sans-serif;
    padding: 0 25px;
    text-align: center;
    text-decoration: none;
    -webkit-transition: all .25s ease;
       -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
         -o-transition: all .25s ease;
            transition: all .25s ease;
}
nav .dropdown:after {
    content: ' ▶';
}
nav .dropdown:hover:after{
	content:'\25bc'
}
nav li:hover a {
    background: #ccc;
}
nav li ul {
    float: left;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 35px;
    visibility: hidden;
    z-index: 1;
    -webkit-transition: all .25s ease;
       -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
         -o-transition: all .25s ease;
            transition: all .25s ease;
}
nav li:hover ul {
    opacity: 1;
    top: 50px;
    visibility: visible;
}
nav li ul li {
    float: none;
    width: 20%;
}
nav li ul a:hover {
    background: #bbb;
}

/* Clearfix */

.cf:after, .cf:before {
    content:"";
    display:table;
}
.cf:after {
    clear:both;
}

</style>
</head>
<body>
	<div id="wrapper">
		<div id="header">
		<table>
		<tr>
			<td><nav>
    <ul class="cf">
        <li><a href="#">HOME</a></li>
        <li><a class="dropdown" href="#">SERVICES</a>
            <ul>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
            </ul>
            </li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">PRESS</a></li>
		<li><a href="#">GALLERY</a></li>
    </ul>
</nav>
			<!--ul>
			<li><a href="home.php">HOME</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="#presscenter">PRESS</a></li>
			<li><a href="#galery">GALLERY</a></li>
			</ul!-->
			</td>
			<!--td>
					<img src="image\logo.PNG" height="100px" width="600px" />
			</td!-->
				<td>
				<font size="4" style="font-family:Aharoni" color="yellow">	want to banking with us? </font>
				</td>
				<td>
				<a href="login.php">click here</a>
				</td>
				
				
		</tr>
		
		</table>	
		</div>
	</div>
	
</body>
</html>
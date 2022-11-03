<?php echo '

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iComputer</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/ico">
    
    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	font-family: Roboto Slab;
}

a {
	text-decoration: none;
	color: inherit;
}

body {
	background-color: #ecf0f1;
}

header {
	position: sticky;
	left: 0;
	top: 0;
	width: 100%;
	height: 48px;
	background-color: #fff;
	box-shadow: 0 0 4px #dedede;
}

.delimiter {
	width: 4px;
	height: 4px;
	margin: 10px 6px 6px 6px;
	background-color: #3d3d3d;
}

.hor-delimiter {
	display: block;
	margin: 12px auto;
	width: 99%;
	height: 1px;
	background-color: #8d8d8d;
}

.header-container {
	margin: 0 auto;
	width: 1200px;
	height: 100%;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: space-between;
	-ms-align-items: center;
	align-items: center;
}

.header-container > .logo {
	height: 100%;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	-webkit-flex-direction: row;
	-moz-flex-direction: row;
	-ms-flex-direction: row;
	-o-flex-direction: row;
	flex-direction: row;
	-ms-align-items: center;
	align-items: center;
}

.header-container > .logo > img {
	height: 80%;
	margin-right: 8px;
}

.header-container > .logo > .logo-span {
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	-ms-align-items: center;
	font-weight: 400;
	font-size: 32px;
	color: #3d3d3d;
}

.header-container > .logo > .logo-span > span {
	font-weight: 400;
	font-size: 32px;
	font-weight: 700;
}

.header-container > .person {
	height: 100%;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	-ms-align-items: center;
	align-items: center;
}

.header-container > .person > a:hover {
	color: purple;
	text-decoration: underline;
}

.search > input[type="text"] {
	padding: 0 6px;
	width: 380px;
	height: 38px;
	border: 1px solid #3d3d3d;
	border-right: none;
	background-color: #fff;
	font-size: 14px;
}

.search > input[type="submit"] {
	text-transform: uppercase;
	padding: 0 8px;
	height: 38px;
	border: 1px solid #3d3d3d;
	border-left: none;
	background-color: #fff;
	font-size: 14px;
	cursor: pointer;
}
.search > input[type="submit"]:hover {
	background-color: #ecf0f1;
}

.categories {
	margin: 8px auto;
	padding: 8px;
	width: 1200px;
	background-color: #fff;
	box-shadow: 0 0 4px #dedede;
}

.ci-name {
	font-size: 16px;
	color: #5d5d5d;
}

.ci-blocks {
	margin: 4px 0;
}

.ci-block {
	padding: 2px 4px;
	margin: 0 1px;
	border: 1px solid;
	display: inline-block;
	font-size: 16px;
	cursor: pointer;
	text-transform: uppercase;
}
.ci-block:hover {
	color: #2d98da;
}

.container {
	margin: 0 auto;
	padding: 8px;
	width: 1200px;
	height: 200px;
	background-color: #fff;
}

.sort-by {
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
}

.sort-by span {
	margin-right: 6px;
}

.sort-by .select {
	color: #2d98da;
	cursor: pointer;
	text-transform: uppercase;
}

.sort-by .select:hover {
	text-decoration: underline;
}    
    
    
    </style>
</head>
<body>
	<header>
		<div class="header-container">
			<a class="logo" href="#"><div class="logo-span">&lt;i<span>Computer</span>/&gt;</div></a>
			<div class="search"><input type="text" placeholder="Enter the product you are looking for"><input type="submit" value="search"></div>
			<div class="person"><a href="#">Enter</a> <div class="delimiter"></div> <a href="#">Registration</a></div>
		</div>
	</header>
	<div class="categories">
		<div class="categories-item">
			<div class="ci-name">Producer:</div>
			<div class="ci-blocks">
				<div class="ci-block">Apple</div>
				<div class="ci-block">Alza.sk</div>
				<div class="ci-block">Datart.sh</div>
				<div class="ci-block">Datacomp.sk</div>
				<div class="ci-block">Alta</div>
				<div class="ci-block">Avalon</div>
				<div class="ci-block">Lenovo</div>
				<div class="ci-block">ACER</div>
				<div class="ci-block">ASUS</div>
				<div class="ci-block">Dell</div>
			</div>
		</div>
		<div class="hor-delimiter"></div>
		<div class="categories-item">
			<div class="ci-name">Destination:</div>
			<div class="ci-blocks">
				<div class="ci-block">Office</div>
				<div class="ci-block">School</div>
				<div class="ci-block">Gaming</div>
			</div>
		</div>
		<div class="hor-delimiter"></div>
		<div class="categories-item">
			<div class="ci-name">Type:</div>
			<div class="ci-blocks">
				<div class="ci-block">PC</div>
				<div class="ci-block">Notebook</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="sort-by">
			<span>Sort:</span>
			<div class="select">Last:</div>
		</div>
		<div class="hor-delimiter"></div>
		<div class="market-item">
			
		</div>
	</div>
</body>
</html>

'; ?>


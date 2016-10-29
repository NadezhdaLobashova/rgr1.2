<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>

<style  type="text/css">
.all{
	background-image:http://img0.liveinternet.ru/images/attach/c/0/44/352/44352220_43345821_1241325990_40119998_38725898_16614990_1201897733_13781991_9487793_22477198_5354711646147895.jpg;
	background-color: #B0E0E6;
}
.photo {
	height: 300px;
	width: 35%;
}
.form{
	padding-bottom: 250px;
	width: 45%;
	margin-left: 400px;
}
.jpg{
	width: 300px;
}
:-moz-placeholder {
	color: blue;
}
.form h2 {
	color: #4B0082;
	text-align: center;
	margin:50px;
	display: inline;
}
.pyth{
	text-align: center;
}
.sub {
	float: right;
}
.cat{
	margin: 25px 25px 25px 15px;
}
</style>

<div class='all'>
	<div class='photo'>
		<img class="jpg" src="http://mtplaymus.ru/uploads/images/treugolnik_teorema_pifagora.jpg">
	</div>
	<form method="GET" class="form">
		<div class='pyth' ><h2> Теорема Пифагора </h2></div>
		Катет А: <input class='cat' type='text' name='cat1'  value='<?php 
		if(isset($_GET['cat1'])){
			echo  htmlspecialchars($_GET['cat1']);
		}?>'> <br>
		Катет В: <input class='cat' type='text' name='cat2' value='<?php 
		if(isset($_GET['cat2'])){
			echo  htmlspecialchars($_GET['cat2']);
		}?>'> <br>
		<input class="sub" type ="submit" value="Рассчитать" name="add"> <?php
		$cat1=null;
		$cat2=null;
		if (isset ($_GET['cat1']) && isset ($_GET['cat2'])) { 
			$cat1 = htmlspecialchars($_GET['cat1']); 
			$cat2 = htmlspecialchars($_GET['cat2']); 
			if (!is_numeric($cat1) || !is_numeric($cat2)){
					echo "Введите числовое значение!";
				} elseif ($cat1 < 0 || $cat2 < 0) {
					echo "Катет не может быть отрицательным!";
			} else {
				Function Pythagoras ($cat1, $cat2) {
							$result =sqrt(($cat1*$cat1)+($cat2*$cat2));
							return $result;
				} ;
				echo "Гипотенуза равна " . number_format(Pythagoras ($_GET['cat1'], $_GET['cat2']), 2, ',', ' ');
			}
		}
		 ?>
	 </form>
</div>
</body>
</html>
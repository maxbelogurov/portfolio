<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Пирожные - Кондитерская "Home Dessert"</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	
    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">
	<link href="css/homedessert.css" rel="stylesheet">
	<link href="css/ihovers.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
	<?php
	include("navigation.php");
	?>
	
	<!-- Tittle -->
    <header class="header-tittle" style="background:url(images/cake-razdel.jpg) no-repeat center center;">
      <div class="container">
		<h1>Пирожные и наполнение для Кэндибаров</h1>
      </div>
    </header>

	<!-- Description -->
	<section class="description">
		<div class="container">
			<div class="row">
				<div class="col col-md-8 offset-md-2 col-xs-12">
					<p>​Также у нас есть несколько видов пирожных! Которые, вы можете заказать для оформления сладкого стола или просто для домашнего праздника! Кейк попсы и пирожные эскимо точно полюбятся на детских праздниках! А воздушная Павлова давно стала любимицей всех девушек!</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Cakes -->
	<section class="py-5 cakes">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#annapavlova">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/annapavlova.jpg" alt="Пирожное Анна Павлова">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Анна Павлова</h4>
							<a href="#annapavlova" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#kartoshka">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/kartoshka.jpg" alt="Пирожное Картошка">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Картошка</h4>
							<a href="#kartoshka" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#keykpops">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/keykpops.jpg" alt="Пирожное Кейк попс">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Кейк попс</h4>
							<a href="#keykpops" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#redbarhat">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/redbarhat.jpg" alt="Пирожное Красный бархат">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Красный бархат</h4>
							<a href="#redbarhat" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#korzinka">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/korzinka.jpg" alt="Пирожное Корзинка">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Корзинка</h4>
							<a href="#korzinka" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card">
						<div class="img-block">	
							<a class="cake-link" data-toggle="modal" href="#chokolateskimo">
							<img class="card-img-top img-fluid" height="200" src="images/cakes/chokolateskimo.jpg" alt="Шоколадное эскимо">
							</a>
						</div>
						<div class="card-block">
							<h4 class="card-title">Шоколадное эскимо</h4>
							<a href="#chokolateskimo" data-toggle="modal" class="btn btn-pink" class="card-link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	
	<!-- Cakes Modal -->
	<div id="annapavlova" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Десер Анны Павловой</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/annapavlova.jpg" alt="Пирожное Анна Павлова">
					<p></p>
					<p>Десерт Анна Павлова, загадочный новозеландский десерт, названный в честь русской балерины Анны Павловой!</p>
					<p>И ведь правда, этот воздушный десерт так напоминает балетную пачку! Хрустящая меренга с сырным кремом и сезонными ягодами. Сочетание хрустящих и мягких текстур, сладости и кислинки ягод. Никто не останется равнодушным! </p>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="kartoshka" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Картошка</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/kartoshka.jpg" alt="Пирожное Картошка">
					<p></p>
					<p>Мягкое шоколадное пирожное с добавлением бельгийского шоколада и нотки коньяка, покрыто щедрым слоем шоколада Барри Калебаут.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>

	<div id="keykpops" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Кейк попс</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/keykpops.jpg" alt="Пирожное Кейк попс">
					<p></p>
					<p>Круглое бисквитное пирожное на палочке, в глазури, украшенное кондитерской посыпкой. Проще говоря, маленький тортик на палочке.</p>
					<p>Кейк попс можно сделать как для детского праздника так и в качестве дополнения к основному десерту на свадьбе.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="redbarhat" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Красный бархат</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/redbarhat.jpg" alt="Пирожное Красный бархат">
					<p></p>
					<p>Это удивительно вкусное пирожное, бархатный и очень эффектный бисквит скрывает в себе лёгкий привкус шоколада и настолько идеально сочетается с кремом, что его прозвали "дьявольски вкусным"! У него целая армия фанатов по всему миру!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="korzinka" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Корзинка</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/korzinka.jpg" alt="Пирожное Корзинка">
					<p></p>
					<p>Пирожное "Корзинка" с крем-чиз, рассыпчатая корзиночка с  ягодным конфи под шапочкой всеми любимого сырного крема.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>

	<div id="chokolateskimo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Шоколадное эскимо</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid img-centered" src="images/cakes/chokolateskimo.jpg" alt="Пирожное Шоколадное эскимо">
					<p></p>
					<p>Муссовое пирожное на основе темного шоколада в виде привычного нам морожного эскимо. Основа выполнена из пирожного картошка покрытое бельгийким шоколадом barry calebaut и арахисом.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Reviews -->
	<section class="py-5 pink">
		<div class="container reviews">
			<div class="row">
				<div class="col-md-12 block-tittle white">
					<img src="ico/cake-white.svg">
					<h3>Кондитерская "Home Dessert"<br>Десерты из натуральных ингредиентов. Тортики, капкейки. Кофе и напитки!<br>Работаем ежедневно с 9:00 до 21:00! ⠀</h3>
				</div>
			</div>
		</div>
    </section>
    
	<!-- Bottom -->
<?php
include("footer.php");
?>
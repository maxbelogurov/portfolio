<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Кондитерская "Home Dessert"</title>

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

	<!-- Carousel -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/slide0.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!--<h1>Заголовок</h1>-->
              <!--<h3>Описание</h3>-->
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/slide1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!--<h1>Заголовок</h1>-->
              <!--<h3>Описание</h3>-->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

	<!-- Info about Home Dessert -->
	<section class="py-5">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-12 block-tittle brown">
					<img src="ico/cake-brown.svg">
					<h2>Кондитерская "Home Dessert"</h2>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img class="img-fluid" src="images/logo.png" style="margin-bottom:20px;" alt="Кондитерская Home Dessert в Калининграде" >
				</div>
				<div class="col-lg-8 col-md-8 offset-lg-1 offset-md-0 col-sm-12">
					<p>Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
					<p>Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
					<p>Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
				</div>
			</div>
		</div>
    </section>
	
	<!-- Products -->
	<section class="py-5 pink">
		<div class="container marketing">
			<div class="row">
				<div class="col-md-12 block-tittle white">
					<img src="ico/cake-white.svg">
					<h2>Наши продукы</h2>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="ih-item circle effect13 from_left_and_right">
						<a href="cake.php">
							<div class="img"><img src="images/cake.jpg" alt="img"></div>
							<div class="info">
							<div class="info-back">
								<h3>Пирожные</h3>
							</div>
						</div>
						</a>
					</div>
					<p><br></p>
					<p>​Также у нас есть несколько видов пирожных, для оформления сладкого стола или просто для домашнего праздника!</p>
					<!--<p><a class="btn btn-brown" href="#" role="button">Подробнее »</a></p>-->
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="ih-item circle effect13 from_left_and_right">
						<a href="tort.php">
							<div class="img"><img src="images/tort.jpg" alt="img"></div>
							<div class="info">
							<div class="info-back">
								<h3>Торты</h3>
							</div>
						</div>
						</a>
					</div>
					<p><br></p>
					<p>Ни один праздник не обходится без торта! Мы с радостью приготовим для вас вкуснейший торт.</p>
					<!--<p><a class="btn btn-brown" href="#" role="button">Подробнее »</a></p>-->
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="ih-item circle effect13 from_left_and_right">
						<a href="capcake.php">
							<div class="img"><img src="images/capcake.jpg" alt="img"></div>
							<div class="info">
							<div class="info-back">
								<h3>Капкейки</h3>
							</div>
						</div>
						</a>
					</div>
					<p><br></p>
					<p>​Эти известные всему миру малыши давно завоевали сердца! ​Мы делаем капкейки в максимально краткие сроки, в день отдачи!</p>
					<!--<p><a class="btn btn-brown" href="#" role="button">Подробнее »</a></p>-->
				</div> 
			</div>
		</div>
    </section>
	
	<!-- Advantage -->
	<section class="py-5 advantage white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 block-tittle brown">
					<img src="ico/cake-brown.svg">
					<h2>Почему нас выбирают?</h2>
				</div>
			</div>
			<div class="row">
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/jam.png" alt="">
					<h4>Большой выбор начинок</h4>
					<p>Делам как торты по классическим рецептам, так и авторские по своим собственным рецептам.</p>
				</div>
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/book.png" alt="">
					<h4>Секретные семейные рецепты</h4>
					<p>Секретные рецепты наших бабушек не оставят равнодушным, даже самого изысканного гурмана.</p>
				</div>
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/shapes.png" alt="">
					<h4>Исключительно ручная работа</h4>
					<p>Все наши десерты выполняет один и тотже кондитер, поэтому с каждым заказом вы получаете великолепный вкус.</p>
				</div>
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/time.png" alt="">
					<h4>Изготовление в день заказа</h4>
					<p>Вы всегда получаете только свежий товар, изготовленный буквально за час до вашего прихода</p>
				</div>
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/sprout.png" alt="">
					<h4>Натуральные ингредиенты</h4>
					<p>Мы используем сливочное масло, натуральные сливки и стараемся избегать растительных жиров.</p>
				</div>
				<div class="rcol col-lg-4 col-md-6 col-xs-12">
					<img class="img-fluid" width="100" src="ico/chocolate.png" alt="">
					<h4>Шоколад «Barry Callebaut»</h4>
					<p>Используем в изделиях бельгийский шоколад Barry Callebaut, который полюбился большинству кондитеров мира.</p>
				</div>
			</div>
		</div>
    </section>
	
	<!-- Reviews -->
	<section class="py-5 pink">
		<div class="container reviews">
			<div class="row">
				<div class="col-md-12 block-tittle white">
					<img src="ico/cake-white.svg">
					<h2>Отзывы клиентов</h2>
				</div>
			</div>
			<div class="row">
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BVFvWb7Hma9/">
						<img class="img-fluid rounded-circle" width="120" src="users/irlandia999.jpg">
					</a>
					<h4>irlandia999</h4>
					<p>Вкуснейший торт для любимой доченьки...</p>
				</div>
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BXvmFAXlDe-/">
						<img class="img-fluid rounded-circle" width="120" src="users/prosto_anna.jpg">
					</a>
					<h4>prosto_anna</h4>
					<p>В @homedessert_kld космос в каждой детал. Боимся с @olesya_kul, что эти чёрные вселенные и правда не доедут до адресата! </p>
				</div>
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BVQD6swhW6V/">
						<img class="img-fluid rounded-circle" width="120" src="users/lubovkunica.jpg">
					</a>
					<h4>lubovkunica</h4>
					<p>Вкуснейшие капкейки можно отведать в @homedessert_kld ))) а ещё кексики такие красивые, что мимими. Спасибо вам, придём ещё</p>
				</div>
				
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BYEfidRjOek/">
						<img class="img-fluid rounded-circle" width="120" src="users/aleksandra_polyushko.jpg">
					</a>
					<h4>aleksandra</h4>
					<p>А нереальными капкейками всегда можно побаловаться в @homedessert_kld )) это настоящее волшебство</p>
				</div>
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BW7lS8QAPmI/">
						<img class="img-fluid rounded-circle" width="120" src="users/rudovs.jpg">
					</a>
					<h4>rudovs</h4>
					<p>Капкейки для любимой тети ко дню рождения конечно же из @homedessert_kld. Они просто волшебные все бегом за ними</p>
				</div>
				<div class="rcol col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<a target="_blank" href="https://www.instagram.com/p/BZtEnBQg7pm/">
						<img class="img-fluid rounded-circle" width="120" src="users/i_cheprasova.jpg">
					</a>
					<h4>i_cheprasova</h4>
					<p>Ведь что обязательно должно быть на девичнике? Конечно же что нибудь сладенькое, чтоб вечер и ночь была сладкой</p>
				</div>
			</div>
		</div>
    </section>
    
<!-- Bottom -->
<?php
include("footer.php");
?>
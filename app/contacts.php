<?php
session_start();
$message = null;


if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    $message_class = $_SESSION['message_class'];
    unset($_SESSION['message']);
}

?>



<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-AU-Compatible" content="IE=edge">
	<title>Портфолио</title>
	<!--Fonts-->
	<link rel="stylesheet" href="fonts/fira.css">
	

	<!--SEO-->
	<meta name="desxription" content="портфолио">
	<meta name="keywords" content="портфолио">
	<meta name="author" content="Vadim Klychev">
	<!-- faicon.ico-->
	<link rel="shortcut icon" href="/faicon.ico" type="image/x-icon">
	<link rel="icon" href="/faicon.ico" type="image/x-icon">
	<!-- bower CSS -->
	<link rel="stylesheet" href="/bower/normalize.css/normalize.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/about-me.css">
	<!-- modernizr -->
	<script src="bower/modernizer/modernizr.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>

	<!--ICO-->
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">



</head>
<body>
<!--[if lt ie 7]>
<p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста установите <a href="http://browsehappy.com"> обновление </a> его.</p>
<![endif]-->
<div class="page_wrap">

	<header class="header">


		<div class="header_in_wrapper">
			<div class="soc">

				<ul class="socials">
					<li class="socials-item">
						<a href="http://vk.com/slim_m" target="_blank" class="socials-link vk">vk.com</a>
					</li>
					<li class="socials-item">
						<a href="https://twitter.com/SLIm__M" target="_blank" class="socials-link tw">twitter.com</a>
					</li>
					<li class="socials-item">
						<a href="https://www.facebook.com/vadimslim" target="_blank" class="socials-link fb">facebook.com</a>
					</li>
					<li class="socials-item">
						<a href="https://github.com/AutoFLINSTON" target="_blank" class="socials-link gt">github.com</a>
					</li>
				</ul>
			</div>
			<div class="log">
				<a href="">		<img src="img/logo.png" alt="logo" class="head_logo"></a>
			</div>
		</div>
	</header>




	<div class="gradient_line"></div>

	<div id="pingvin">
		<main>

			<!--  ooooooooooooo МЕНЮ ооооооооооооооооооооо-->
			<!--  При добавлении меню перенести класс "link_active", selected, id="color_hover", -->
			<div class="menu">
				<div class="menu_up">
					<li class="menu_items"><a class="link_b" href="/index.html">Обо мне</a></li>
					<li class="menu_items"><a class="link_b" href="/mwork.html">Мои работы</a></li>
					<li class="menu_items selected"><a class="link_b link_active" id="color_hover" href="/contacts.html" >Связаться со мной</a></li>
				</div>

				<div class="menu_down">
					<li class="contacts selected">Контакты</li>
					<li class="menu_items mail"><a class="link_a" href="mailto:vadimslim@mail.ru"><span class="mail_text">vadimslim@mail.ru</span></a></li>
					<li class="menu_items telephon"><a class="link_a" href="tel:+79152225955"><span>+7 915 222-59-55</span></a></li>
					<li class="menu_items sk"><a class="link_a" href="skype:slim-m1?chat"><span>slim-m1</span></a></li>
				</div>
			</div>


			<!--  ooooooooooooo КОНЕЦ МЕНЮ ооооооооооооооооооооо-->

			<!--  ooooooooooooo ОСНОВНОЙ КОНТЕНТ ооооооооооооооооооооо-->
			<div class="experience" id="box-cont">
				<div class="head_text" id="cont">
					<p class="head_tit messeg">У вас интересный проект? Напишите мне</p>
				</div>

				<div class="blue_stripe"></div>
				
				<?php if($message):?>
					<div class="alert <?=$message_class;?>" role="alert"><?=$message;?></div>
				<?php endif; ?>
				<div class="fbform clearfix">
					<form action="" method="post">
						<div class="contact-item column">
							<span class="contact">Имя</span>
							<label for="name">
								<input id="name" name="name" placeholder="Как к Вам обращаться" type="text">
							</label>
						</div>
						<div class="contact-item column">
							<span class="contact">Email</span>
							<label for="email">
								<input id="email" name="email" placeholder="Куда мне писать" type="text">
							</label>
						</div>
						<div class="contact-item" id="mesege">
							<span class="contact">Сообщение</span>
							<label for="comment">
								<textarea name="message" id="comment" placeholder="Кратко в чем суть" rows="8"></textarea>
							</label>
						</div>
						<div class="contact-item">
							<!-- <span class="contact">Введите код, указанный на картинке</span>
							<div class="image-code">
								<img src="img/code-img.png">
							</div>
							<div class="contact-item-code">
								<label for="captcha"> -->
									<div class="g-recaptcha" data-sitekey="6LeN8QoTAAAAACYtKAjwe1zXHmEeBVGARQg8pHkl" data-theme="dark"></div>
									<!-- <input id="captcha" name="captcha" placeholder="Введите код" type="text"> -->
								</label>
							</div>
						</div>
						<div class="button_center">
							<button type="submit" class="btn btn_sub btn-success">Отправить</button>
							<button type="reset" class="btn btn_res">Очистить</button>
						</div>
					</form>
				</div>
				
				<!--  ooooooo Сайт оооооооо-->
				
				<!--  ooooooooooooo КОНЕЦ О.К. ооооооооооооооооооооо-->


			</main>
		</div> 
	</div> 
	<div class="gradient_line"></div>

	<footer>
		<div class="footer">
			<div><a href="login.php" class="icons_logo lock">Войти</a></div>
			<div><p class="me_site1">© 2015. Это мой сайт, пожалуйста, не копируйте и не воруйте его.</p></div>
		</div>
	</footer>

	<!-- javascript -->	
	<script src="bower/jquery/dist/jquery.js"></script>
	<!-- <script src="js/main.js"></script> -->
	<script src="js/jquery.placeholder.min.js"></script>
</body>
</html>
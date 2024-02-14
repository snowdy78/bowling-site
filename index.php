<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    

</head>
<body>
    <div id="header">
        <a class=logo href="index.php">
            
        </a>
        <a class=capsule href="order.php">
            Арендовать дорожку
        </a>
        <a class=capsule href="about.php">
            О нас
        </a>
        <a class=capsule href="turnir.php">
            Турниры и праздники
        </a>
        <a class=capsule href="filial.php">
            Филиалы
        </a>
        <?php
            include_once "profile-load.php";
        ?>
    </div>
    <div id="index-bg"></div>
    <div class="container-500">           
        <div class="col-flex">
            <h3>Введите ваши контактные данные и мы вам позвоним!</h3>
            <div class=order-form>
                <p>Имя и Фамилия</p>
                <input type="text">
                <p>E-Mail</p>
                <input type="text">
                <p>Телефон</p>
                <input type="tel">
                <p>Количество дорожек</p>
                <input type="number">
                <p>Количество часов</p>
                <input type="number">
                <button>
                    Заказать
                </button>
            </div>
            <br>
            кстати, 23.12.2023 турнир)
        </div>
        
    </div>
    <footer>
		<div id="footer">
			<div id="twitter">
				<h3>TWITTER FEED</h3>
				<time datetime="2012-10-23"><a href="#">23 oct</a></time>
				<p>Мы приветствуем вас! На данном сайте вы сможете узнать наши 
                    ближайшие точки, где вы сможете увлечся игрой в боулинг.
                    Мы можете посмотреть даты турниров на ближайший месяц здесь. 
                    Чтобы заказать дорожку нужно здесь всего лишь ввести контактные 
                    данные, время (количество часов) игры и номер количество дорожек, 
                    если вы играете большой компанией людей.</p>
			</div>
			<div id="sitemap">
				<h3>SITEMAP</h3>
				<div>
					<a href="/home/">Home</a>
					<a href="/about/">About</a>
					<a href="/services/">Services</a>
				</div>
				<div>
					<a href="/partners/">Partners</a>
					<a href="/customers/">Support</a>
					<a href="/contact/">Contact</a>
				</div>
			</div>
			<div id="social">
				<h3>SOCIAL NETWORKS</h3>
				<a href="http://twitter.com/" class="social-icon twitter"></a>
				<a href="http://facebook.com/" class="social-icon facebook"></a>
				<a href="http://plus.google.com/" class="social-icon google-plus"></a>
				<a href="http://vimeo.com/" class="social-icon-small vimeo"></a>
				<a href="http://youtube.com/" class="social-icon-small youtube"></a>
				<a href="http://flickr.com/" class="social-icon-small flickr"></a>
				<a href="http://instagram.com/" class="social-icon-small instagram"></a>
				<a href="/rss/" class="social-icon-small rss"></a>
			</div>
			<div id="footer-logo">
				<a href="/"><img src="img/logo.png" alt="Whitesquare logo"></a>
				<p>Copyright &copy; 2012 Whitesquare. A <a href="http://pcklab.com">pcklab</a> creation </p>
			</div>
		</div>
	</footer>
</body>
</html>
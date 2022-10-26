<?php
/**
 * Template Name: Главная страница
 * Template Post Type: page
 */
?>

<!doctype html>
   <html <?php language_attributes(); ?>>
	  <head>
		 <meta charset="<?php bloginfo( 'charset' ); ?>">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="profile" href="http://gmpg.org/xfn/11">
		 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		 <link href="/wp-content/themes/storefront-child/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		 <link rel="icon" type="image/x-icon" href="/favicon.ico">
		 <script src="/wp-content/themes/storefront-child/bootstrap/js/bootstrap.min.js"></script> 
		 <?php wp_head(); ?>
		 <?// Блок счётчиков {?>
		 <!-- Global site tag (gtag.js) - Google Analytics -->
		 <script async src="https://www.googletagmanager.com/gtag/js?id=G-L9QPJSZVMW"></script>
		 <script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'G-L9QPJSZVMW');
		 </script>
		 <!-- Yandex.Metrika counter -->
		 <script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
			
			ym(75618700, "init", {
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
			});
		 </script>
		 <noscript>
			<div><img src="https://mc.yandex.ru/watch/75618700" style="position:absolute; left:-9999px;" alt="" /></div>
		 </noscript>
		 <!-- /Yandex.Metrika counter -->
		 <!-- Yandex.Metrika counter -->
		 <script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
			
			ym(75538234, "init", {
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
			});
		 </script>
		 <noscript>
			<div><img src="https://mc.yandex.ru/watch/75538234" style="position:absolute; left:-9999px;" alt="" /></div>
		 </noscript>
		 <!-- /Yandex.Metrika counter -->
		 <?// } Блок счётчиков?>
	  </head>
	  <body <?php body_class(); ?>>
		 <?php wp_body_open(); ?>
		 <?php do_action( 'storefront_before_site' ); ?>
		 <div id="page" class="hfeed site">
		 <?php do_action( 'storefront_before_header' ); ?>
		 <header id="masthead" class="site-header" role="banner">
   
			<div class="header-nav" style="">
			   <div class="col-full">
				   <div class="site-branding">
				   <a href="/" class="custom-logo-link" rel="home"><img src="/wp-content/themes/storefront-child/images/logo-soc.png" class="custom-logo" alt="Старый Капитан" width="82" height="90"></a>		
				   </div>
				   <div class="site-search">
				   <div class="widget woocommerce widget_product_search">
					   <form role="search" method="get" class="woocommerce-product-search" action="/">
						   <label class="screen-reader-text" for="woocommerce-product-search-field-0">Искать:</label>
						   <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Поиск по товарам…" value="" name="s">
						   <button type="submit" value="Поиск">Поиск</button>
						   <input type="hidden" name="post_type" value="product">
					   </form>
				   </div>
				   </div>
			   </div>
   
			   <div class="contact-number-p">
				   <img src="/wp-content/themes/storefront-child/images/phone.png" style="display: inline-block;padding: 12px;padding-top: 0px;">
				   <span><a href="tel:+79278253000" class="number-phone" style="color: white;text-decoration: none;font-size: 28px;">8(927) 825-3000</a></span>
			   </div>
			   <div class="storefront-primary-navigation">
				   <div class="col-full">
				   <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Основное меню">
					   <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"></button>
					   <div class="primary-navigation">
					   <?php wp_nav_menu( [ 'menu' => 'Главное меню' ] ); ?>
					   </div>
					 </div>
				  </nav>
				  <!-- #site-navigation -->
			   </div>
			</div>
			<div class="s-header__basket-wr woocommerce">
				<?php global $woocommerce; ?>
				<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
					<span class="basket-btn__label">Корзина</span>
					<span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
				</a>
			</div>
			<div class="row">
				<div class="col-md-6">
				<h2>Рыбные и мясные полуфабрикаты премиум-класса</h2>
				<a href="/shop/" onclick="gtag('event', 'click', {'event_category': 'catalog',  'event_action': 'click'});">Перейти в каталог</a>
			   </div>
			</div>
			
		 </header>


     <div class="container brend-from-main" >

		<div class="row we-brend-from-main-blocks">
			<h2>Наши бренды</h2>
		</div>

        <div class="row brend-from-main-blocks">
		
            <div class="col-md-6 first" >
                <div class="block-inside">
					<a href="/product-category/staryj-kapitan/" >
						<div class="block-inside-two">
							<img src="/wp-content/themes/storefront-child/images/logo-soc.png" class="starcap" alt="Старый Капитан" ><br>
							<h3>Старый капитан</h3>
							<p>Пельмени, котлеты, колбаски для жарки. Полуфабрикаты высочайшего качества ручного изготовления. Делаем для вас с 1997 года!</p>
						</div>
					</a>
				</div>
            </div>

            <div class="col-md-6 second" >
				<div class="block-inside" >
					<a href="/product-category/oldcaptain-product/">
						<div class="block-inside-two">
							<img src="/wp-content/themes/storefront-child/images/logo_oc2.png" class="oldcap" alt="Старый Капитан" ><br>
							<h3>OldCaptain</h3>
							<p>Колбасы для жарки из рубленного мяса ручного приготовления - настоящие произведения искусства! Мы готовим только из натуральных продуктов по собственным рецептам!</p>
						</div>
					</a>
				</div>
			</div>
        </div>
     </div>

	 <div class="container list-hit-product" >
		 
	 	<div class="row hit-product">
				<div class="col-md-12">
				<h3>Хиты продаж</h3>
				<?php // echo do_shortcode('[products limit="9" columns="3" visibility="featured" ]'); ?>
				<?php echo do_shortcode('[wcpscwc_pdt_slider type="featured"]'); ?>
				</div>
		</div>
		</div>

	<div class="row about">
				<div class="col-md-5 about1">
		 			<img src="/wp-content/themes/storefront-child/images/lemonrice.png">
				</div>
				<div class="col-md-7 about2">
		 		<div class="text-about">

						 <h2>О нас</h2>

						 <p>«Старый капитан» - стремительно растущая компания, которая ежемесячно ставит перед своими сотрудниками самые высокие задачи. За последние годы наше предприятие стало широко известно по всей России.</p> 
						 <p>Лучшие оптовые компании и крупнейшие торговые сети доверяют нам. Не важно, где вы проживаете в Москве, или Санкт-Петербурге, Архангельске или Владивостоке, Крыму или Томске – мясные изделия от «Старого капитана» станут украшением любого стола и будут по достоинству оценены гостями.</p>
						 </div>
					 </div>
				 </div>
				</div>
		</div>

		<div class="container advantages" >
			<div class="row">
				<div class="col-md-12">
		 			<h3>Преимущества</h3>
					 <ul>
					 <li>
						 <div class="elipse-white"><img src="/wp-content/themes/storefront-child/images/lepka.png" alt="Продукция ручной лепки"></div>
						 <span>Продукция ручной лепки</span>
					</li>
					 <li>
					 	 <div class="elipse-white"><img src="/wp-content/themes/storefront-child/images/ingr.png" alt="100% натуральные ингредиенты"></div>
						 <span>100% натуральные ингредиенты</span>
					</li>
					 <li>
					 	 <div class="elipse-white"><img src="/wp-content/themes/storefront-child/images/ecology.png" alt="Экологически чистая продукция"></div>
						 <span>Экологически чистая продукция</span>
					</li>
					 <li>
					 	 <div class="elipse-white"><img src="/wp-content/themes/storefront-child/images/price.png" alt="Полуфабрикаты по оптимальной цене"></div>
						 <span>Полуфабрикаты по оптимальной цене</span>
					</li>
					<li>
					 	 <div class="elipse-white"><img src="/wp-content/themes/storefront-child/images/calendar.png" alt="Индивидуальное изготовление"></div>
						 <span>Индивидуальное изготовление</span>
					</li>
					 </ul>
				</div>
			</div>
		</div>


		<?php get_footer(); ?>

<style>
header.site-header {height: 634px;}

@media all and (max-width: 1024px) {
	header.site-header {height: 440px;}
}
@media all and (max-width: 834px) {
	header.site-header {height: 415px;}
}
@media all and (max-width: 768px) {
	header.site-header {height: 415px;}
}
</style>
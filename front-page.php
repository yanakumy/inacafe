<?php get_header(); ?>

<body>	
<!--TOP画面-->
<header class="container-1 flex">
	<div class="main-visual-left">
	
			<div class="inacafe-logo"><img src="<?= get_template_directory_uri(); ?>/img/inacafe_logo.svg"  alt="INAcafeロゴ">
			</div>
			<div class="inakuma"><img src="<?= get_template_directory_uri(); ?>/img/inakuma.png" alt="イナクマ">
			</div>
	</div>
		
	<div class="main-visual-right">
			<div class="shop-img">
				<img src="<?= get_template_directory_uri(); ?>/img/P1066533.jpg" alt="カフェ店内写真">
			</div>

			<div class="front-page-global-nav-icon">
					<?php get_template_part('global-nav-icon'); ?>
			</div>
	</div>
</header>


<!--messageからaccesまで-->
<div class="container-2">
	
	<!--message-->
	<div class="container-message flex" id="icon-message">
		<h2 class="flex">
			<div class="about-inacafe"><img src="<?= get_template_directory_uri(); ?>/img/inacafe_logo_nega.png"  alt="icon-message"><p>about INACAFE</p></div>
		</h2>
		<p class="message">京王稲田堤駅から徒歩1分。<br>いなだ整形外科ひふ科に併設しているほっこりカフェです。<br>
			地域に愛されるカフェを目指して2018.9.1にOPEN<br>いたしました。<br>
			クリニックの待ち時間でもカフェのみのご利用でも<br>お待ちしております。
			テイクアウトOKです。
		</p>
	</div><!--/message-->
</div><!--/container-2-->

	<!--menu-->
	<div class="container-menu " id="icon-menu">
		<h2 class="">
			<div class="inside-container-menu flex"><img src="<?= get_template_directory_uri(); ?>/img/menu-half.png" alt="icon-menu">
			<p class="inside-container-menu">menu</p>
				<p>
				<?= do_shortcode('[fdm-menu id=125]'); ?>
				</p>
				<p>メニューは一部抜粋です。各種、多数ございます。</p>
			</div>
		</h2>
				<section class="menu-drink">
					<h3 class="section-h">
					
					</h3>


				</section>
	</div><!--/menu-->
	
<div class="container-2">	
	<!--service-->
	<div class="container-service flex" id="icon-service">
		<h2 class="">
			<div class="service"><img src="<?= get_template_directory_uri(); ?>/img/iconmonstr-wifi-thin-240.png" alt="icon-service"><p>service</p></div>
		</h2>
		<p class="service-p">Wi-Fi、コンセントを完備しております。
		</p>
	</div><!--/service-->
</div><!--/container-2-->	

	<!--access-->
	<!-- <div class="access">
			<img src="<?= get_template_directory_uri(); ?>/img/icon-map.png" alt="icon-access"><p>access</p>
	</div> -->
	<div class="container-access flex" id="icon-access">
			<div class="container-access_contact text-info">
				<p class="access-address">
					京王稲田堤駅南口から徒歩1分<br>いなだ整形外科ひふ科に併設
				</p>
				<div class="address">
					<p class="access-zip">
							<br>〒214-0001<br>
		 					 神奈川県川崎市多摩区<br>菅4-3-35 セリシールミツ1B
					</p>
					<p class="access-phone"><a href="tel:042-093-8320">042-000-0000</a></p>
					<p class="access-hour">営業時間 8:00 ~ 19:00</p>
					<p class="access-hour"close>定休日 / 金・日</p>
					<!-- <p><a href="#" class="btn"><br>お問い合わせ</a></p> -->
				</div>
			</div>
			
			<div class="container-access_map">	
				<p class="text-right"><a href="https://goo.gl/maps/J4u9pkvD1hs">Google Mapで見る</a></p>	
				<img src="<?= get_template_directory_uri(); ?>/img/map.png" alt="INAcafeアクセス">	
			</div>			
	</div>
	

	
<?php get_footer(); ?>	
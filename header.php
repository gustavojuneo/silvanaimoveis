<!DOCTYPE html>
<html lang="pt-br">
<!-- Informações do Site -->
<head>
	<!-- Meta Dados do Site -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
  	<meta name="author" content="Gustavo Juneo">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="UTF-8">
	
	<!-- Titulo do Site -->
	<title><?php bloginfo('name'); ?></title>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Inicio' ) ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Silvana Imóveis"></a>
			</div>
			<div class="info">
				<div class="social">
					<i class="fab fa-whatsapp"></i>
					<a href="https://api.whatsapp.com/send?phone=5519981517577">
						<span>Whatsapp</span>
						<strong>(19) 98151-7577</strong>
					</a>
				</div>

				<p>atendimento especializado à pessoas com deficiência auditiva</p>

			</div>
		</div>
		<nav>
				<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'menu_institucional' 
					) 
				); 
				?>
			</nav>
	</header>
<footer>
		<div class="imoveis">
			<h1>Imóveis</h1>
			<nav class="menu-imoveis">
				<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'menu_imoveis' 
					) 
				); 
				?>
			</nav>
		</div>

		<div class="instituto">
			<h1>Institucional</h1>
			<nav class="menu-institucional">
				<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'menu_institucional' 
					) 
				); 
				?>
			</nav>
		</div>

		<div class="contato">
			<div class="social">
				<a href="https://www.facebook.com/profile.php?id=100013080364463" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
			<article>
				<i class="fas fa-phone"></i><span> (19) 3865-5284</span>
			</article>

			<article>
				<i class="fas fa-envelope"></i><span> silvana@silvanaimoveis.com.br</span>
			</article>
			
			<article>
				<i class="fas fa-map-marker-alt"></i><span> Avenida Santana nº 2300 - Jardim Golden Park Residence Hortolândia / SP</span>
			</article>
			
		</div>

		<div class="direito">
			<span class="copyright">© 2019 Silvana Imóveis | Desenvolvido por <strong><a href="https://www.publimoc.com.br">Publimoc</a></strong></span>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
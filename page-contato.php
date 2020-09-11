<?php get_header(); ?>
<main>

	<div class="container">
		<div class="contato">
			<h1>Entre em Contato</h1>
			<!-- Seção Contato -->
			<section class="section-contato">

			<?php
			  the_post();
			  the_content();
			?>

			<p class="alert">*Os campos Nome, E-mail e Tipo de Residência são obrigatórios.</p>

			</section>

			<section class="section-local">
				<article>
					<i class="fas fa-phone"></i><span>(19) 3865 5284 / 3909 0359 / 98151 7577 / 99195 5020</span>
				</article>

				<article>
					<i class="fas fa-envelope"></i><span>silvana@silvanaimoveis.com.br</span>
				</article>

				<article>
					<i class="fas fa-map-marker-alt"></i><span>Avenida Santana nº 2300 - Jardim Golden Park Residence</span>
				</article>

				<article>
					<span class="local">Hortolândia / SP - CEP: 13189-101</span>
				</article>

				<article>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.855493101149!2d-47.233359684565656!3d-22.881795985024493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bbec507cad0d%3A0xf97d08257850a51f!2sSilvana+Im%C3%B3veis!5e0!3m2!1spt-PT!2sbr!4v1549885117980" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</article>
			</section>

		</div>
</main>

<?php get_footer(); ?>

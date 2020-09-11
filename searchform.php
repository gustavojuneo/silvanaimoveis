<form action="<?php echo get_home_url(); ?>">
	<section class="form-group">
		<select name="cat" id="cat" class="postform">
			<option value="5">Comprar</option>
			<option value="4">Alugar</option>
		</select>
		<input type="text" name="s" class="form-control" placeholder="<?php echo esc_attr_x( 'Digite o bairro, cidade ou região &hellip;', 'placeholder', 'silvanaimoveis' ); ?>" value="<?php echo get_search_query(); ?>">
		<input type="hidden" value="post" name="post_type" id="post_type" />
		<button type="submit"><?php echo _x( 'Pesquisar', 'submit button', 'silvanaimoveis' ); ?></button>
	</section>
</form>

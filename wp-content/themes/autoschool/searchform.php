<form class="form-inline" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<div class="md-form my-0">
		<input class="form-control mr-sm-2" name="s" type="text" placeholder="Поиск" value="<?php echo get_search_query(); ?>"
		       aria-label="Search">
	</div>
</form>

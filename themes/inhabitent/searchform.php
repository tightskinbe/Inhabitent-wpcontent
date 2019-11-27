<form id="search-form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	

		<span id="icon-span" class="icon-search" aria-hidden="true">
			<a class="rando-a" href="#"><i class="fa fa-search"></i></a>
		</span>
		<label>
		<input id="search-field" type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit screen-reader-text">
		
			<?php echo esc_html( 'Search' ); ?>
		</button>
</form>

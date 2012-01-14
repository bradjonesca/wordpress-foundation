<form action="<?php echo home_url( '/' ); ?>" method="get" class="nice row">
	<div id="search-input" class="eight columns">
		<input type="text" class="input-text small" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>" />	
	</div>
	<div id="search-button" class="four columns">	
		<button type="submit" class="button radius blue nice small">Search</button>
	</div>
</form>
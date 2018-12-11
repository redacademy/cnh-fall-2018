<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
    </label>
    <input type="submit" class="search-submit">
    <span class="search-icon" aria-hidden="true">
      <i class="fa fa-search fa-md"></i>
    </span>
    <span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>


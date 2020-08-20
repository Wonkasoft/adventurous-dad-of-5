<?php
/*
 * custom search form
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="sr-only">Search: </label>
    <div class="input-group">
    <input type="search" class="form-control" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>
<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input type="text" class="form-control search-field" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
</form>
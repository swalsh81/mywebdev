<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" placeholder="<?php echo is_search() ? get_search_query() : "Search..."?>"/>
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
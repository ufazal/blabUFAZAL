<div class="" id="nav-search-custom">
    <form class="navbar-form" method="get" action="<?php echo home_url( '/' ); ?>" role="search">
        <div class="input-group">
            <input type="text" id="search" class="form-control" name="s" value="<?php echo the_search_query(); ?>" placeholder="Search" />
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </span> 
        </div>
    </form>
</div>
        
        
<?php
/**
 * The template for displaying search forms
 *
 * @package  used_art_sounds
 */
?>
<div id="header-search">
<div class="search-wrapper" >

    <button id="search-toggle" class="search-toggle" aria-controls="show-search" aria-expanded="false"><i class="fas fa-search"></i><i class="fa-solid fa-x"></i><span class="screen-reader-text">search</span></button>

    <form role="search" method="get"  class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
        </label>
        <input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit"><i class="fas fa-search"></i> <span class="screen-reader-text">Search</span></button>
    </form>

</div>
</div>
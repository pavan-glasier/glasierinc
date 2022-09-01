<?php 

/**
* Template Name: Testing Page
*
*/

get_header('testing'); ?>
<style type="text/css">
/*    .ree-nav > div.nav-list > li .menu-dropdown{
        opacity: 1;
        pointer-events: auto;
    }*/
    .menu-inner-block-a {
        width: 100%;
        column-count: 4;
        display: block;
    }
    .inner-blockss {
        float: left;
        margin-bottom: 25px;
    }
</style>
<!--contact info-->
<div class="contact-head-sec pt85">
   <div class="container">
        <div class="row ">
            <div class="col-lg-7 vcenter">
                <div class="page-headings">
                    <!-- <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span> -->
                    <h1 class="mb15"><?php echo the_content();?></h1>
                </div>
            </div>

            <div class="col-lg-5 vcenter">
                <div class="sol-img m-mt30">
                   <img src="<?=site_url();?>/wp-content/uploads/2022/04/2710476.png" alt="img" class="img-fluid">
                </div>
            </div>
        </div>


<div class="ree-nav" role="navigation">
    <div class="nav-list" style="position: relative;">
        <ul class="nav-list" style="position: relative;">
    <?php 
    $request = wp_remote_get( 'http://192.168.0.128/glasierinc/wp-json/be_nav/menus/3' );
    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if( ! empty( $data ) ) {
        $count = 0;
        $submenu = 0; ?>

        <?php foreach( $data as $nav ) {  ?>
        
        <?php if($nav->menu_item_parent == 0){ 
            $parent_id = $nav->id;
            ?>
            <?php if($parent_id != 1200) { ?> </ul></li> <?php } ?>

            <li class="megamenu item_top" data-menu-item-parent="<?php echo $nav->menu_item_parent;?>" data-menu-submenu="<?php echo $submenu;?>" data-parentid="<?php echo $parent_id;?>">
                <a href="<?php echo $nav->url;?>" class="menu-links">
                  <?php echo $nav->title;?>
                </a>
                <div class="menu-dropdown">
                    <div class="menu-block-set">
                       <div class="container">
                          <div class="menu-block-a">
                            <div class="mega-menu-blocks">
                                <p class="mb10">Need a Website?</p>
                                <h4>We Will Shape Your Brand With Our Digital Solutions</h4>
                                <a href="get-quote.html" class="ree-btn ree-btn0 ree-btn-grdt2 mt30"> Request Quote <i class="fas fa-arrow-right fa-btn"></i></a>
                            </div>
                            <div class="mega-menu-blocks">
                                <div class="menu-inner-block-a">
                        <?php } ?>
                        
                        <?php
                        $subparent_id = $nav->menu_item_parent;
                        $item_id = $nav->id; 
                        $sub_count = 0;
                        $sub_submenu = 0; ?>
                        <?php if($parent_id != 1200){ $submenu = 0; }?>
                        <?php if($parent_id == $nav->menu_item_parent) { ?>
                            <?php if($submenu == 0){ ?>

                                    <?php $subcounter = 0;?>
                                    <?php foreach( $data as $navv ) { ?>
                                          <?php if($navv->menu_item_parent != 0){ ?>
                                                <?php if($navv->menu_item_parent == $parent_id){ 
                                                    $subcounter = $subcounter+1;
                                                    ?>
                                                    
                                                <?php } ?>

                                            <?php } ?>
                                    <?php } ?>
                                    <?php if($subcounter == 1){ ?>
                                    <?php } ?>
                                
                            <?php } ?>
                                <?php $submenu = $submenu+1; ?>
                                
                                <div class="inner-blockss">
                                  <label class="menu-headings"><a href="<?php echo $nav->url; ?>" class=""><?php echo $nav->title;?> </a> </label>
                                    <?php if($sub_submenu == 0){ ?>

                                    <ul class="menu-li-link sub-sub-menu --<?php echo $sub_submenu;?>">
                                         <?php $sub_subcounter = 0;?>
                                        <?php foreach( $data as $nav ) { ?>
                                              <?php if($nav->menu_item_parent != 0){ ?>
                                                    <?php if($nav->menu_item_parent == $item_id){ 
                                                        $sub_subcounter = $sub_subcounter+1;
                                                        ?>
                                                        <li class="item item_subsub" data-subcontainer-lenght="<?php echo $sub_subcounter; ?>" data-menu-item-parent="<?php echo $nav->menu_item_parent;?>" data-menu-sub_submenu="<?php echo $sub_submenu;?>" data-menu-sub_subcounter="<?php echo $sub_subcounter;?>" data-parentid="<?php echo $subparent_id;?>">
                                                          <a href="<?php echo $nav->url; ?>" class="title"> <?php echo $nav->title;?> </a>
                                                        </li>
                                                         
                                                    <?php } ?>

                                                <?php } ?>
                                                <?php $sub_submenu = $sub_submenu+1; ?>
                                        <?php } ?>
                                        
                                    </ul>
                                    <?php } ?>
                                </div>

                                <?php if($nav->menu_item_parent == $parent_id && $submenu > $subcounter-1 ){ 
                                    $submenu = 0;
                                    ?>
                                
                              <?php } ?>
                            
                              <?php if($nav->menu_item_parent != $parent_id){ ?>
                           <?php } ?>

                        <?php } ?>

                    <?php } ?>

                <?php } ?>

    </div>
</div>

   </div>
</div>



<?php get_footer(); ?>
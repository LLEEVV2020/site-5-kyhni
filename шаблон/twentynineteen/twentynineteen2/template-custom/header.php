<!--work area-->
<div class="container top_block ">

    <div class="top_block__logo" itemscope itemtype="http://webmaster.yandex.ru/vocabularies/term-def.xml">
       	<?php //1 if ( has_custom_logo() ) : ?>
		    <?php 
                /*если забыли добавить логотип, то вставится по умолчанию логотип*/
                //2 the_custom_logo(); ?>
        <?php //3 else : ?>
            <a href="//<?php echo $_SERVER['SERVER_NAME']; ?>" > <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/logo.png" alt="КУПИТЬ
КУХНЮ" /> </a>
            <span> <a style="color: inherit;" href="//<?php echo $_SERVER['SERVER_NAME']; ?>">КУПИТЬ
КУХНЮ</a></span>
	    <?php //4 endif; ?>
        
    </div>
        
    <div class="center-img">
        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/header-1.png" alt="">
    </div>

    <div class="top_block__item">
        <a class="top_block__tel comagic_phone" href="tel:<?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (917) 122-28-80";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?>"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (917) 122-28-80";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></a>
        <div class="top_block__vamperez" data-toggle="modal" data-target="#kupitDeshevle"><span>Вам перезвонить?</span></div>
    </div>

</div>
<!--top_block -->
<style>
    .menu-top_menu-container{
        width: 100%;
    }
    .top_menu.navbar-default .navbar-nav .menu-item-has-children > a{
        z-index: 1;
    }
</style>


<div class='start container'>
<?php Theme::plugins('pageBegin'); ?>
    <div id="bck_3" class="bck">
        <div id="block_3" class="row rowNo03">
            <div id="bluditContent">
                <?php if($page->coverImage()){?>
                    <img id="headerImg" src="<?php echo $page->coverImage(); ?>" alt="Image of <?php echo $page->title(); ?>">
                    <p style="text-align:center;">. . .</p>
                <?php }?>
                <h1 id="headerh1"><?php echo $page->title(); ?></h1>
                
                <?php echo $page->content(). " " . $page->custom('subtitle'); ?>

                
                <?php Theme::plugins('pageEnd'); ?>
            </div>
        </div>
    </div>
</div><!-- close start -->

<?php
    $bannerText = array_slice($content,0,1); //element 0
    $topThree = array_slice($content, 1, 3); //elements 1,2,3
    $slideOuts = array_slice($content,4,4);  
    $fourBlock = array_slice($content,8,4);
    
?>

<div class='start container'>
<?php Theme::plugins('pageBegin'); ?>
    <div class="topBG"
        style="background-image:url('<?php foreach($bannerText as $heroText){echo $heroText->coverImage();} ?>?anchor=center&amp;mode=crop&amp;width=1000&amp;height=222&amp;rnd=132566533108870000');">
        <div id="bck_1" class="bck">
            <div id="block_1" class="row rowNo46">
                <div class="hero-content" id="heroTxt">
                    <?php foreach($bannerText as $headerText){
                        echo "<h1>".$headerText->title()."</h1>
                        <p>".$headerText->description()."<br>. . .</p>";
                    } ?>
                    
                </div>
            </div>

        </div>
        <img class="dividers" id="divider1" src="<?php echo Theme::src('img/basic-triangle-bottom.svg'); ?>" alt="divider">
    </div> <!-- close header BG -->

   

    <div id="bck_3" class="bck">
        <div id="block_3" class="row rowNo08">
            <h1 class="rowNo08Cont">Simply Delicious</h1>
            <p style="margin:0; padding:0;">. . .</p>
        </div>
    </div>

    <div id="bck_2" class="bck">
        <div id="block_2" class="row rowNo06">
            <?php
                foreach ($topThree as $t3_page) {
                    echo "
                    <div class='' data-scroll='animate__animated animate__fadeIn'>
                        <h3>". $t3_page->title() . "</h3>
                        <img src='".$t3_page->coverImage()."' alt='".$t3_page->title()."' />
                        <p>".$t3_page->description()."</p>
                        <a href='".$t3_page->permalink()."' class='btn'>Learn More</a>
                    </div>";
                }
            ?>
        </div>
    </div> <!-- close header BG -->

    <?php 
        $slideOutArr = ['Right','Left','Right','Left'];
        $slideRowArr = ['02','10','02','10'];
        $slideArrCount = 0;

        foreach($slideOuts as $slide){
        echo    "<div id='bck_". $slide->slug() ."' class='bck'>
                    <div id='block_". $slide->slug() ."' class='homeSlider row rowNo".$slideRowArr[$slideArrCount]."'>
                        <img data-scroll='animate__animated animate__fadeIn".$slideOutArr[$slideArrCount]."' src='".$slide->coverImage()."' alt=''>
                        <div>
                            <h3>".$slide->title()."</h3>
                            <p class='slideOuts'>".$slide->description()."</p>
                            <a href='".$slide->permalink()."' class='btn'>Learn More</a>
                        </div>
                    </div>
                </div>";
                $slideArrCount ++;
        }
    ?>




    <div id="bck_11" class="bck">
        <div id="block_11" class="row rowNo25">
            <?php

                $slideInArr = ['Right','Left'];
                $slideInArrCount = 0;

                foreach($slideIns as $slideIn){
                 echo   "<div class='greyBGr25'>
                            <div>
                                <img data-scroll='animate__animated animate__fadeIn".$slideInArr[$slideInArrCount]."' src='".$slideIn->coverImage()."' alt=''>
                                <p class='profile-description'>
                                <strong>".$slideIn->title()."</strong><br>"
                                .$slideIn->description().
                                "</p>
                                <a class='btn' href=".$slideIn->permalink().">Learn more</a>
                            </div>
                        </div>";
                    $slideInArrCount ++;
                }
                ?>
        </div>
    </div>

    <div id="bck_3" class="bck">
        <div id="block_3" class="row rowNo08">
            <h1 class="rowNo08Cont">More food</h1>
            <p style="margin:0; padding:0;">. . .</p>
        </div>
    </div>

    <div id="bck_12" class="bck">
        <div id="block_12" class="row rowNo07">
            <?php
                foreach($fourBlock as $fblock){
                    echo "<div class='whitePale animate__animated animate__fadeIn' data-scroll='animate__animated animate__fadeIn'>
                            <div>
                                <img src='".$fblock->coverImage()."' alt='' >
                                <h4>".$fblock->title()."</h4>
                                <p>".$fblock->description()."</p>
                                <a class='btn' href=".$fblock->permalink().">Learn more</a>
                            </div>
                          </div>";
                }
                ?>
        </div>
    </div>

    <div class="bottomBG">
        <div id="bck_12" class="bck">
            <div id="block_12" class="row rowNo08">
                <h3 class="rowNo08Cont">Want to know more?</h3>
                <a class="homeBtn" href="<?php echo $site->url(); ?>/contact">Get in touch</a>
            </div>
        </div>
    </div>

    <?php Theme::plugins('pageEnd'); ?>
    
</div><!-- close start -->
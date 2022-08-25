<!-- Footer Partial -->
<footer>
  
  <div id="block_footer" class="row text-left rowNo06">
    <div id="ft1"> 
        <h4>Get in touch</h4>
        <p> . . . .</p>
        <address class="panelMid">
            45 Fonsacker Ave<br>
            Sandhollows<br>
            Cricklewood<br>
            C349LD
        </address>
        <p>. . . .</p>
            T: <a href="tel:0123014587">01234 356 789</a><br>
            E: <a href="mailto:hello@nowhere.com">hello@nowhere.com</a>
        </p>
    </div> 

    <div id="ft2">
      <h2>A little about us</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias reiciendis deleniti possimus nemo non repellendus?
        Quae atque vero modi quidem! Autem cupiditate fugit doloribus ad amet, asperiores provident commodi.</p>
      <a href="#" class="btn">Learn More</a>
    </div>

    <div class="footerBottom">
        <div class="footerCopyright">
            <p><?php echo $site->footer(); ?> <?php echo " " . $site->title(); ?>  </p>
        </div>
        <div class="footerLinks">
            <p><a href="http://www.pixacura.com" id="FooterDesignedBy">Design by: Pixacura</a></p>
        </div>
    </div>
  </div> 

</footer>

<!-- Close footer partial -->


<?php echo Theme::js("js/slidePush.js");?>

<?php Theme::plugins('siteBodyEnd') ?>
    </body>

</html>



<ul>
      <li class="nav-item"><a class=" 
          <?php  if($currentPageUrl == Theme::siteUrl()){
                echo "activePage";
              } 
          ?> 
          nav-link animate__animated animate__fadeInLeft" href="<?php echo Theme::siteUrl(); ?>">Home</a></li>
        
      <?php
          // Page number, the first page is 1
          $pageNumber = 1;

          // Number of items to return
          $numberOfItems = 2;

          // Only get the pages with the status published
          $onlyPublished = true;

          // Get the list of keys of pages
          $items = $pages->getList($pageNumber, $numberOfItems, $onlyPublished);

          foreach ($items as $key) {
              // buildPage function returns a Page-Object
              $currentPage = buildPage($key);
            
              // Print the page title
              echo "<li class='nav-item'>
                      <a class='";
              if(strtolower($currentPageUrl) == strtolower(Theme::siteUrl().$currentPage->slug())){
                echo "activePage";
              }
              echo " nav-link animate__animated animate__fadeInLeft' href='". $currentPage->permalink() ."'>";
                    if ($currentPage->custom('menuTitle')) {
                      echo $currentPage->custom('menuTitle');
                    }
                    else{
                      echo ucfirst($currentPage->slug());
                    }
              echo  "</a></li>";
          }
      ?>
        
        <?php 

        //static
        $staticCount = count($staticMenu);
        for($i=0;$i<$staticCount && $i<3;$i++){
          echo "<li class='nav-item'>
					<a class='";
          if(strtolower($currentPageUrl) == strtolower(Theme::siteUrl().$staticMenu[$i]->slug())){
            echo "activePage ";
          }
          echo "nav-link animate__animated animate__fadeInLeft' href='". $staticMenu[$i]->permalink()."'>". $staticMenu[$i]->title()."</a>
				</li>";
        }
        ?>
      </ul>
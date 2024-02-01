<?php
 if( !empty($template_fields['section_3_carousel_items']) ){
  ?>
<div id="section_3">
  <div class="container mx-auto w-full">
    <div class="flex flex-wrap justify-center py-24">
      <div id="testimonials" class="carousel w-full flex flex-wrap relative">
        <div class="carousel-items relative w-full">
          <?php
          $i=0;
          foreach($template_fields['section_3_carousel_items'] as $item){
            $i++;
            ?>
          <div class="carousel-item <?php echo ($i==1) ? 'active': ''; ?> w-full" <?php echo ($i!=1) ? 'style="display:none;"': ''; ?>>
            <div class="inner-wrapper relative flex items-center">
              <div class="item-content h-full w-full md:w-2/3 p-8">
                <div id="item-paragraph" class="text-xl md:text-2xl leading-relaxed text-center md:text-left">
                  <p><?php echo $item['quote'];?></p>
                </div>
                <div class="item-author flex flex-wrap items-center justify-center md:justify-normal translate-y-10 md:translate-y-24">
                  <div class="author-img h-[48px] w-[48px]">
                    <img class="rounded-full h-[48px] w-[48px] object-cover aspect-square" src="<?php echo $item['author_image'];?>" alt="<?php echo $item['author_name'].' Portrait'; ?>">
                  </div>
                  <div class="author-tag ml-2 flex flex-col items-center md:items-start">
                    <span class="author-name text-secondary-400"><?php echo $item['author_name']; ?></span>
                    <span class="author-role text-sm text-dark_component-300"><?php echo $item['author_role']; ?></span>
                  </div>
                </div>
              </div>
              <div class="item-img hidden md:block w-full md:w-1/3 md:h-[400px md:w-[400px]">
                <div class="square"></div>
                <img class="z-10 relative object-cover rounded-xl md:h-[400px] md:w-[400px]" src="<?php echo $item['context_image'];?>" alt="<?php echo $item['context_image_description'];?>">
              </div>
            </div>
          </div>
          <?php 
        }
        ?>
        </div>
        <div class="controls w-full">
          <div class="dots flex flex-wrap justify-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
  }
?>
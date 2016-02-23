<div id="layouts_modal" class="modal">
  <div class="modal_wrap">
    <ul>
      <?php foreach ($LAYOUTS as $layout) { ?>
        <li><a href="<?php echo $PROTOTYPE_PATH.'/'.$layout.'/'; ?>"><?php echo ucwords(str_replace('-', ' ', $layout)); ?></a></li>
      <?php } ?>
    </ul>
    <p class="close">X</p>
  </div>
</div>

<article class="<?php print $classes; ?> node-<?php print $node->nid; ?>"<?php print $attributes; ?>>
  <h1 class="page-title"><?php print $title; ?></h1>
  
  <div class="content"<?php print $content_attributes; ?>>
    
      <div class="body">
        <?php print $node->body[LANGUAGE_NONE][0]['safe_value']; ?>
      </div>
    
  </div>
</article>

<?php
  // Check available fields.
  $body = check_entity_field($node, 'body', LANGUAGE_NONE);
?>
<article class="<?php print $classes; ?> node-<?php print $node->nid; ?>"<?php print $attributes; ?>>
  <h1 class="page-title"><?php print $title; ?></h1>
  
  <div class="content"<?php print $content_attributes; ?>>
    <?php if ($body): ?>
      <div class="body">
        <?php print $node->body[LANGUAGE_NONE][0]['safe_value']; ?>
      </div>
    <?php endif; ?>
  </div>
</article>

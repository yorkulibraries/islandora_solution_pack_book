<?php
/**
 * @file
 * Template file to style output.
 */
?>
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="@YUDLbot" />
<meta name="twitter:title" content="<?php print ("{$object->label}"); ?>" />
<meta property="og:url" content="https://digital.library.yorku.ca/<?php print ("islandora/object/{$object->id}"); ?>" />
<meta name="twitter:image" content="https://digital.library.yorku.ca/<?php print ("islandora/object/{$object->id}/datastream/TN/view.jpg"); ?>" />
<?php if(isset($viewer)): ?>
  <div id="book-viewer">
    <?php print $viewer; ?>
  </div>
<?php endif; ?>

<?php if($display_metadata === 1): ?>
  <div class="islandora-book-metadata">
    <?php print $description; ?>
    <?php if($parent_collections): ?>
  <div>
    <?php if (isset($islandora_book)): ?>
      <h2><?php print t('Download'); ?></h2>
        <ul>
          <li>PDF: <?php print $islandora_book; ?>
        </ul>
       <?php endif; ?>
    <h2><?php print t('In collections'); ?></h2>
    <ul>
      <?php foreach ($parent_collections as $collection): ?>
        <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <?php print $metadata; ?>
  </div>
<?php endif; ?>

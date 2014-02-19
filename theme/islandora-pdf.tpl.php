<?php

/**
 * @file
 * This is the template file for the pdf object
 *
 * @TODO: Add documentation about this file and the available variables
 */
?>

<div class="islandora-pdf-object islandora">
  <div class="islandora-pdf-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>

      <div class="islandora-pdf-content">

	 <?php print $pdf_viewer; ?>
      </div>
    <?php endif; ?>
  </div>
  <fieldset class="collapsible collapsed islandora-pdf-metadata">
  <h3 class="islandora-image-details">Details</h3>
    <div class="fieldset-wrapper">
      <dl class="islandora-inline-metadata islandora-pdf-fields">
        <?php $row_field = 0; ?>
        <?php foreach ($dc_array as $key => $value): ?>
          <dt class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
            <?php print $value['label']; ?>
          </dt>
          <dd class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
            <?php print $value['value']; ?>
          </dd>
          <?php $row_field++; ?>
        <?php endforeach; ?>
      </dl>
    </div>
  </fieldset>
</div>

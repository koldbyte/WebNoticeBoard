        <div class="span9">
          <div class="row-fluid">
            <div class="span1">
              	<?php echo $row["id"]; ?>
            </div><!--/span-->
            <div class="span6">
              <h2><?php echo $row["title"]; ?></h2>
            </div><!--/span-->
            <div class="span2">
              <p><?php echo $row["date"]; ?></p>
            </div><!--/span-->
          </div><!--/row-->
      <?php if (!isset($content)){ 
      ?>
          <div class="row-fluid">
            <div class="span9">
              <p><?php echo $row["description"]; ?></p>
              <p><a class="btn" href="<?php echo $url; ?>">View Notice &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
      <?php }
          else {
          ?>
           <div class="row-fluid">
            <div class="span9">
              <p><?php echo $row["description"]; ?></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span9">
              <p><?php echo $content ?></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span9">
              <p><?php echo $file; ?></p>
            </div><!--/span-->
          </div><!--/row-->
          <?php
          }
          ?>
        </div><!--/span-->
      </div><!--/row-->


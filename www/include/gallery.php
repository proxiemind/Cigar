<div class="row center">
    <ul>
        <?php
            $dirname = "../skins/";
            $images = scandir($dirname);
            $ignore = array(".", "..");
            foreach($images as $curimg) {
                if (!in_array($curimg, $ignore) && strtolower(pathinfo($curimg, PATHINFO_EXTENSION)) == "png") {
        ?>
        <li class="skin" onclick="skinSelection(this);" data-dismiss="modal">
            <div class="circular" style='background-image: url("./<?php echo $dirname.$curimg ?>")'></div>
            <h4 class="title"><?php echo pathinfo($curimg, PATHINFO_FILENAME); ?></h4>
        </li>
        <?php
                }
            }                 
        ?>
    </ul>
</div>
<?php
require_once("Rate.php");
$rate = new Rate();
$result = $rate->getAllPost();
if (!empty($result)) {
    foreach ($result as $tutorial) {
?>
        <tr>
            <td valign="top">
                <div class="feed_title"><?php echo $tutorial["title"]; ?></div>
                <div id="tutorial-<?php echo $tutorial["id"]; ?>">
                    <input type="hidden" name="rating" id="rating" value="<?php echo $tutorial["rating"]; ?>" />
                    <ul onMouseOut="resetRating(<?php echo $tutorial["id"]; ?>);">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $selected = "";
                            if (!empty($tutorial["rating"]) && $i <= $tutorial["rating"]) {
                                $selected = "selected";
                            }
                        ?>
                            <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $tutorial["id"]; ?>);" onmouseout="removeHighlight(<?php echo $tutorial["id"]; ?>);" onClick="addRating(this,<?php echo $tutorial["id"]; ?>);">★</li>
                        <?php }  ?>
                        <ul>
                </div>
                <div><?php echo $tutorial["description"]; ?></div>
            </td>
        </tr>
<?php }
} ?>
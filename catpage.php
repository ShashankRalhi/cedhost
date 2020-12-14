<?php
include("header.php");

$id = $_GET['id'];
?>
<div>
    <form>
        <div class="form-group">
            <label>SELECT CATEGORY</label>
            <?php
            $row1 = $pdt->fetchcategory($obj->conn);
            if (isset($row1)) {
                foreach ($row1 as $key => $row) {

                    if ($row['id'] != 1) {
            ?>
                        <a type="button" class="btn btn-default btn-rounded mb-4" href="catpage.php?id=<?php echo $row['id']; ?>"><?php echo $row['prod_name']; ?></a>
            <?php
                    }
                }
            }
            ?>
        </div>
    </form>
    <div>
        <?php echo $id; ?>
    </div>
</div>
<?php include("footer.php"); ?>
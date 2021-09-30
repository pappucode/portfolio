<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Team.php'; ?>

<?php
if (!isset($_GET['sliderid']) || $_GET['sliderid'] == "" || !is_numeric($_GET['sliderid'])) {
    echo "<script>window.location='sliderlist.php'</script>";
} else{
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['sliderid']);
}

$tm = new Team();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $updateSlider = $tm->updateSlider($_POST, $_FILES, $id);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update gallery image</h2>
        <div class="block">
            <?php
            if (isset($updateSlider)) {
                echo $updateSlider;
            }
            ?>
            <?php
            $getslider = $tm->getSliderById($id);
            if ($getslider) {
            while ($result = $getslider->fetch_assoc()) {
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">

                    <tr>
                        <td>
                            <label>Upload Image</label>
                        </td>
                        <td>
                            <img src="<?php echo $result['image']; ?>" height="100px" width="140px"/><br/>
                            <input type="file" name="image"/>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<!--<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>-->
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>



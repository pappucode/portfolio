<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Team.php'; ?>

<?php
$tm = new Team();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $insertImage = $tm->insertImage($_POST, $_FILES);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Image</h2>
        <div class="block">
            <?php
            if (isset($insertImage)) {
                echo $insertImage;
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">

                    <tr>
                        <td>
                            <label>Upload Image</label>
                        </td>
                        <td>
                            <input type="file" name="image"/>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
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



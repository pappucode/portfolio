<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Team.php'; ?>

<?php
if (!isset($_GET['mamid']) || $_GET['mamid'] == "" || !is_numeric($_GET['mamid'])) {
    echo "<script>window.location='memberlist.php'</script>";
} else{
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['mamid']);
}

$tm = new Team();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $updateteam = $tm->updateTeam($_POST, $_FILES, $id);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Team Member</h2>
        <div class="block">
            <?php
            if (isset($updateteam)) {
                echo $updateteam;
            }
            ?>
            <?php
            $getmember = $tm->getMemberById($id);
            if ($getmember) {
            while ($result = $getmember->fetch_assoc()) {
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">

                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $result['name'];?>" class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Title</label>
                        </td>
                        <td>
                            <input type="text" name="title" value="<?php echo $result['title'];?>" class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Short Description</label>
                        </td>
                        <td>
                            <input type="text" name="shortDescription" value="<?php echo $result['shortDescription'];?>" class="medium" />
                        </td>
                    </tr>

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
                        <td>
                            <label>Facebook</label>
                        </td>
                        <td>
                            <input type="text" name="fb" value="<?php echo $result['fb'];?>" class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Twitter</label>
                        </td>
                        <td>
                            <input type="text" name="tw" value="<?php echo $result['tw'];?>" class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>LinkedIn</label>
                        </td>
                        <td>
                            <input type="text" name="ln" value="<?php echo $result['ln'];?>" class="medium" />
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



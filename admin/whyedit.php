<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Why.php'; ?>
<?php

if (!isset($_GET['whyid']) || $_GET['whyid'] == "" || !is_numeric($_GET['whyid'])) {
    echo "<script>window.location='whylist.php'</script>";
} else{
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['whyid']);
}

$why = new Why();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $updateWhy = $why->updateWhy($title, $description, $id);
}
?>

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Update Why Us</h2>
            <div class="block copyblock">
                <?php
                if (isset($updateWhy)) {
                    echo $updateWhy;
                }
                ?>
                <?php
                $getWhy = $why->getWhyById($id);
                if ($getWhy){
                    while ($result = $getWhy->fetch_assoc()){
                    ?>

                <form action="" method="post">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" name="title" value="<?php echo $result['title'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea class="tinymce" name="description"> <?php echo $result['description'];?></textarea>
                            </td>
                        </tr>
                        <tr>
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
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>
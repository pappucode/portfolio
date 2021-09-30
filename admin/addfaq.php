<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Faq.php'; ?>
<?php
$faq = new Faq();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $insertFaq = $faq->addFaq($title, $description);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New FAQ</h2>
               <div class="block copyblock">
                   <?php
                   if (isset($insertFaq)) {
                       echo $insertFaq;
                   }
                   ?>
                 <form action="addfaq.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="title" placeholder="Enter FAQ title..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea class="tinymce" name="description"></textarea>
                            </td>
                        </tr>
						<tr> 
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
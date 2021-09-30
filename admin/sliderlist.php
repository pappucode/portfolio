<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Team.php'; ?>
<?php include_once '../helpers/Format.php'; ?>
<?php
$tm = new Team();
$fm = new Format();
?>
<?php
if (isset($_GET['delslider'])) {
    $id            = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delslider']);
    $deleteSlider = $tm->deleteSliderById($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Gallery Image List</h2>
        <div class="block">
            <?php
            if (isset($deleteSlider)) {
                echo $deleteSlider;
            }
            ?>
            <table class="data display datatable" id="example">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $getImage = $tm->getAllImage();
                if($getImage){
                    $i = 0;
                    while ($result = $getImage->fetch_assoc()){
                        $i++
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i;?></td>
                            <td><img src="<?php echo $result['image'];?>" height="70px" width="90px"></td>
                            <td><a href="slideredit.php?sliderid=<?php echo $result['id'];?>">Edit</a> ||
                                <a onclick="return confirm('Are you sure to Delete!!')" href="?delslider=<?php echo $result['id'];?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>

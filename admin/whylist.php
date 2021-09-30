<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include '../classes/Why.php'; ?>
<?php
$why = new Why();

if (isset($_GET['delwhy'])){
    $id        = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delwhy']);
    $delwhy = $why->delWhyById($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Why Us List</h2>
        <div class="block">
            <?php
            if(isset($delwhy)){
                echo $delwhy;
            }
            ?>
            <table class="data display datatable" id="example">
                <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $getWhy = $why->getAllWhy();
                if ($getWhy) {
                    $i = 0;
                    while ($result = $getWhy->fetch_assoc()) {
                        $i++;
                        ?>

                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['title']; ?></td>
                            <td><?php echo $result['description']; ?></td>
                            <td><a href="whyedit.php?whyid=<?php echo $result['id'];?>">Edit</a> ||
                                <a onclick="return confirm('Are you sure to delete!!')" href="?delwhy=<?php echo $result['id'];?>">Delete</a></td>
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
<?php include 'inc/footer.php'; ?>


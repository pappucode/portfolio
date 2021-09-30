<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include '../classes/Faq.php'; ?>
<?php
$faq = new Faq();

if (isset($_GET['delfaq'])){
    $id        = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delfaq']);
    $delfaq = $faq->delFaqById($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Faq List</h2>
        <div class="block">
            <?php
            if(isset($delfaq)){
                echo $delfaq;
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
                $getFaq = $faq->getAllFaq();
                if ($getFaq) {
                    $i = 0;
                    while ($result = $getFaq->fetch_assoc()) {
                        $i++;
                        ?>

                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['title']; ?></td>
                            <td><?php echo $result['description']; ?></td>
                            <td><a href="faqedit.php?faqid=<?php echo $result['id'];?>">Edit</a> ||
                                <a onclick="return confirm('Are you sure to delete!!')" href="?delfaq=<?php echo $result['id'];?>">Delete</a></td>
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
<?php
include 'inc/footer.php'; ?>


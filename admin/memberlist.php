<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Team.php'; ?>
<?php include_once '../helpers/Format.php'; ?>
<?php
$tm = new Team();
$fm = new Format();
?>
<?php
if (isset($_GET['delmam'])) {
    $id            = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delmam']);
    $deletemember = $tm->delMemberById($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Team Member List</h2>
        <div class="block">
            <?php
            if (isset($deletemember)) {
                echo $deletemember;
            }
            ?>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Title</th>
					<th>Description</th>
                    <th>Image</th>
					<th>FB</th>
					<th>TW</th>
					<th>LN</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
            $getmember = $tm->getAllTeamMember();
            if($getmember){
                $i = 0;
                while ($result = $getmember->fetch_assoc()){
                    $i++
            ?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $result['name'];?></td>
					<td><?php echo $result['title'];?></td>
					<td><?php echo $fm->textShorten($result['shortDescription'],50);?></td>
					<td><img src="<?php echo $result['image'];?>" height="40px" width="60px"></td>
					<td><?php echo $result['fb'];?></td>
					<td><?php echo $result['tw'];?></td>
					<td><?php echo $result['ln'];?></td>
					<td><a href="memberedit.php?mamid=<?php echo $result['id'];?>">Edit</a> ||
                        <a onclick="return confirm('Are you sure to Delete!!')" href="?delmam=<?php echo $result['id'];?>">Delete</a></td>
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

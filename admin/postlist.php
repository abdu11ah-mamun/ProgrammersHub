<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10"> 
<div class="box round first grid">
<h2>Post List</h2> 
<div class="block">
<table class="data display datatable" id="example">
<thead>
	<tr>
<th widht="5%">No.</th>
<th widht="15%">Post Title</th>
<th widht="15%">Description</th>
<th widht="10%">Category</th>
	<th widht="10%">Image</th>
	<th widht="10%">Author</th>
	<th widht="10%">Tags</th>
	<th widht="15%">Date</th>
<th widht="15%">Action</th>
</tr>
</thead>
<tbody>

<tr class="odd gradeX">
<td><?php echo $i; ?></td>
<td><?php echo $result['title']; ?></td>
<td><?php echo $fm->textShorten($result['body'],70); ?></td>
<td><?php echo $result['name']; ?></td>
<td><img src="<?php echo $result['image']; ?>" height="40px" widht="60px"></td>
	<td><?php echo $result['author']; ?></td>
	<td><?php echo $result['tags']; ?></td>
	<td><?php echo $fm->formatDate($result['date']); ?></td>

<td><a href="viewpost.php?viewpostid=<?php echo $result['id']; ?>">View</a> 
||<td><a href="editpost.php?editpostid=<?php echo $result['id']; ?>">Edit</a> 
|| <a onclick="return confirm('Are you sure to Delete this post?')" href="?delpostid=<?php echo $result['id']; ?>">Delete</a>


</td> 
</tr>

</tbody>
</table>
</div>

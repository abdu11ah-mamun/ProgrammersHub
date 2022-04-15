<?php include'inc/header.php';?>

<div class="contentsection contemplete clear">
<div class="maincontent clear">
<div class="about">
	
	<h2><?php echo $result['title']?></h2>
	<h4><?php echo $fm->formatDate($result['date']);?>, By <a href="#"><?php echo $result['author'];?></a></h4>
	<img src="admin/<?php echo $result['image']?>" alt="post image"/>
	<?php echo $result['body']?>
	
	<div class="relatedpost clear">
		<h2>Related articles</h2>
		<?php
			$catid= $result['cat'];
			$queryrelated = "SELECT * FROM tbl_post where cat= '$catid' order by rand() limit 6";
			$relatedpost=$db->select($queryrelated);
			if($relatedpost){
				while($rresult=$relatedpost->fetch_assoc()){

		?>
		<a href="post.php?id=<?php echo $rresult['id'];?>">
			<img src="admin/<?php echo $rresult['image'];?>">
		</a>
		<?php } }else{
			echo "No related post avaiable right now!";
		}?>
	</div>

	<?php   else{
			header('Location:404.php');
		}
	?>
</div>

</div>
<?php include'inc/sidebar.php'; ?>
<?php include'inc/footer.php'; ?>	
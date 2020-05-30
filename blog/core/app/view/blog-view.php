<?php
$jobs  = PostData::getAllActive();
?>


<?php if(count($jobs)>0):?>

<table class="table">
<?php foreach($jobs as $jb):?>
	<tr>
	<td style="width: 200px; ">
		<?php if($jb->image!=""):?>
			<img src="admin/uploads/<?php echo $jb->image; ?>" class="img-responsive" style="width: 200px; ">
		<?php endif; ?>
	</td>
		<td>

			<h4><?php echo $jb->title; ?></h4>
			<p><?php echo $jb->brief; ?></p>
			<p><?php echo CategoryData::getById($jb->category_id)->name; ?></p>
			<a href="./?view=post&id=<?php echo $jb->id; ?>" class="btn btn-primary">Llegir més</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hi han articles creats per el moment!</p>
<?php endif; ?>

</div>
</div>

</div>
</div>
</div>
</html>

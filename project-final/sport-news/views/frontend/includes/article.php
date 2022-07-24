<article class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
	<figure>
		<a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>">
			<img src="<?php echo('images/post/'.$value['thumbnail']) ;?>" alt="Image" class="img-responsive">
		</a>
	</figure>
	<span class="fh5co-meta">
		<a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>">
		<?php $code = $value['category_id'];
			foreach ($categories as $key => $value2) {
				if ($value2['id'] == $code) {
					echo $value2['name'];
				}
			}
		?>
		</a>
	</span>
	<h4 class="fh5co-article-title"><a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></h4>
	<span class="fh5co-meta fh5co-date"><?php echo $value['created_at']; ?></span>
</article>
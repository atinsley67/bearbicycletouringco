<div class="pageBanner">
  <img width="1000" height="200" src="static/images/aboutBanner.jpg" alt="About Bear Bicycle Touring Co. banner"/>
</div>
<div class="mainContent">

<link type="text/css" rel="stylesheet" href="static/css/blog.css" />
<h1>Blog</h1>

<?php foreach($posts as $p):?>
	<div class="post">
		<h2><a href="<?php echo "blog/".$p->url?>"><?php echo $p->title ?></a></h2>

		<div class="date"><?php echo date('d F Y', $p->date)?></div>

		<?php echo substr(strip_tags($p->body), 0, 150). '...'?>
	</div>
<?php endforeach;?>

<?php if ($has_pagination['prev']):?>
	<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
<?php endif;?>

<?php if ($has_pagination['next']):?>
	<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
<?php endif;?>

<p style="clear: both;">

</div>
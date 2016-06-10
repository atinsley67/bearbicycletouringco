<div class="pageBanner">
  <img width="1000" height="200" src="static/images/inWoods.jpg" alt="Bear Bicycle Touring Co. blog banner"/>
</div>
<div class="mainContent">

<link type="text/css" rel="stylesheet" href="static/css/blog.css" />

<?php include 'static/rhLinks.html'?>

<h1>Blog</h1>

<?php foreach($posts as $p):?>
	<div class="post">
		<img src="<?php echo "static/blog/images/".$p->imgName."_small.jpg"?>" alt="Blog small image" height="180px" width= "180px" style="float: left; margin: 0px 12px 0px 0px;"/>
		<h2><a href="<?php echo "blog/".$p->url?>"><?php echo $p->title ?></a></h2>

		<div class="date"><?php echo date('d F Y', $p->date)?></div>
		<div style="display:inline; color:#ccc"> | by </div>
		<a href="../../../blog?author=<?php echo $p->author_short ?>"><?php echo $p->author_full ?>
			<img src="../../../static/blog/images/<?php echo $p->author_short ?>.jpg" alt="Authors image" style="width:30px; vertical-align:middle; margin: 0px 0px 5px 10px"/>
		</a>

		<p>
		  <?php echo substr(strip_tags($p->body), 0, 150). '...'?>
		  <a href="<?php echo "blog/".$p->url?>" class="moreLink">[read more]</a></h2>
		</p>
	    <p style="clear: both;">
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
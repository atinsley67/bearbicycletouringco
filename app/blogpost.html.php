
<div class="pageBanner">
  <img width="800" height="400" src="<?php echo "../../../static/blog/images/".$p->imgName."_large.jpg"?>" alt="Blog post header image"/>
</div>

<div class="mainContent">

<link type="text/css" rel="stylesheet" href="../../../static/css/blog.css" />

<div class="post">

	<img src="../../../static/blog/images/<?php echo $p->author_short ?>.jpg" alt="Authors image" style="float:left; margin:20px 20px 20px 0px"/>

	<h2><?php echo $p->title ?></h2></h2>

	<div class="date"><?php echo date('d F Y', $p->date)?></div> <div style="display:inline; color:#ccc"> | by </div> <a href="../../../blog?author=<?php echo $p->author_short ?>"><?php echo $p->author_full?> </a>

	<p style="clear: both;">

	<?php echo $p->body?>

</div>

<p style="clear: both;">

</div>
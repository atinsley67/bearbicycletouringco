<link type="text/css" rel="stylesheet" href="<?php echo $rel_url ?>/static/css/blog.css" />
<?php $is_blog_post = false; include "../app/top.html.php" ?>
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>

<?php if ($is_a_post) {?>

<div class="pageBanner">
          <?php if (!empty($p->image)) { ?>
            <div class="featured-image">
                <a href="<?php echo $p->url ?>"><img src="<?php echo $p->image; ?>" alt="<?php echo $p->title ?>"/></a>
            </div>
        <?php } else {?>
            <img width="1000" height="200" src="<?php echo $rel_url ?>static/images/inWoods.jpg" alt="Bear Bicycle Touring Co. blog banner"/>
        <?php }?>
</div>
<div class="mainContent">

<?php } else { ?>

<div class="pageBanner">
  <img width="1000" height="200" src="<?php echo $rel_url ?>static/images/inWoods.jpg" alt="Bear Bicycle Touring Co. blog banner"/>
</div>
<div class="mainContent">

<h1>Blog</h1>

<?php }?>


<div class="hide">
    <meta content="<?php echo blog_title() ?>" itemprop="name"/>
    <meta content="<?php echo blog_description() ?>" itemprop="description"/>
</div> 

<?php echo content() ?>

</div>

<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
<p style="clear: both;">
<?php include "../app/bottom.html.php"; ?>
<?php if (!empty($breadcrumb)): ?>
    <div class="breadcrumb"><?php echo $breadcrumb ?></div>
<?php endif; ?>
<?php if (config('category.info') === 'true'):?>
    <?php if (!empty($category)): ?>
        <div class="category">
            <h2 class="category-title"><?php echo $category->title;?></h2>
            <div class="category-content">                                   
                <?php echo $category->body; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php $i = 0; $len = count($posts); ?>
<?php foreach ($posts as $p): ?>
    <?php if ($i == 0) {
        $class = 'post first';
    } elseif ($i == $len - 1) {
        $class = 'post last';
    } else {
        $class = 'post';
    }
    $i++; ?>
        <div class="post">

             <?php if (!empty($p->image)) { ?>
                <div class="list-image">
                    <a href="<?php echo $p->url ?>"><img src="<?php echo $p->image; ?>" alt="<?php echo $p->title ?>"/></a>
                </div>
            <?php } ?>
            <?php if (!empty($p->link)) { ?>
                <h2 class="title-index" itemprop="name"><a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->title ?> &rarr;</a></h2>
            <?php } else { ?>
                <h2 class="title-index" itemprop="name"><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></h2>
            <?php } ?>
            <div class="date">
                <span itemprop="datePublished"><?php echo date('d F Y', $p->date) ?></span> - Posted by
                <img src="../../../static/blog/images/<?php echo $p->author ?>.jpg" alt="Authors image" style="width:30px; vertical-align:middle; margin: 0px 0px 5px 10px"/>
            </div>


            <div class="teaser-body" itemprop="articleBody">
                <?php echo get_thumbnail($p->body) ?>
                <?php echo get_teaser($p->body, $p->url) ?>
                <?php if (config('teaser.type') === 'trimmed'):?><a href="<?php echo $p->url;?>">Read more</a><?php endif;?>
            </div>
            <p style="clear: both;">
        </div>

   

<?php endforeach; ?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
    <div class="pager">
        <?php if (!empty($pagination['prev'])): ?>
            <a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
        <?php endif; ?>
        <?php if (!empty($pagination['next'])): ?>
            <a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>

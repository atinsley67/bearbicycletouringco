<?php
/* General Blog Functions */

include("./app/includes/Parsedown.php");

function get_post_names(){

	static $_cache = array();

	if(empty($_cache)){

		// Get the names of all the
		// posts (newest first):

		$_cache = array_reverse(glob('static/blog/*.md'));
	}

	return $_cache;
}

// Return an array of posts.
// Can return a subset of the results
function get_posts($page = 1, $perpage = 0){

	if($perpage == 0){
		$perpage = $posts_perpage;
	}

	$posts = get_post_names();

	// Extract a specific page with results
	$posts = array_slice($posts, ($page-1) * $perpage, $perpage);

	$tmp = array();

	// Create a new instance of the markdown parser
	$md = new Parsedown();

	foreach($posts as $k=>$v){
		$post = new stdClass;

		// Extract the date
		$arr = explode('_', $v);
		$post->date = strtotime(str_replace('static/blog/','',$arr[0]));

		// The post URL
		$post->url = $site_url.date('Y/m', $post->date).'/'.str_replace('.md','',$arr[1]);

		$post->imgName = str_replace('.md', '', str_replace('static/blog/','',$v));

		$contents = file_get_contents($v);
		preg_match('~\[author=(.*?)]~', $contents, $output);

		$contents = preg_replace("/\[author\=.*\]/", "", $contents);

		$post->author_full = $output[1];
		if (empty($post->author_full ) ) {
			$post->author_full = "Bear Bicycle Touring";
		}

		$author_full_arr = explode(' ',trim($post->author_full));
		$post->author_short = $author_full_arr[0];

		// Get the contents and convert it to HTML
		$contents = $md->text($contents);

		// Extract the title and body
		$arr = explode('</h1>', $contents);
		$post->title = str_replace('<h1>','',$arr[0]);
		$post->body = $arr[1];

		$tmp[] = $post;
	}

	return $tmp;
}

// Find post by year, month and name
function find_post($year, $month, $name){

	foreach(get_post_names() as $index => $v){
		if( strpos($v, "$year-$month") !== false && strpos($v, $name.'.md') !== false){

			// Use the get_posts method to return
			// a properly parsed object

			$arr = get_posts($index+1,1);
			return $arr[0];
		}
	}

	return false;
}

// Helper function to determine whether
// to show the pagination buttons
function has_pagination($page = 1, $posts_perpage){
	$total = count(get_post_names());

	return array(
		'prev'=> $page > 1,
		'next'=> $total > $page*$posts_perpage
	);
}

// The not found error
function not_found(){
	error(404, render('404', null, false));
}

// Turn an array of posts into an RSS feed
function generate_rss($posts){

	$feed = new Feed();
	$channel = new Channel();

	$channel
		->title(config('blog.title'))
		->description(config('blog.description'))
		->url(site_url())
		->appendTo($feed);

	foreach($posts as $p){

		$item = new Item();
		$item
			->title($p->title)
			->description($p->body)
			->url($p->url)
			->appendTo($channel);
	}

	echo $feed;
}

// Turn an array of posts into a JSON
function generate_json($posts){
	return json_encode($posts);
}

?>
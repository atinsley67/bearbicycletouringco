<?php


// include("config.php");
include("blog.php");


// router.php
$uri =strtok($_SERVER["REQUEST_URI"],'?');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (preg_match('/\/?mailinglist\/subscribe$/', $uri )) {
    	$email_add = $_POST["email"];
    	$rel_url = "../../";
    	include("./app/top.html.php");

    	if (filter_var($email_add, FILTER_VALIDATE_EMAIL)) {
    		if (mail('bearbicycletouring@gmail.com', '[BBTC Mailing List]', 'Subscribe '.$email_add)) {
    			echo "<h1>Thanks for signing up!</h1>";
    		} else {
    			echo "<h1>We had a problem signing you up.</h1>";
    		}
    	} else {
    		echo "<h1>Oops! That didn't look like a valid email adddress.</h1>";
    	}
    } elseif (preg_match('/\/?contactform\/submit$/', $uri )) {
    	$rel_url = "../../";
    	$name = $_POST["name"];
    	$email_add = $_POST["email"];
    	$which_tour = $_POST["whichTour"];
    	$body = $_POST["body"];

    	$contact_body = "Name: ".$name."\r\nEmail: ".$email_add."\r\nWhichTour: ".$which_tour."\r\nMessage: ".$body;
    	include("./app/top.html.php");

    	if (mail('bearbicycletouring@gmail.com', '[BBTC Contact Form]', $contact_body)) {
    		echo "<h1>Thanks for getting in touch!</h1>";
    		echo "<p>We'll respond as soon as possible</p>";
    	} else {
    		echo "<h1>We had a problem submitting your contact request.</h1>";
    	}


    } else {
    	include("./app/top.html.php");
    	echo "<h1>Opps! We don't have that page.</h1>";
    	echo "<p>" . $uri . "</p>";
    }
    include("./app/bottom.html.php");

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if (preg_match('/^\/static\/.*/', $uri) || preg_match('/.*\.ico/', $uri) ){
	    return false;    // serve the requested resource as-is.
	} else {
	
		$rel_url = "";
		$is_blog_post = false;

		//if (preg_match('/^\/blog\/\d{4}\/\d{2}\/.*/', $uri)) {
			//blog_showpost();

		//} else
		//if (preg_match('/^\/blog*/', $uri)) {
		//	include("./app/top.html.php");
		//	blog_mainpage();
		//	include("./app/bottom.html.php");
		//} else */
		if (empty($uri) || $uri == "/") {
			include("./app/top.html.php");
			include("./static/indexContent.html");
			include("app/bottom.html.php");
		} elseif (is_file("./static/" . $uri . "Content.html")) {
			include("./app/top.html.php");
	    	include("./static/" . $uri . "Content.html");
	    	include("app/bottom.html.php");
	    } else {
	    	echo "<h1>Opps! We don't have that page.</h1>";
	    	echo "<p>" . $uri . "</p>";
	    	include("app/bottom.html.php");
	    }
	}
} else {
	echo "<h1>Opps! We don't have that page.</h1>";
}

/*function blog_mainpage() {

	//include("app/includes/htmly/index.php");

	$page = $_GET['page'];
	$page = $page ? (int)$page : 1;

	$posts = get_posts($page, 5);
	$has_pagination = has_pagination($page, 5);

	if(empty($posts) || $page < 1){
 		// a non-existing page
 		echo "<h1>Opps! We don't have that page.</h1>";
 	} else {
	 	include("./app/blogmain.html.php");
 	} 

}


function blog_showpost() {
	$tokens = preg_split('#/#', $_SERVER['REQUEST_URI'], -1, PREG_SPLIT_NO_EMPTY);

	$year = $tokens[1];
	$month = $tokens[2];
	$title = $tokens[3];
	
	$p = find_post($year, $month, $title);

	$is_blog_post = true;
	$rel_url = "../../../";
	include("./app/top.html.php");
	include("./app/blogpost.html.php");
	include("./app/bottom.html.php");
} */

?>
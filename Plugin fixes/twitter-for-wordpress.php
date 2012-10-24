<?php
	/*
    Twitter for WordPress plugin fix, "No public Twitter messages."
    */
    
    /* Change this line from function twitter_messages() */
    $messages = fetch_rss('http://twitter.com/statuses/user_timeline/'.$username.'.rss');

    /* to this line */
	//fed 10:20 AM 24/10/2012
	$messages= fetch_rss('http://api.twitter.com/1/statuses/user_timeline/'.$username.'.rss');
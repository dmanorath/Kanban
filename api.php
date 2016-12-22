<?php
function getPostByLID($lid)
{
	$post_detail = array();

	switch ($lid){
		case $lid:
			$post_detail = array("app_name" => "Web Demo", "app_price" => "Free", "app_version" => "2.0");
			break;
	}

	return $post_detail;
}

function getPostList()
{
	$post_list = array(array("id" => 1, "name" => "Web Demo"), array("id" => 2, "name" => "Audio Countdown"), array("id" => 3, "name" => "The Tab Key"), array("id" => 4, "name" => "Music Sleep Timer"));

	return $post_list;
}

$possible_url = array("getPostList", "get_post");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
	switch ($_GET["action"])
    {
		case "getPostList":
			$value = getPostList();
			break;
		case "get_post":
			if (isset($_GET["id"]))
				$value = getPostByLID($_GET["id"]);
			else
				$value = "Missing argument";
			break;
    }
}

//return JSON array
exit(json_encode($value));
?>

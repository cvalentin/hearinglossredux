<?php require("header.php");

$blogId = '2282749304274760399'; 
$baseApiUrl = 'https://www.googleapis.com/blogger/v3/';
$blogByIdUrlFormat = $baseApiUrl . 'blogs/%s/'; // https://www.googleapis.com/blogger/v3/blogs/{blogId}/
$postUrlFormat = $blogByIdUrlFormat . 'posts/'; // https://www.googleapis.com/blogger/v3/blogs/{blogId}/posts/
$postByIdUrlFormat = $postUrlFormat . "%s";     // https://www.googleapis.com/blogger/v3/blogs/{blogId}/posts/{postId}

class HttpContent { 
    // https://console.developers.google.com/project/gcwhl-blogger/apiui/credential
    // Log in with paige's google account to view the key and related information.
	public $key = 'AIzaSyDuk95h9wdFcgK4WkpyP6I1DtWUCG_zI8Y';
    public $maxResults = 3; // max number of posts in result set
    public $orderBy = 'published'; // most recently published first
}

// make request to blogger API then display "maxResult" most recent blog posts. 
// Use the IP address of the requestor so that we don't hit the API cap easily.
// Blogger API: https://developers.google.com/blogger/docs/3.0/reference/index
// Example how to use: https://developers.google.com/blogger/docs/3.0/using

// This function calls the API and returns the list of blog posts up to "maxResults in HttpContent"
function CallAPI($method, $url, $data)
{
	$url = sprintf("%s?%s", $url, http_build_query($data));
    $curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	
	if ($curl_response === false) {
	    $info = curl_getinfo($curl);
	    curl_close($curl);
	    die('error occured while retrieving blog information');
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
	    die('error occured: ' . $decoded->response->errormessage);
	}
	// echo 'response ok!';
    return $decoded->items;
}

https://developers.google.com/blogger/docs/3.0/reference/posts/list
$postsList = CallAPI("GET", sprintf($postUrlFormat, $blogId), new HttpContent);
?>
		<?php foreach($postsList as $key => $post) { ?>
		<div class="blog-row row">
			<div class="blog-image small-4 column">
				<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=275%C3%97275&w=275&h=275"?>
			</div>
			<div class="blog-text small-8 column">
				<h5><?php echo $post->title; ?></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<p><a href="...">...read more</a></p>
			</div>
		</div>
		<?php } ?>
<?php require("footer.php"); ?>
<?php require("header.php");

// make request to blogger API then display "maxResult" most recent blog posts. 
// Use the IP address of the requestor so that we don't hit the API cap easily.
// Blogger API: https://developers.google.com/blogger/docs/3.0/reference/index
// Example how to use: https://developers.google.com/blogger/docs/3.0/using

$blogId = '2282749304274760399'; 
$baseApiUrl = 'https://www.googleapis.com/blogger/v3/';
$blogByIdUrlFormat = $baseApiUrl . 'blogs/%s/'; // https://www.googleapis.com/blogger/v3/blogs/{blogId}/
$postUrlFormat = $blogByIdUrlFormat . 'posts/'; // https://www.googleapis.com/blogger/v3/blogs/{blogId}/posts/
$postByIdUrlFormat = $postUrlFormat . "%s";     // https://www.googleapis.com/blogger/v3/blogs/{blogId}/posts/{postId}

class HttpContent { 
    // https://console.developers.google.com/project/gcwhl-blogger/apiui/credential
    // Log in with paige's google account to view the key and related information.
	public $key = 'AIzaSyDuk95h9wdFcgK4WkpyP6I1DtWUCG_zI8Y';
    public $maxResults = 5; // max number of posts in result set
    public $orderBy = 'published'; // most recently published first
    public $fetchImages = 'true';
    
    public function __construct() {
    	// set the IP to the IP of the requesting client so we don't hit API limits quickly.
	    $this->userIp = $_SERVER['REMOTE_ADDR'];
	}
}

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

function limitWords($string, $word_limit){
    $allWords = explode(" ", strip_tags($string));
    $limitedWords = implode(" ", array_splice($allWords, 0, $word_limit));
    return $limitedWords;
}


https://developers.google.com/blogger/docs/3.0/reference/posts/list
$postsList = CallAPI("GET", sprintf($postUrlFormat, $blogId), new HttpContent);
?>
		<?php foreach($postsList as $key => $post) 
		{
			$createDate = new DateTime($post->updated);
			$postDate = $createDate->format('m-d-d');
		?>
		<div class="blog-row row">
		<?php
			$hasImages = count($post->images) > 0;
			// $columnStyle;
			if($hasImages){
				$columnStyle = "small-12 medium-6 large-8";
			} else {
				$columnStyle = "small-12 medium-12 large-12";
			}

			if($hasImages)
			{
		?>
			<div class="blog-image-container small-12 medium-6 large-4 column">
				<img src="<?php echo $post->images[0]->url; ?>" />
			</div>
			<?php
			}
			?>
			<div class="blog-text <?php echo $columnStyle ?> column">
				<h4><?php echo $post->title; ?></h4>
				<p class="blog-date">Last Updated: <?php echo $postDate ?> </p>
				<p>
				<?php
					echo limitWords($post->content, 85);
				?>
				...
				</p>
				<p><a href="<?php echo $post->url ?>">...read more</a></p>
			</div>
			<hr>
		</div>
		<?php 
		} 
		?>
<?php require("footer.php"); ?>
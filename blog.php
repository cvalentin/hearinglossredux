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

function CallAPI($method, $url, $data)
{
	$url = sprintf("%s?%s", $url, http_build_query($data));
	
	echo $url;

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
    return $decoded;
}

// https://developers.google.com/blogger/docs/3.0/reference/blogs

$postsList = CallAPI("GET", sprintf($postUrlFormat, $blogId), new HttpContent);
var_export($postsList);
?>

<?php require("footer.php"); ?>
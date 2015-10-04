<?php require("header.php");

$blogId = '2282749304274760399'; 
$baseApiUrl = 'https://www.googleapis.com/blogger/v3/';
$blogByIdUrlFormat = $baseApiUrl . 'blogs/%s/';
$postUrlFormat = $blogByIdUrlFormat . 'posts/';
$postByIdUrlFormat = $postUrlFormat . "%s";

class HttpContent { 
	public $key = 'AIzaSyDuk95h9wdFcgK4WkpyP6I1DtWUCG_zI8Y';
}

// make request to blogger API then display three most recent blog posts. 
// Use the IP address of the requestor so that we don't hit the API cap easily.
// Blogger API: https://developers.google.com/blogger/docs/3.0/reference/index
// Example how to use: https://developers.google.com/blogger/docs/3.0/using

function CallAPI($method, $url, $data = false)
{
    // $curl = curl_init();

    // switch ($method)
    // {
    //     case "POST":
    //         curl_setopt($curl, CURLOPT_POST, 1);

    //         if ($data)
    //             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //         break;
    //     case "PUT":
    //         curl_setopt($curl, CURLOPT_PUT, 1);
    //         break;
    //     default:
    //         if ($data)
    //             $url = sprintf("%s?%s", $url, http_build_query($data));
    // }

    // Optional Authentication:
    // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // $result = curl_exec($curl);
    // curl_close($curl);

    // return $result;

	$url = sprintf("%s?%s", $url, http_build_query($data));
    $curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	
	if ($curl_response === false) {
	    $info = curl_getinfo($curl);
	    curl_close($curl);
	    die('error occured during curl exec. Additional info: ' . var_export($info));
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
	    die('error occured: ' . $decoded->response->errormessage);
	}
	echo 'response ok!';
	var_export($decoded);
    return $decoded;
}

// https://developers.google.com/blogger/docs/3.0/reference/blogs

$blogJson = CallAPI("GET", sprintf($blogByIdUrlFormat, $blogId), new HttpContent);

?>

<?php require("footer.php"); ?>
<?php
// Handle the form submission on the server-side
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $access_token = $_POST["access_token"];
  $page_id = $_POST["page_id"];
  $message = $_POST["post_message"];
  
  // Function to validate the access token
  function validateAccessToken($access_token) {
    $url = "https://graph.facebook.com/v12.0/me?access_token=" . $access_token;
    $options = array(
      "http" => array(
        "header" => "Content-type: application/x-www-form-urlencoded",
        "method" => "GET",
      )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $data = json_decode($response, true);
    if (!empty($data["id"])) {
      return true;
    } else {
      return false;
    }
  }

  // Function to post content on Facebook page
  function post_on_facebook($access_token, $page_id, $message) {
    $url = "https://graph.facebook.com/v12.0/{$page_id}/feed";
    $params = array(
      "access_token" => $access_token,
      "message" => $message
    );
    $options = array(
      "http" => array(
        "header" => "Content-type: application/x-www-form-urlencoded",
        "method" => "POST",
        "content" => http_build_query($params)
      )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    if (!empty($response)) {
      return true;
    } else {
      return false;
    }
  }

  // Perform form validation and posting on Facebook
  if (empty($access_token) || empty($page_id) || empty($message)) {
    echo "Please fill in all fields.";
  } else {
    if (validateAccessToken($access_token)) {
      if (post_on_facebook($access_token, $page_id, $message)) {
        echo "Post created successfully!!!";
      } else {
        echo "Failed to create a post.";
      }
    } else {
      echo "Invalid access token. Please check and try again.";
    }
  }
}
?>

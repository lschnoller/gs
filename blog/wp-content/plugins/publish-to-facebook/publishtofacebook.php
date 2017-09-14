<?php
/*
Plugin Name: Publish To Facebook
Version: 1.0
Plugin URI: http://nothing.golddave.com/?page_id=111
Description: Publishes posts, pages or both to your Facebook Mini-Feed directly from Wordpress.
Author: David Goldstein
Author URI: http://nothing.golddave.com/
*/

/*
Change Log

1.0
  * First public release.
*/

function publish_to_facebook($post_id) {
	$current_options = get_option('publish_to_facebook_options');
	$type = $current_options["type"];
	$post = get_post($post_id);
	$permalink = get_permalink($post_id);
	switch ($type) {
		case "post":
			if ($post->post_type == $type && $post->post_status == 'publish') {
				facebooker($permalink);
			}
			break;
		case "page":
			if ($post->post_type == $type && $post->post_status == 'publish') {
				facebooker($permalink);
			}
			break;
		case "both":
			if (($post->post_type == 'post' | $post->post_type == 'page') && $post->post_status == 'publish') {
				facebooker($permalink);
			}
			break;
		}
}

function facebooker($link){
	$location = "http://www.facebook.com/share.php?u=".$link;
	wp_redirect($location);
	exit();
}

add_action('save_post','publish_to_facebook',10,2);

// Create the options page
function publish_to_facebook_options_page() { 
	$current_options = get_option('publish_to_facebook_options');
	$type = $current_options["type"];
	if ($_POST['action']){ ?>
		<div id="message" class="updated fade"><p><strong>Options saved.</strong></p></div>
	<?php } ?>
	<div class="wrap" id="publish-to-facebook-options">
		<h2>Publish to Facebook Options</h2>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']; ?>">
			<fieldset>
				<legend>Options:</legend>
				<input type="hidden" name="action" value="save_options" />
				<table width="100%" cellspacing="2" cellpadding="5" class="editform">
					<tr>
						<th valign="top" scope="row"><label for="type">Post Type:</label></th>
						<td><select name="type">
						<option value ="post"<?php if ($type == "post") { print " selected"; } ?>>Posts Only</option>
						<option value ="page"<?php if ($type == "page") { print " selected"; } ?>>Pages Only</option>
						<option value ="both"<?php if ($type == "both") { print " selected"; } ?>>Posts and Pages</option>
						</select></td>
					</tr>
				</table>
			</fieldset>
			<p class="submit">
				<input type="submit" name="Submit" value="Update Options &raquo;" />
			</p>
		</form>
	</div>
<?php 
}

function publish_to_facebook_add_options_page() {
	// Add a new menu under Options:
	add_options_page('Publish to Facebook', 'Publish to Facebook', 10, __FILE__, 'publish_to_facebook_options_page');
}

function publish_to_facebook_save_options() {
	// create array
	$publish_to_facebook_options["type"] = $_POST["type"];
	
	update_option('publish_to_facebook_options', $publish_to_facebook_options);
	$options_saved = true;
}

add_action('admin_menu', 'publish_to_facebook_add_options_page');

if (!get_option('publish_to_facebook_options')){
	// create default options
	$publish_to_facebook_options["type"] = 'post';
	
	update_option('publish_to_facebook_options', $publish_to_facebook_options);
}

if ($_POST['action'] == 'save_options'){
	publish_to_facebook_save_options();
}

?>
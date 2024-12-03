<?php
function project_name () {
	add_meta_box(
		'_project_name',
		'نام پروژه',
		'project_name_setting_html',
		'',
		'normal',
		'default',
	);
}

function project_name_setting_html ($post) { ?>
	<label id="project_id">نام پروژه</label>
    <input type="text" name="project_name" value="<?php echo get_post_meta($post->ID, '_project_name_key', 'true') ?>">
<?php
// var_dump($post);
}

function project_name_save ($post_id) {
    if(!get_post_meta($post_id, '_project_name_key', 'true')) {

        $_post_name = sanitize_text_field($_POST['project_name']);

		add_post_meta($post_id, '_project_name_key', $_post_name);
    }else {

        $_post_name = sanitize_text_field($_POST['project_name']);

        update_post_meta($post_id, '_project_name_key', $_post_name);
    }
}

add_action('add_meta_boxes', 'project_name');

add_action('save_post', 'project_name_save');
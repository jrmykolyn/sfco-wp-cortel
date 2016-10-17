<?php
/*
	TODO:
	- Add leading documentation block.
*/


/**
 * ...
 */
function add_cortel_options_page() {
	add_menu_page("Cortel Options", "Cortel Options", "manage_options", "cortel-theme-options", "cortel_options_page", null, 99);
}


/**
 * ...
 */
function cortel_options_page() {
?>
    <div class="wrap">
    <h1>Cortel Options</h1>
    <form method="post" action="options.php">
        <?php
            settings_fields("section");
            do_settings_sections("cortel-theme-options");
            submit_button();
        ?>
    </form>
    </div>
<?php
}


/**
 * ...
 */
function add_cortel_options_sections() {
	add_settings_section("section", "All Settings", null, "cortel-theme-options");

	add_settings_field("footer_message_title", "Footer Message Title", "footer_options_add_message_title", "cortel-theme-options", "section");
    add_settings_field("footer_message_body", "Footer Message Body", "footer_options_add_message_body", "cortel-theme-options", "section");

    register_setting("section", "footer_message_title");
    register_setting("section", "footer_message_body");
}


/**
 * ...
 */
function footer_options_add_message_title() {
	?>
        <input type="text" name="footer_message_title" id="footer_message_title" value="<?php echo get_option('footer_message_title'); ?>" />
    <?php
}


/**
 * ...
 */
function footer_options_add_message_body() {
	?>
        <input type="text" name="footer_message_body" id="footer_message_body" value="<?php echo get_option('footer_message_body'); ?>" />
    <?php
}


add_theme_support( 'post-thumbnails' );
add_action("admin_menu", "add_cortel_options_page");
add_action("admin_init", "add_cortel_options_sections");
?>
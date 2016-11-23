<?php
/*
Plugin Name: Mail Bank
Plugin URI: http://beta.tech-banker.com
Description: Mail Bank reconfigures the wp_mail() function and make it more enhanced.
Author: Tech Banker
Author URI: http://beta.tech-banker.com
Version: 2.0.10
License: GPLv3
*/

if(!defined("ABSPATH")) exit; // Exit if accessed directly
/* Constant Declaration */
if(!defined("MAIL_BANK_FILE")) define("MAIL_BANK_FILE",plugin_basename(__FILE__));
if(!defined("MAIL_BANK_DIR_PATH")) define("MAIL_BANK_DIR_PATH",plugin_dir_path(__FILE__));
if(!defined("MAIL_BANK_PLUGIN_DIRNAME")) define("MAIL_BANK_PLUGIN_DIRNAME", plugin_basename(dirname(__FILE__)));
if(!defined("wp_mail_bank")) define("wp_mail_bank","wp-mail-bank");
if(is_ssl())
{
	if(!defined("tech_banker_url")) define("tech_banker_url","https://tech-banker.com");
	if(!defined("tech_banker_beta_url")) define("tech_banker_beta_url","https://beta.tech-banker.com");
}
else
{
	if(!defined("tech_banker_url")) define("tech_banker_url","http://tech-banker.com");
	if(!defined("tech_banker_beta_url")) define("tech_banker_beta_url","http://beta.tech-banker.com");
}

/*
Function Name: get_users_capabilities_mail_bank
Parameters: No
Description: This function is used to get users capabilities.
Created On: 21-10-2016 15:21
Created By: Tech Banker Team
*/

if(!function_exists("get_users_capabilities_mail_bank"))
{
	function get_users_capabilities_mail_bank()
	{
		global $wpdb;
		$capabilities = $wpdb->get_var
		(
			$wpdb->prepare
			(
				"SELECT meta_value FROM ".mail_bank_meta()."
				WHERE meta_key = %s",
				"roles_and_capabilities"
			)
		);
		$core_roles = array(
			"manage_options",
			"edit_plugins",
			"edit_posts",
			"publish_posts",
			"publish_pages",
			"edit_pages",
			"read"
		);
		$unserialized_capabilities = unserialize($capabilities);
		return isset($unserialized_capabilities["capabilities"]) ? $unserialized_capabilities["capabilities"] : $core_roles;
	}
}

/*
Function Name: install_script_for_mail_bank
Parameters: No
Description: This function is used to create Tables in Database.
Created On: 15-06-2016 09:52
Created By: Tech Banker Team
*/

if(!function_exists("install_script_for_mail_bank"))
{
	function install_script_for_mail_bank()
	{
		global $wpdb;
		if(is_multisite())
		{
			$blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
			foreach($blog_ids as $blog_id)
			{
				switch_to_blog($blog_id);
				$version = get_option("mail-bank-version-number");
				if($version < "2.0.2")
				{
					if(file_exists(MAIL_BANK_DIR_PATH."lib/install-script.php"))
					{
						include MAIL_BANK_DIR_PATH."lib/install-script.php";
					}
				}
				restore_current_blog();
			}
		}
		else
		{
			$version = get_option("mail-bank-version-number");
			if($version < "2.0.2")
			{
				if(file_exists(MAIL_BANK_DIR_PATH."lib/install-script.php"))
				{
					include_once MAIL_BANK_DIR_PATH."lib/install-script.php";
				}
			}
		}
	}
}

/*
Function Name: get_others_capabilities_mail_bank
Parameters: No
Description: This function is used to get all the roles available in WordPress
Created On: 21-10-2016 12:06
Created By: Tech Banker Team
*/

if(!function_exists("get_others_capabilities_mail_bank"))
{
	function get_others_capabilities_mail_bank()
	{
		$user_capabilities = array();
		if(function_exists("get_editable_roles"))
		{
			foreach(get_editable_roles() as $role_name => $role_info)
			{
				foreach($role_info["capabilities"] as $capability => $_)
				{
					if(!in_array($capability,$user_capabilities))
					{
						array_push($user_capabilities,$capability);
					}
				}
			}
		}
		else
		{
			$user_capabilities = array(
				"manage_options",
				"edit_plugins",
				"edit_posts",
				"publish_posts",
				"publish_pages",
				"edit_pages",
				"read"
			);
		}

		return $user_capabilities;
	}
}

/*
Function Name: check_user_roles_mail_bank
Parameters: Yes($user)
Description: This function is used for checking roles of different users.
Created On: 19-10-2016 03:40
Created By: Tech Banker Team
*/

if(!function_exists("check_user_roles_mail_bank"))
{
	function check_user_roles_mail_bank($user = null)
	{
		$user = $user ? new WP_User( $user ) : wp_get_current_user();
		return $user->roles ? $user->roles[0] : false;
	}
}
/*
Function Name: mail_bank
Parameters: No
Description: This function is used to return Parent Table name with prefix.
Created On: 15-06-2016 10:44
Created By: Tech Banker Team
*/

if(!function_exists("mail_bank"))
{
	function mail_bank()
	{
		global $wpdb;
		return $wpdb->prefix."mail_bank";
	}
}

/*
Function Name: mail_bank_meta
Parameters: No
Description: This function is used to return Meta Table name with prefix.
Created On: 15-06-2016 10:44
Created By: Tech Banker Team
*/

if(!function_exists("mail_bank_meta"))
{
	function mail_bank_meta()
	{
		global $wpdb;
		return $wpdb->prefix."mail_bank_meta";
	}
}


/*
Function Name: mail_bank_action_links
Parameters: Yes
Description: This function is used to create link for Pro Editions.
Created On: 19-10-2016 17:36
Created By: Tech Banker Team
*/
if(!function_exists("mail_bank_action_links"))
{
 function mail_bank_action_links($plugin_link)
 {
	$plugin_link[] = "<a href=\"http://beta.tech-banker.com/products/mail-bank/\" style=\"color: red; font-weight: bold;\" target=\"_blank\">Go Pro!</a>";
	return $plugin_link;
 }
}

$version = get_option("mail-bank-version-number");
if($version == "2.0.2")
{
	/* admin_enqueue_scripts for backend_js_css_for_mail_bank
	Description: This hook is used for calling css and js files for backend
	Created On: 26-09-2016 11:18
	Created by: Tech Banker Team
	*/

	if(is_admin())
	{
		if(!function_exists("backend_js_css_for_mail_bank"))
		{
			function backend_js_css_for_mail_bank($hook)
			{
				$pages_mail_bank = array(
					"mb_email_configuration",
					"mb_test_email",
					"mb_email_logs",
					"mb_settings",
					"mb_roles_and_capabilities",
					"mb_feedbacks",
					"mb_system_information",
					"mb_premium_editions"
				);
				foreach ($pages_mail_bank as $page_id => $page)
				{
					if(strpos($hook,$page) !== false)
					{
						wp_enqueue_script("jquery");
						wp_enqueue_script("jquery-ui-datepicker");
						wp_enqueue_script("mail-bank-bootstrap.js",plugins_url("assets/global/plugins/custom/js/custom.js",__FILE__));
						wp_enqueue_script("mail-bank-jquery.validate.js",plugins_url("assets/global/plugins/validation/jquery.validate.js",__FILE__));
						wp_enqueue_script("mail-bank-jquery.datatables.js",plugins_url("assets/global/plugins/datatables/media/js/jquery.datatables.js",__FILE__));
						wp_enqueue_script("mail-bank-jquery.fngetfilterednodes.js",plugins_url("assets/global/plugins/datatables/media/js/fngetfilterednodes.js",__FILE__));
						wp_enqueue_script("mail-bank-toastr.js",plugins_url("assets/global/plugins/toastr/toastr.js",__FILE__));

						wp_enqueue_style("mail-bank-simple-line-icons.css", plugins_url("assets/global/plugins/icons/icons.css",__FILE__));
						wp_enqueue_style("mail-bank-components.css", plugins_url("assets/global/css/components.css",__FILE__));
						wp_enqueue_style("mail-bank-custom.css", plugins_url("assets/admin/layout/css/mail-bank-custom.css",__FILE__));
						if(is_rtl())
						{
							wp_enqueue_style("mail-bank-bootstrap.css", plugins_url("assets/global/plugins/custom/css/custom-rtl.css",__FILE__));
							wp_enqueue_style("mail-bank-layout.css", plugins_url("assets/admin/layout/css/layout-rtl.css",__FILE__));
							wp_enqueue_style("mail-bank-tech-banker-custom.css", plugins_url("assets/admin/layout/css/tech-banker-custom-rtl.css",__FILE__));
						}
						else
						{
							wp_enqueue_style("mail-bank-bootstrap.css", plugins_url("assets/global/plugins/custom/css/custom.css",__FILE__));
							wp_enqueue_style("mail-bank-layout.css", plugins_url("assets/admin/layout/css/layout.css",__FILE__));
							wp_enqueue_style("mail-bank-tech-banker-custom.css", plugins_url("assets/admin/layout/css/tech-banker-custom.css",__FILE__));
						}

						wp_enqueue_style("mail-bank-default.css", plugins_url("assets/admin/layout/css/themes/default.css",__FILE__));
						wp_enqueue_style("mail-bank-toastr.min.css", plugins_url("assets/global/plugins/toastr/toastr.css",__FILE__));
						wp_enqueue_style("mail-bank-jquery-ui.css", plugins_url("assets/global/plugins/datepicker/jquery-ui.css",__FILE__),false,"2.0",false);
						wp_enqueue_style("mail-bank-datatables.foundation.css", plugins_url("assets/global/plugins/datatables/media/css/datatables.foundation.css",__FILE__));
						wp_enqueue_style("mail-bank-premium-edition.css", plugins_url("assets/admin/layout/css/premium-edition.css",__FILE__));
						break;
					}
				}
			}
		}
		add_action("admin_enqueue_scripts", "backend_js_css_for_mail_bank");
	}


	/*
	Function Name: helper_file_for_mail_bank
	Parameters: No
	Description: This function is used to create Class and Function to perform operations.
	Created On: 15-06-2016 09:52
	Created By: Tech Banker Team
	*/

	if(!function_exists("helper_file_for_mail_bank"))
	{
		function helper_file_for_mail_bank()
		{
			global $wpdb;
			$user_role_permission = get_users_capabilities_mail_bank();
			if(file_exists(MAIL_BANK_DIR_PATH."lib/helper.php"))
			{
				include_once MAIL_BANK_DIR_PATH."lib/helper.php";
			}
		}
	}

	/*
	Function Name: sidebar_menu_for_mail_bank
	Parameters: No
	Description: This function is used to create Admin sidebar menus.
	Created On: 15-06-2016 09:52
	Created By: Tech Banker Team
	*/

	if(!function_exists("sidebar_menu_for_mail_bank"))
	{
		function sidebar_menu_for_mail_bank()
		{
			global $wpdb,$current_user;
			$user_role_permission = get_users_capabilities_mail_bank();
			if(file_exists(MAIL_BANK_DIR_PATH."includes/translations.php"))
			{
				include MAIL_BANK_DIR_PATH."includes/translations.php";
			}
			if(file_exists(MAIL_BANK_DIR_PATH."lib/sidebar-menu.php"))
			{
				include_once MAIL_BANK_DIR_PATH."lib/sidebar-menu.php";
			}
		}
	}

	/*
	Function Name: topbar_menu_for_mail_bank
	Parameters: No
	Description: This function is used for creating Top bar menu.
	Created On: 15-06-2016 10:44
	Created By: Tech Banker Team
	*/

	if(!function_exists("topbar_menu_for_mail_bank"))
	{
		function topbar_menu_for_mail_bank()
		{
			global $wpdb,$current_user,$wp_admin_bar;
			$role_capabilities = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT meta_value FROM ".mail_bank_meta()."
					WHERE meta_key = %s",
					"roles_and_capabilities"
				)
			);
			$roles_and_capabilities_unserialized_data = unserialize($role_capabilities);
			$top_bar_menu = $roles_and_capabilities_unserialized_data["show_mail_bank_top_bar_menu"];

			if($top_bar_menu == "enable")
			{
				$user_role_permission = get_users_capabilities_mail_bank();
				if(file_exists(MAIL_BANK_DIR_PATH."includes/translations.php"))
				{
					include MAIL_BANK_DIR_PATH."includes/translations.php";
				}
				if(file_exists(MAIL_BANK_DIR_PATH."lib/admin-bar-menu.php"))
				{
					include_once MAIL_BANK_DIR_PATH."lib/admin-bar-menu.php";
				}
			}
		}
	}

	/*
	Function Name: ajax_register_for_mail_bank
	Parameters: No
	Description: This function is used for register ajax.
	Created On: 15-06-2016 10:44
	Created By: Tech Banker Team
	*/

	if(!function_exists("ajax_register_for_mail_bank"))
	{
		function ajax_register_for_mail_bank()
		{
			global $wpdb;
			$user_role_permission = get_users_capabilities_mail_bank();
			if(file_exists(MAIL_BANK_DIR_PATH."includes/translations.php"))
			{
				include MAIL_BANK_DIR_PATH."includes/translations.php";
			}
			if(file_exists(MAIL_BANK_DIR_PATH."lib/action-library.php"))
			{
				include_once MAIL_BANK_DIR_PATH."lib/action-library.php";
			}
		}
	}


	/*
	Function Name: mail_bank_settings_link
	Parameters: No
	Description: This function is used to add settings link.
	Created On: 09-08-2016 02:50
	Created By: Tech Banker Team
	*/

	if(!function_exists("mail_bank_settings_link"))
	{
		function mail_bank_settings_link($action)
		{
			global $wpdb;
			$user_role_permission = get_users_capabilities_mail_bank();
			$settings_link = '<a href = "'.admin_url('admin.php?page=mb_email_configuration').'">' . "Settings" . '</a>';
			array_unshift($action, $settings_link);
			return $action;
		}
	}

	/*
	Function Name: plugin_load_textdomain_mail_bank
	Parameters: No
	Description: This function is used to load the plugin's translated strings.
	Created On: 16-06-2016 09:47
	Created By: Tech Banker Team
	*/

	if(!function_exists("plugin_load_textdomain_mail_bank"))
	{
		function plugin_load_textdomain_mail_bank()
		{
			if(function_exists("load_plugin_textdomain"))
			{
				load_plugin_textdomain(wp_mail_bank, false, MAIL_BANK_PLUGIN_DIRNAME ."/languages");
			}
		}
	}

	/*
	Function Name: oauth_handling_mail_bank
	Parameters: No
	Description: This function is used to Manage Redirect.
	Created On: 11-08-2016 11:53
	Created By: Tech Banker Team
	*/

	if(!function_exists("oauth_handling_mail_bank"))
	{
		function oauth_handling_mail_bank()
		{
			if(is_admin())
			{
			if(isset($_REQUEST["code"]))
				{
					if(file_exists(MAIL_BANK_DIR_PATH."lib/callback.php"))
					{
						include_once MAIL_BANK_DIR_PATH."lib/callback.php";
					}
				}
				elseif(isset($_REQUEST["error"]) && isset($_REQUEST["state"]))
				{
					$url = admin_url("admin.php?page=mb_email_configuration");
					header("location: $url");
				}
			}
		}
	}

	/*
	Function Name: email_configuration_mail_bank
	Parameters: 1($phpmailer)
	Description: This function is used for checking test email.
	Created On: 15-06-2016 10:44
	Created By: Tech Banker Team
	*/

	if(!function_exists("email_configuration_mail_bank"))
	{
		function email_configuration_mail_bank($phpmailer)
		{
			global $wpdb;
			$email_configuration_data = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT meta_value FROM " . mail_bank_meta(). "
					WHERE meta_key = %s",
					"email_configuration"
				)
			);
			$email_configuration_data_array = unserialize($email_configuration_data);

			$phpmailer->Mailer = "mail";
			if($email_configuration_data_array["sender_name_configuration"] == "override")
			{
				$phpmailer->FromName = stripcslashes(htmlspecialchars_decode($email_configuration_data_array["sender_name"], ENT_QUOTES));
			}
			if($email_configuration_data_array["from_email_configuration"] == "override")
			{
				$phpmailer->From = $email_configuration_data_array["sender_email"];
			}
			if($email_configuration_data_array["reply_to"] != "")
			{
				$phpmailer->clearReplyTos();
				$phpmailer->AddReplyTo($email_configuration_data_array["reply_to"]);
			}
			if($email_configuration_data_array["cc"] != "")
			{
				$phpmailer->clearCCs();
				$cc_address_array = explode(",",$email_configuration_data_array["cc"]);
				foreach($cc_address_array as $cc_address)
				{
					$phpmailer->AddCc($cc_address);
				}
			}
			if($email_configuration_data_array["bcc"] != "")
			{
				$phpmailer->clearBCCs();
				$bcc_address_array = explode(",",$email_configuration_data_array["bcc"]);
				foreach($bcc_address_array as $bcc_address)
				{
					$phpmailer->AddBcc($bcc_address);
				}
			}
			$phpmailer->Sender = $email_configuration_data_array["email_address"];
		}
	}

	/*
	Function Name: admin_functions_for_mail_bank
	Parameters: No
	Description: This function is used for calling admin_init functions.
	Created On: 15-06-2016 10:44
	Created By: Tech Banker Team
	*/

	if(!function_exists("admin_functions_for_mail_bank"))
	{
		function admin_functions_for_mail_bank()
		{
			install_script_for_mail_bank();
			helper_file_for_mail_bank();
		}
	}

	/*
	Function Name: plugin_auto_update_mail_bank
	Parameters: No
	Description: This function is used to Update the plugin's version.
	Created On: 16-06-2016 11:02
	Created By: Tech Banker Team
	*/

	if(!function_exists("plugin_auto_update_mail_bank"))
	{
		function plugin_auto_update_mail_bank()
		{
			if(!wp_next_scheduled("automatic_updates_mail_bank"))
			{
				wp_schedule_event(time(), "daily", "automatic_updates_mail_bank");
			}
			add_action("automatic_updates_mail_bank", "mail_bank_plugin_autoupdate");
		}
	}

	/*
	Function Name: mailer_file_for_mail_bank
	Parameters: No
	Description: This function is used for including Mailer File.
	Created On: 30-06-2016 02:13
	Created By: Tech Banker Team
	*/

	if(!function_exists("mailer_file_for_mail_bank"))
	{
		function mailer_file_for_mail_bank()
		{
			if(file_exists(MAIL_BANK_DIR_PATH."includes/mailer.php"))
			{
				include_once MAIL_BANK_DIR_PATH."includes/mailer.php";
			}
		}
	}

	/*
	Function Name: mail_bank_plugin_autoupdate
	Parameters: No
	Description: This function is used to Update the plugin automatically.
	Created On: 16-06-2016 11:18
	Created By: Tech Banker Team
	*/

	if(!function_exists("mail_bank_plugin_autoupdate"))
	{
		function mail_bank_plugin_autoupdate()
		{
			try
			{
				require_once(ABSPATH . "wp-admin/includes/class-wp-upgrader.php");
				require_once(ABSPATH . "wp-admin/includes/misc.php");
				define("FS_METHOD", "direct");
				require_once(ABSPATH . "wp-includes/update.php");
				require_once(ABSPATH . "wp-admin/includes/file.php");
				wp_update_plugins();
				ob_start();
				$plugin_upgrader = new Plugin_Upgrader();
				$plugin_upgrader->upgrade(MAIL_BANK_FILE);
				$output = @ob_get_contents();
				@ob_end_clean();
			}
			catch(Exception $e)
			{
			}
		}
	}

	/*
	Function Name: user_functions_for_mail_bank
	Parameters: No
	Description: This function is used to call on init hook.
	Created On: 16-06-2016 11:08
	Created By: Tech Banker Team
	*/
	if(!function_exists("user_functions_for_mail_bank"))
	{
		function user_functions_for_mail_bank()
		{
			global $wpdb;
			$meta_values = $wpdb->get_results
			(
				$wpdb->prepare
				(
					"SELECT meta_value FROM " . mail_bank_meta(). "
					WHERE meta_key IN(%s,%s)",
					"settings",
					"email_configuration"
				)
			);

			$meta_data_array = array();
			foreach($meta_values as $value)
			{
				$unserialize_data = unserialize($value->meta_value);
				array_push($meta_data_array,$unserialize_data);
			}
			if(isset($meta_data_array[1]["automatic_plugin_update"]) && $meta_data_array[1]["automatic_plugin_update"] == "enable")
			{
				plugin_auto_update_mail_bank();
			}
			else
			{
				wp_clear_scheduled_hook("automatic_updates_mail_bank");
			}
			mailer_file_for_mail_bank();
			if($meta_data_array[0]["mailer_type"] == "php_mail_function")
			{
				add_action("phpmailer_init","email_configuration_mail_bank");
			}
			else
			{
				apply_filters("wp_mail","wp_mail");
			}
			oauth_handling_mail_bank();
		}
	}

	/*
	Description: Override Mail Function here.
	Created On: 30-06-2016 02:13
	Created By: Tech Banker Team
	*/

	mailer_file_for_mail_bank();
	mail_bank_auth_host::override_wp_mail_function();

	/*
	Function Name: uninstall_script_for_mail_bank
	Parameters: No
	Description: This function is used to delete schedulers and options on Uninstall Hook.
	Created On: 16-06-2016 12:00
	Created By: Tech Banker Team
	*/

	if(!function_exists("uninstall_script_for_mail_bank"))
	{
		function uninstall_script_for_mail_bank()
		{
			global $wpdb;
			if(is_multisite())
			{
			 $blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
			 foreach($blog_ids as $blog_id)
			 {
				switch_to_blog($blog_id);
				if(file_exists(MAIL_BANK_DIR_PATH."lib/uninstall-script.php"))
				{
				 include MAIL_BANK_DIR_PATH."lib/uninstall-script.php";
				}
				restore_current_blog();
			 }
			}
			else
			{
			 if(file_exists(MAIL_BANK_DIR_PATH."lib/uninstall-script.php"))
			 {
				include MAIL_BANK_DIR_PATH."lib/uninstall-script.php";
			 }
			}
		}
	}


	/*hooks */
	/*
	add_action for admin_functions_for_mail_bank
	Description: This hook contains all admin_init functions.
	Created On: 15-06-2016 09:46
	Created By: Tech Banker Team
	*/

	add_action("admin_init","admin_functions_for_mail_bank");

	/*
	add_action for user_functions_for_mail_bank
	Description: This hook is used for calling the function of user functions.
	Created On: 16-06-2016 11:07
	Created By: Tech Banker Team
	*/

	add_action("init","user_functions_for_mail_bank");

	/*
	add_action for sidebar_menu_for_mail_bank
	Description: This hook is used for calling the function of sidebar menu.
	Created On: 15-06-2016 09:46
	Created By: Tech Banker Team
	*/

	add_action("admin_menu","sidebar_menu_for_mail_bank");

	/*
	add_action for sidebar_menu_for_mail_bank
	Description: This hook is used for calling the function of sidebar menu in multisite case.
	Created On: 19-10-2016 05:18
	Created By: Tech Banker Team
	*/

	add_action("network_admin_menu","sidebar_menu_for_mail_bank");

	/*
	add_action for topbar_menu_for_mail_bank
	Description: This hook is used for calling the function of topbar menu.
	Created On: 15-06-2016 09:46
	Created By: Tech Banker Team
	*/

	add_action("admin_bar_menu","topbar_menu_for_mail_bank",100);

	/*
	add_filter for mail_bank_settings_link
	Description: This hook is used for calling the function of settings link.
	Created On: 09-08-2016 02:51
	Created By: Tech Banker Team
	*/

	add_filter("plugin_action_links_".plugin_basename(__FILE__),"mail_bank_settings_link",10,2);

	/*
	add_action for plugin_load_textdomain_mail_bank
	Description: This hook is used for calling the function of languages.
	Created On: 16-06-2016 09:47
	Created By: Tech Banker Team
	*/

	add_action("plugins_loaded", "plugin_load_textdomain_mail_bank");

	/*
	register_uninstall_hook
	Description: This hook is used for calling the function of uninstall script.
	Created On: 16-06-2016 12:00
	Created By: Tech Banker Team
	*/
	register_uninstall_hook( __FILE__, "uninstall_script_for_mail_bank");

	/*
	add_action hook for ajax_register_for_mail_bank
	Description: This hook is used to register ajax.
	Created On: 16-06-2016 12:00
	Created By: Tech Banker Team
	*/
	add_action("wp_ajax_mail_bank_action", "ajax_register_for_mail_bank");

}
/*
register_activation_hook for install_script_for_mail_bank
Description: This hook is used for calling the function of install script.
Created On: 15-06-2016 09:46
Created By: Tech Banker Team
*/

register_activation_hook(__FILE__,"install_script_for_mail_bank");

/*
add_action for install_script_for_mail_bank
Description: This hook used for calling the function of install script.
Created On: 15-06-2016 09:46
Created By: Tech Banker Team
*/

add_action("admin_init","install_script_for_mail_bank");

/* add_filter create Go Pro link for Mail Bank
Description: This hook is used for create link for premium Editions.
Created On: 19-10-2016 17:36
Created by: Tech Banker Team
*/
add_filter("plugin_action_links_" . plugin_basename(__FILE__), "mail_bank_action_links");

?>

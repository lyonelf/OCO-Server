<?php
require_once('../../loader.inc.php');
header('Content-Type: text/javascript');
?>

var L__DEFAULT_PAGE_TITLE = "<?php echo LANG('app_name'); ?>";
var L__CREATED = "<?php echo LANG('created'); ?>";
var L__PACKAGE_CREATED = "<?php echo LANG('package_created'); ?>";
var L__COMPUTER_CREATED = "<?php echo LANG('computer_created'); ?>";
var L__JOBS_CREATED = "<?php echo LANG('jobs_created'); ?>";
var L__GROUP_CREATED = "<?php echo LANG('group_created'); ?>";
var L__REPORT_CREATED = "<?php echo LANG('report_created'); ?>";
var L__NO_ELEMENTS_SELECTED = "<?php echo LANG('no_elements_selected'); ?>";
var L__ENTER_NAME = "<?php echo LANG('enter_name'); ?>";
var L__UNINSTALL_PACKAGES = "<?php echo LANG('uninstall_packages'); ?>";
var L__CONFIRM_REMOVE_PACKAGE_ASSIGNMENT = "<?php echo LANG('confirm_remove_package_assignment'); ?>";
var L__CONFIRM_DELETE = "<?php echo LANG('confirm_delete'); ?>";
var L__CONFIRM_DELETE_PACKAGE = "<?php echo LANG('confirm_delete_package'); ?>";
var L__CONFIRM_DELETE_COMPUTER = "<?php echo LANG('confirm_delete_computer'); ?>";
var L__CONFIRM_DELETE_GROUP = "<?php echo LANG('confirm_delete_group'); ?>";
var L__CONFIRM_DELETE_JOB = "<?php echo LANG('confirm_delete_job'); ?>";
var L__CONFIRM_DELETE_JOB_CONTAINER = "<?php echo LANG('confirm_delete_job_container'); ?>";
var L__CONFIRM_DELETE_DEPLOYMENT_RULE = "<?php echo LANG('confirm_delete_deployment_rule'); ?>";
var L__COMPUTER_ADDED = "<?php echo LANG('computer_added'); ?>";
var L__PACKAGES_ADDED = "<?php echo LANG('packages_added'); ?>";
var L__SEARCH_PLACEHOLDER = "<?php echo LANG('search_placeholder'); ?>";
var L__SAVED = "<?php echo LANG('saved'); ?>";
var L__OBJECT_RENAMED = "<?php echo LANG('object_renamed'); ?>";
var L__GROUP_RENAMED = "<?php echo LANG('group_renamed'); ?>";
var L__WOL_SENT = "<?php echo LANG('wol_packet_sent'); ?>";
var L__ERROR = "<?php echo LANG('error'); ?>";
var L__PASSWORDS_DO_NOT_MATCH = "<?php echo LANG('passwords_do_not_match'); ?>";
var L__NO_CONNECTION_TO_SERVER = "<?php echo LANG('no_connection_to_server'); ?>";
var L__PLEASE_CHECK_NETWORK = "<?php echo LANG('please_check_network'); ?>";
var L__IN_PROGRESS = "<?php echo LANG('in_progress'); ?>";
var L__CONFIRM_CREATE_EMPTY_PACKAGE = "<?php echo LANG('confirm_create_empty_package'); ?>";
var L__ENTER_NEW_VALUE = "<?php echo LANG('enter_new_value'); ?>";
var L__FILE_TOO_BIG = "<?php echo LANG('file_too_big'); ?>";
var L__CHANGE_ICON = "<?php echo LANG('change_icon'); ?>";
var L__REMOVE_ICON = "<?php echo LANG('remove_icon'); ?>";
var L__ARE_YOU_SURE = "<?php echo LANG('are_you_sure'); ?>";
var L__ENTER_NEW_SEQUENCE_NUMBER = "<?php echo LANG('enter_new_sequence_number'); ?>";
var L__OBJECT_DELETED = "<?php echo LANG('object_deleted'); ?>";
var L__GROUP_DELETED = "<?php echo LANG('group_deleted'); ?>";
var L__OBJECT_REMOVED_FROM_GROUP = "<?php echo LANG('object_removed_from_group'); ?>";
var L__CREATE_COMPUTER = "<?php echo LANG('create_computer'); ?>";
var L__CREATE_SYSTEM_USER = "<?php echo LANG('create_system_user'); ?>";
var L__CREATE_SYSTEM_USER_ROLE = "<?php echo LANG('create_system_user_role'); ?>";
var L__CREATE_REPORT = "<?php echo LANG('create_report'); ?>";
var L__CREATE_DOMAIN_USER_ROLE = "<?php echo LANG('create_domain_user_role'); ?>";
var L__CREATE_DOMAIN_USER = "<?php echo LANG('create_domain_user'); ?>";
var L__PASSWORDS_DO_NOT_MATCH = "<?php echo LANG('passwords_do_not_match'); ?>";
var L__WELCOME_TEXT = "<?php echo LANG('welcome_text'); ?>";
var L__WELCOME_DESCRIPTION = "<?php echo LANG('welcome_description'); ?>";
var L__RENEW_FAILED_JOBS = "<?php echo LANG('renew_failed_jobs'); ?>";
var L__JOBS_RENEWED = "<?php echo LANG('jobs_renewed'); ?>";
var L__RENEW_FAILED_DEPLOYMENT_RULE_JOBS_NOW = "<?php echo LANG('renew_failed_deployment_rule_jobs_now'); ?>";
var L__ADD_DEPENDENCY = "<?php echo LANG('add_dependency'); ?>";
var L__ADD_DEPENDENT_PACKAGE = "<?php echo LANG('add_dependent_package'); ?>";
var L__UPDATE_AVAILABLE = "<?php echo LANG('update_available'); ?>";
var L__CHANGE_PASSWORD = "<?php echo LANG('change_password'); ?>";
var L__PACKAGE_GROUPS = "<?php echo LANG('package_groups'); ?>";
var L__COMPUTER_GROUPS = "<?php echo LANG('computer_groups'); ?>";
var L__REPORT_GROUPS = "<?php echo LANG('report_groups'); ?>";
var L__EXPAND_COLLAPSE_TREE = "<?php echo LANG('expand_or_collapse_tree'); ?>";
var L__ORDER_BY = "<?php echo LANG('order_by'); ?>";
var L__LDAP_SYNC = "<?php echo LANG('ldap_sync'); ?>";
var L__ELEMENT_ALREADY_EXISTS = "<?php echo LANG('element_already_exists'); ?>";
var L__CHANGE_ORDER_VIA_DRAG_AND_DROP = "<?php echo LANG('reorder_via_drag_drop'); ?>";
var L__EDIT_SYSTEM_USER = "<?php echo LANG('edit_system_user'); ?>";
var L__EDIT_SYSTEM_USER_ROLE = "<?php echo LANG('edit_system_user_role'); ?>";
var L__EDIT_REPORT = "<?php echo LANG('edit_report'); ?>";
var L__EDIT_COMPUTER = "<?php echo LANG('edit_computer'); ?>";
var L__EDIT_PACKAGE = "<?php echo LANG('edit_package'); ?>";
var L__EDIT_PACKAGE_FAMILY = "<?php echo LANG('edit_package_family'); ?>";
var L__EDIT_JOB_CONTAINER = "<?php echo LANG('edit_job_container'); ?>";
var L__EDIT_DEPLOYMENT_RULE = "<?php echo LANG('edit_deployment_rule'); ?>";
var L__EDIT_DOMAIN_USER_ROLE = "<?php echo LANG('edit_domain_user_role'); ?>";
var L__EDIT_DOMAIN_USER = "<?php echo LANG('edit_domain_user'); ?>";
var L__JOB_CONTAINERS = "<?php echo LANG('job_container'); ?>";
var L__REEVALUATED = "<?php echo LANG('reevaluated'); ?>";
var L__CREATE = "<?php echo LANG('create'); ?>";
var L__CHANGE = "<?php echo LANG('change'); ?>";
var L__NEW_DEPLOYMENT_RULE = "<?php echo LANG('new_deployment_rule'); ?>";
var L__LICENSE = "<?php echo LANG('license'); ?>";

var L__DESKTOP_NOTIFICATIONS_NOT_SUPPORTED = "<?php echo LANG('desktop_notifications_not_supported'); ?>";
var L__DESKTOP_NOTIFICATIONS_DENIED = "<?php echo LANG('desktop_notifications_denied'); ?>";
var L__DESKTOP_NOTIFICATIONS_ALREADY_PERMITTED = "<?php echo LANG('desktop_notifications_already_permitted'); ?>";
var L__JOB_CONTAINER_STATUS_CHANGED = "<?php echo LANG('job_container_status_changed'); ?>";

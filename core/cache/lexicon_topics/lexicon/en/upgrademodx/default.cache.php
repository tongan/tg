<?php  return array (
  'package' => 'UpgradeModx',
  'ugm_current_version_caption' => 'Current Version',
  'ugm_latest_version_caption' => 'Latest Version',
  'ugm_no_version_list' => 'Could not get version list',
  'ugm_could_not_open' => 'Could not open',
  'ugm_for_writing' => 'for writing',
  'ugm_upgrade_available' => 'Upgrade Available',
  'ugm_modx_up_to_date' => 'MODX is up to date',
  'ugm_error' => 'Error',
  'ugm_logout_note' => 'Note: All users will be logged out',
  'ugm_upgrade_modx' => 'Upgrade MODX',
  'ugm_json_decode_failed' => 'Failed JSON decode for version data from GitHub in upgradeAvailable()',
  'ugm_no_curl_no_fopen' => 'Neither allow_url_fopen nor cURL can be used to check for upgrades',
  'ugm_no_version_list_from_github' => 'Could not get version list from GitHub',
  'ugm_no_such_version' => 'Requested version does not exist',
  'failed' => 'failed',
  'ugm_missing_versionlist' => 'Missing \'versionlist\' file; try reloading the dashboard page',
  'ugm_cannot_read_directory' => 'Unable to read directory contents or directory is empty',
  'ugm_unknown_error_reading_temp' => 'Unknown error reading /temp directory',
  'no_method_enabled' => 'Cannot download the files - neither cURL nor allow_url_fopen is enabled on this server.',
  'ugm_cannot_read_config_core_php' => 'Could not read config.core.php',
  'ugm_cannot_read_main_config' => 'Cannot Read main config file',
  'ugm_could_not_find_cacert' => 'Could not find cacert.pem',
  'ugm_could_not_write_progress' => 'Could not write to ugmprogress file',
  'ugm_file' => 'File',
  'ugm_is_empty_download_failed' => 'is empty -- download failed',
  'ugm_unable_to_create_directory' => 'Unable to create directory',
  'ugm_unable_to_read_ugmtemp' => 'Unable to read from /ugmtemp directory',
  'ugm_file_copy_failed' => 'File Copy Failed',
  'ugm_begin_upgrade' => 'Begin Upgrade',
  'ugm_starting_upgrade' => 'Starting Upgrade',
  'ugm_downloading_files' => 'Downloading Files',
  'ugm_unzipping_files' => 'Unzipping Files',
  'ugm_copying_files' => 'Copying Files',
  'ugm_preparing_setup' => 'Preparing Setup',
  'ugm_launching_setup' => 'Launching Setup',
  'ugm_finished' => 'Finished',
  'ugm_get_major_versions' => '<b>Important:</b> It is <i>strongly</i> recommended that you install all of the versions ending in .0 between your version and the current version of MODX.',
  'ugm_current_version_indicator' => 'current version',
  'ugm_using' => 'Using',
  'ugm_choose_version' => 'Choose MODX Version for Upgrade',
  'ugm_updating_modx_files' => 'Updating MODX Files',
  'ugm_originally_created_by' => 'Originally created by',
  'ugm_modified_for_revolution_by' => 'Modified for Revolution only by',
  'ugm_modified_for_upgrade_by' => 'Modified for upgrade-only with dashboard widget by',
  'ugm_original_design_by' => 'Original design By',
  'ugm_back_to_manager' => 'Back to Manager',
  'ugm_files_to_extract' => 'objects to extract',
  'ugm_destination' => 'Destination',
  'ugm_source' => 'Source',
  'ugm_unzipped' => 'Unzipped',
  'ugm_no_downloaded_file' => 'Could not find downloaded file',
  'ugm_could_not_create_directory' => 'Could not create directory',
  'ugm_directory_not_writable' => 'Directory is not writable',
  'setting_ugm_file_version' => 'File Version',
  'setting_ugm_file_version_desc' => 'Version when versionlist file was last updated. Set automatically -- do not edit!',
  'setting_ugm_temp_dir' => 'UpgradeMODX Temp Directory',
  'setting_ugm_temp_dir_desc' => 'Path to the directory used for temporary storage for downloading and unzipping files; Must be writable; default:{base_path}ugmtemp/',
  'setting_ugm_versionlist_api_url' => 'Version List API URL',
  'setting_ugm_versionlist_api_url_desc' => 'URL of API to get version list from',
  'setting_ugm_version_list_path' => 'Versionlist Path',
  'setting_ugm_version_list_path_desc' => 'Path to versionlist file (minus the filename -- should end in a slash); Default: {core_path}cache/upgrademodx/',
  'setting_ugm_last_check' => 'Last Check',
  'setting_ugm_last_check_desc' => 'Date and time of last check -- set automatically',
  'setting_ugm_latest_version' => 'Latest Version',
  'setting_ugm_latest_version_desc' => 'Latest version (at last check) -- set automatically',
  'setting_ugm_hide_when_no_upgrade' => 'Hide When No Upgrade',
  'setting_ugm_hide_when_no_upgrade_desc' => 'Hide widget when no upgrade is available: default: No',
  'setting_ugm_interval' => 'Interval',
  'setting_ugm_interval_desc' => 'Interval between checks -- Examples: 1 week, 3 days, 6 hours; default: 1 day',
  'setting_ugm_groups' => 'groups',
  'setting_ugm_groups_desc' => 'group, or comma-separated list of groups, who will see the widget',
  'setting_ugm_versions_to_show' => 'Versions To Show',
  'setting_ugm_versions_to_show_desc' => 'Number of versions to show in upgrade form; default: 5',
  'setting_ugm_github_timeout' => 'GitHub Timeout',
  'setting_ugm_github_timeout_desc' => 'Timeout in seconds for checking Github; default: 6',
  'setting_ugm_github_token' => 'GitHub Token',
  'setting_ugm_github_token_desc' => 'Github token - available from your GitHub profile',
  'setting_ugm_github_username' => 'GitHub Username',
  'setting_ugm_github_username_desc' => 'Your username at GitHub',
  'setting_ugm_pl_only' => 'pl Versions Only',
  'setting_ugm_pl_only_desc' => 'Show only pl (stable) versions; default: yes',
  'setting_ugm_language' => 'Language',
  'setting_ugm_language_desc' => 'Two-letter language code for language to use; default: en',
  'setting_ugm_ssl_verify_peer' => 'SSL Verify Peer',
  'setting_ugm_ssl_verify_peer_desc' => 'For security, have cURL verify the identity of the server',
  'setting_ugm_modx_timeout' => 'MODX Timeout',
  'setting_ugm_modx_timeout_desc' => 'Timeout in seconds for checking download status from MODX; default: 6',
  'setting_ugm_force_pcl_zip' => 'Force PclZip',
  'setting_ugm_force_pcl_zip_desc' => 'Force the use of PclZip instead of ZipArchive',
  'setting_ugm_verbose' => 'Verbose Error Messages',
  'setting_ugm_verbose_desc' => 'Display full GitHub Error Messages',
  'setting_ugm_cert_path' => 'Cert Path',
  'setting_ugm_cert_path_desc' => 'Path to SSL cert file in .pem format; rarely necessary',
  'setting_ugm_show_modx3' => 'Show MODX 3 versions',
  'setting_ugm_show_modx3_desc' => 'Show MODX 3 versions in list',
  'Download' => 'Download',
  'Form' => 'Form',
  'GitHub' => 'GitHub',
  'Security' => 'Security',
  'Widget' => 'Widget',
  'ugm_copied' => 'Copied',
  'ugm_to' => 'to',
  'ugm_files_copied' => 'Objects copied',
  'ugm_downloaded' => 'Downloaded',
  'ugm_download_failed' => 'Download failed',
  'ugm_no_root_config_core' => 'Could not find root config.core.php',
  'ugm_setup_prepared' => 'Setup prepared',
  'ugm_could_not_write' => 'Could not write',
  'ugm_deleting_temp_files' => 'Cleaning Up',
  'ugm_temp_files_deleted' => 'Cleanup Completed (temporary files removed)',
);
<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domain',
    'ad_domain_help'			=> 'This is sometimes the same as your email domain, but not always.',
    'is_ad'				        => 'This is an Active Directory server',
	'alert_email'				=> 'Zasílat upozornění na',
	'alerts_enabled'			=> 'Upozornění zapnutá',
	'alert_interval'			=> 'Mez upozornění na vypršení (ve dnech)',
	'alert_inv_threshold'		=> 'Mez upozornění skladu',
	'asset_ids'					=> 'ID majetku',
	'auto_increment_assets'		=> 'Vygenerovat zvyšující se ID majetku',
	'auto_increment_prefix'		=> 'Předpona (volitnelná)',
	'auto_incrementing_help'    => 'Nastavte nejdříve automaticky se zvyšující ID majetku pro nastavení tohoto',
	'backups'					=> 'Zálohy',
	'barcode_settings'			=> 'Nastavení čárového kódu',
    'confirm_purge'			    => 'Potvrdit vyčištění',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone.',
	'custom_css'				=> 'Custom CSS',
	'custom_css_help'			=> 'Enter any custom CSS overrides you would like to use. Do not include the &lt;style&gt;&lt;/style&gt; tags.',
	'default_currency'  		=> 'Default Currency',
	'default_eula_text'			=> 'Výchozí EULA',
  'default_language'					=> 'Default Language',
	'default_eula_help_text'	=> 'Můžete také spojit vlastní EULA se specifickými kategoriemi majetku.',
    'display_asset_name'        => 'Zobrazit název majetku',
    'display_checkout_date'     => 'Zobrazit den převzetí',
    'display_eol'               => 'Zobrazit EOL v tabulkovém zobrazení',
    'display_qr'                => 'Display Square Codes',
	'display_alt_barcode'		=> 'Display 1D barcode',
	'barcode_type'				=> '2D Barcode Type',
	'alt_barcode_type'			=> '1D barcode type',
    'eula_settings'				=> 'Nastavení EULA',
    'eula_markdown'				=> 'Tato EULA umožňuje <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown</a>.',
    'general_settings'			=> 'Obecné nastavení',
	'generate_backup'			=> 'Generate Backup',
    'header_color'              => 'Barva záhlaví',
    'info'                      => 'Tato nastavení umožňují zvolit určité prvky instalace.',
    'laravel'                   => 'Verze Laravel',
    'ldap_enabled'              => 'LDAP enabled',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Settings',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
	'ldap_server_cert'			=> 'LDAP SSL certificate validation',
	'ldap_server_cert_ignore'	=> 'Allow invalid SSL Certificate',
	'ldap_server_cert_help'		=> 'Select this checkbox if you are using a self signed SSL cert and would like to accept an invalid SSL certificate.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'This should be checked only if you are running STARTTLS on your LDAP server. ',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Username Field',
    'ldap_lname_field'          => 'Last Name',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP Authentication query',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP Employee Number',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'This Snipe-IT install can load scripts from the outside world.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'optional'					=> 'volitelný',
    'per_page'                  => 'Výsledků na stránku',
    'php'                       => 'Verze PHP',
    'php_gd_info'               => 'Je nutné nainstalovat php-gd pro zobrazení QR kódů. Více v instalační příručce.',
    'php_gd_warning'            => 'PHP pluginy pro zpracování obrazu a GD nejsou nainstalovány.',
    'qr_help'                   => 'Nejprve povolte QR kódy',
    'qr_text'                   => 'Text QR kódu',
    'setting'                   => 'Nastavení',
    'settings'                  => 'Nastavení',
    'site_name'                 => 'Název stránky',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new">create an incoming webhook</a> on your Slack account.',
    'snipe_version'  			=> 'Verze Snipe-IT',
    'system'                    => 'Systémové informace',
    'update'                    => 'Upravit nastavení',
    'value'                     => 'Hodnota',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'About Settings',
    'about_settings_text'       => 'These settings let you customize certain aspects of your installation.',
    'labels_per_page'           => 'Labels per page',
    'label_dimensions'          => 'Label dimensions (inches)',
    'page_padding'             => 'Page margins (inches)',
    'purge'                    => 'Purge Deleted Records',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
);
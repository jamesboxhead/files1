<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Nick Name',			'first-name' => 'First name',			'last-name' => 'Last name',			'email' => 'Email',			'user-tags' => 'User Tags',			'primary-phone-contact' => 'Primary phone contact',			'primary-web-address' => 'Primary web address',			'gender' => 'Gender',			'year-of-birth' => 'Year of birth',			'user-photo' => 'User photo',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [		],	],
		'income-category' => [		'title' => 'Income categories',		'fields' => [		],	],
		'income' => [		'title' => 'Income',		'fields' => [		],	],
		'expense' => [		'title' => 'Expenses',		'fields' => [		],	],
		'monthly-report' => [		'title' => 'Monthly report',		'fields' => [		],	],
		'product-management' => [		'title' => 'Product management',		'fields' => [		],	],
		'product-categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'product-tags' => [		'title' => 'Tags',		'fields' => [		],	],
		'products' => [		'title' => 'Products',		'fields' => [		],	],
		'innovation-management' => [		'title' => 'Innovation management',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Mentor Meeting Statuses',		'fields' => [			'name' => 'Name',			'sort-code' => 'Sort code',		],	],
		'task-tags' => [		'title' => 'Mentor Meeting Tags',		'fields' => [			'name' => 'Name',		],	],
		'tasks' => [		'title' => 'Mentor Meetings',		'fields' => [			'user' => 'Member',			'mentor' => 'Mentor in Meeting',			'due-date' => 'Meeting date',			'status' => 'Status',			'outcome' => 'Meeting Outcome',			'meeting-time' => 'Meeting minutes completed',			'tag' => 'Tags',			'name' => 'Calendar Note',			'notes' => 'Notes',			'created-by' => 'Created by',		],	],
		'task-calendar' => [		'title' => 'Calendar',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [		],	],
		'content-management' => [		'title' => 'Content management',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [		],	],
		'content-pages' => [		'title' => 'Pages',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'entities' => [		'title' => 'Entities',		'fields' => [		],	],
		'p5states' => [		'title' => 'States',		'fields' => [		],	],
		'p5hubs' => [		'title' => 'Hubs',		'fields' => [		],	],
		'p5tags' => [		'title' => 'Tags',		'fields' => [		],	],
		'enitity-lookups' => [		'title' => 'Enitity lookups',		'fields' => [		],	],
		'p5-hub-model' => [		'title' => 'Hub Model',		'fields' => [			'hub-model' => 'Hub model',			'sort-code' => 'Sort code',		],	],
		'p5-hub-roles' => [		'title' => 'Hub Roles',		'fields' => [			'hub-role' => 'Hub role',			'maps-styleurl' => 'Maps styleurl',		],	],
		'p5-hubs1' => [		'title' => 'Hubs',		'fields' => [		],	],
		'p5-hubs' => [		'title' => 'Hubs',		'fields' => [			'hub-name' => 'Hub name',			'hub-description' => 'Hub description',			'website' => 'Website',			'email' => 'Email',			'state' => 'State',			'hub-tags' => 'Hub tags',			'hub-roles' => 'Hub roles',			'hub-model' => 'Hub model',			'hub-users' => 'Hub users',			'org-hub' => 'Linked Organisations',			'public-view' => 'Public view',			'logo' => 'Logo',			'address-line-1' => 'Address line 1',			'address-line-2' => 'Address line 2',			'city' => 'City',			'postcode' => 'Postcode',			'map-location' => 'Map location',			'wm-id' => 'Wm id',			'created-by' => 'Created by',		],	],
		'p5-states-temp' => [		'title' => 'P5 states temp',		'fields' => [		],	],
		'p5-tags-temp' => [		'title' => 'P5 tags temp',		'fields' => [		],	],
		'p5-states' => [		'title' => 'States',		'fields' => [			'state' => 'State',			'state-long' => 'State long',			'created-by' => 'Created by',		],	],
		'p5-tags' => [		'title' => 'Tags',		'fields' => [			'tag' => 'Tag',		],	],
		'p5-positions' => [		'title' => 'Organisation Positions',		'fields' => [			'pos-title' => 'Position Title',			'sort-code' => 'Sort code',		],	],
		'p5-org-status' => [		'title' => 'Organisation Status',		'fields' => [			'org-status' => 'Status',			'sort-code' => 'Sort code',		],	],
		'p5-organisations' => [		'title' => 'Organisations ',		'fields' => [			'trading-name' => 'Trading name',			'legal-name' => 'Legal name',			'org-status' => 'Org status',			'address-line-1' => 'Address line 1',			'address-line-2' => 'Address line 2',			'surburb' => 'Surburb',			'state' => 'State id',			'employee-count' => 'Employee count',			'employee-fte' => 'Employee FTE',			'org-tags' => 'Org tags',			'org-hub' => 'Linked Hubs',			'post-code' => 'Post code',			'established' => 'Established',			'primary-web-site' => 'Primary web site',			'primary-email' => 'Primary email',			'general-info' => 'General info',			'logo' => 'Logo',			'org-location' => 'Org location',			'map-style-url' => 'Map style url',			'created-by' => 'Created by',			'linked-users' => 'Linked users',		],	],
		'p5-programs' => [		'title' => 'Programs',		'fields' => [			'title' => 'Title',			'description' => 'Description',			'established' => 'Established',			'website' => 'Website',			'logo' => 'Logo',			'hub-link' => 'Hub link',			'prog-tags' => 'Prog tags',			'created-by' => 'Created by',		],	],
		'p5-intakes' => [		'title' => 'Intakes',		'fields' => [			'program' => 'Program',			'intake-group' => 'Intake group',			'start-date' => 'Start date',			'end-date' => 'End date',			'description' => 'Description',			'website' => 'Website',			'created-by' => 'Created by',			'org-link' => 'Org link',			'users-linked' => 'Users linked',		],	],
		'p5-investments' => [		'title' => 'Investments',		'fields' => [			'org-invested-in' => 'Org invested in',			'investor-hub' => 'Investor',			'date-of-investment' => 'Date of investment',			'amnt-of-investment' => 'Amount of investment',			'investment-currency' => 'Investment currency',			'created-by' => 'Created by',		],	],
		'innovation-management' => [		'title' => 'Innovation management',		'fields' => [		],	],
		'system-admin' => [		'title' => 'System admin',		'fields' => [		],	],
		'recent-history' => [		'title' => 'Recent history',		'fields' => [		],	],
		'data-integrity' => [		'title' => 'Data integrity ',		'fields' => [		],	],
		'analysis' => [		'title' => 'Analysis',		'fields' => [		],	],
		'graph-set-1' => [		'title' => 'Graph set 1',		'fields' => [		],	],
		'p5-org-pos-user-links' => [		'title' => 'People Organisations links',		'fields' => [			'username' => 'Person',			'org-link' => 'Organisation',			'org-relationship' => 'Relationship',			'relationship-is-current' => 'Relationship is current?',			'relationship-started' => 'Relationship starteded',			'relationship-ended' => 'Relationship ended',			'created-by' => 'Created by',		],	],
		'p012-survey' => [		'title' => 'Surveys',		'fields' => [		],	],
		'member-services' => [		'title' => 'Member services',		'fields' => [		],	],
		'survey-status' => [		'title' => 'Survey Status',		'fields' => [		],	],
		'tasks-outcomes' => [		'title' => 'Mentor Meeting Outcomes',		'fields' => [			'outcome' => 'Outcome',			'sort-code' => 'Sort code',		],	],
		'system-proc1' => [		'title' => 'System proc1',		'fields' => [		],	],
		'p012-survey-log' => [		'title' => 'P012 survey log',		'fields' => [			'survey-target' => 'Survey target',			'p012-survey-code' => 'P012 survey code',			'ext-survey-code' => 'Ext survey code',			'p012-survey-status' => 'P012 survey status',			'ext-survey-status' => 'Ext survey status',			'linked-task' => 'Linked task',			'created-by' => 'Created by',		],	],
		'p009-graph' => [		'title' => 'P009 graph',		'fields' => [			'sort-code' => 'Sort code',			'dataset-title' => 'Dataset title',			'graph-root' => 'Graph root',			'graph-name' => 'Graph name',			'graph-description' => 'Graph description',			'created-by' => 'Created by',		],	],
		'p009-field-level' => [		'title' => 'P009 field level',		'fields' => [			'graph' => 'Graph id',			'level' => 'Level',			'level-num-table' => 'Level num table',			'level-num-show-field' => 'Level num show field',			'level-num-join-field' => 'Level num join field',			'level-num-join-statement' => 'Level num join statement',			'level-num-method' => 'Level num method',			'level-num-groupby' => 'Level num groupby',			'created-by' => 'Created by',		],	],
		'hub-memberships' => [		'title' => 'Hub memberships',		'fields' => [		],	],
		'p5-hub-membership-types' => [		'title' => 'Hub membership types',		'fields' => [			'description' => 'Description',			'created-by' => 'Created by',		],	],
		'p5-hub-memberships' => [		'title' => 'Hub memberships',		'fields' => [			'hub' => 'Hub',			'organisation' => 'Organisation',			'member-type' => 'Member type',			'membership-start' => 'Membership start',			'membership-end' => 'Membership end',			'notes' => 'Notes',			'created-by' => 'Created by',		],	],
	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_restore' => 'Restore',
	'app_permadel' => 'Delete Permanently',
	'app_all' => 'All',
	'app_trash' => 'Trash',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
	'app_no_entries_in_table' => 'No entries in table',
	'app_custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'app_delete_selected' => 'Delete selected',
	'app_category' => 'Category',
	'app_categories' => 'Categories',
	'app_sample_category' => 'Sample category',
	'app_questions' => 'Questions',
	'app_question' => 'Question',
	'app_answer' => 'Answer',
	'app_sample_question' => 'Sample question',
	'app_sample_answer' => 'Sample answer',
	'app_faq_management' => 'FAQ Management',
	'app_administrator_can_create_other_users' => 'Administrator (can create other users)',
	'app_simple_user' => 'Simple user',
	'app_title' => 'Title',
	'app_roles' => 'Roles',
	'app_role' => 'Role',
	'app_user_management' => 'User management',
	'app_users' => 'Users',
	'app_user' => 'User',
	'app_name' => 'Name',
	'app_email' => 'Email',
	'app_password' => 'Password',
	'app_remember_token' => 'Remember token',
	'app_permissions' => 'Permissions',
	'app_user_actions' => 'User actions',
	'app_action' => 'Action',
	'app_action_model' => 'Action model',
	'app_action_id' => 'Action id',
	'app_time' => 'Time',
	'app_campaign' => 'Campaign',
	'app_campaigns' => 'Campaigns',
	'app_description' => 'Description',
	'app_valid_from' => 'Valid from',
	'app_valid_to' => 'Valid to',
	'app_discount_amount' => 'Discount amount',
	'app_discount_percent' => 'Discount percent',
	'app_coupons_amount' => 'Coupons amount',
	'app_coupons' => 'Coupons',
	'app_code' => 'Code',
	'app_redeem_time' => 'Redeem time',
	'app_coupon_management' => 'Coupon Management',
	'app_time_management' => 'Time management',
	'app_projects' => 'Projects',
	'app_reports' => 'Reports',
	'app_time_entries' => 'Time entries',
	'app_work_type' => 'Work type',
	'app_work_types' => 'Work types',
	'app_project' => 'Project',
	'app_start_time' => 'Start time',
	'app_end_time' => 'End time',
	'app_expense_category' => 'Expense Category',
	'app_expense_categories' => 'Expense Categories',
	'app_expense_management' => 'Expense Management',
	'app_expenses' => 'Expenses',
	'app_expense' => 'Expense',
	'app_entry_date' => 'Entry date',
	'app_amount' => 'Amount',
	'app_income_categories' => 'Income categories',
	'app_monthly_report' => 'Monthly report',
	'app_companies' => 'Companies',
	'app_company_name' => 'Company name',
	'app_address' => 'Address',
	'app_website' => 'Website',
	'app_contact_management' => 'Contact management',
	'app_contacts' => 'Contacts',
	'app_company' => 'Company',
	'app_first_name' => 'First name',
	'app_last_name' => 'Last name',
	'app_phone' => 'Phone',
	'app_phone1' => 'Phone 1',
	'app_phone2' => 'Phone 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Photo (max 8mb)',
	'app_category_name' => 'Category name',
	'app_product_management' => 'Product management',
	'app_products' => 'Products',
	'app_product_name' => 'Product name',
	'app_price' => 'Price',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Photo1',
	'app_photo2' => 'Photo2',
	'app_photo3' => 'Photo3',
	'app_calendar' => 'Calendar',
	'app_statuses' => 'Statuses',
	'app_task_management' => 'Task management',
	'app_tasks' => 'Tasks',
	'app_status' => 'Status',
	'app_attachment' => 'Attachment',
	'app_due_date' => 'Due date',
	'app_assigned_to' => 'Assigned to',
	'app_assets' => 'Assets',
	'app_asset' => 'Asset',
	'app_serial_number' => 'Serial number',
	'app_location' => 'Location',
	'app_locations' => 'Locations',
	'app_assigned_user' => 'Assigned (user)',
	'app_notes' => 'Notes',
	'app_assets_history' => 'Assets history',
	'app_assets_management' => 'Assets management',
	'app_slug' => 'Slug',
	'app_content_management' => 'Content management',
	'app_text' => 'Text',
	'app_excerpt' => 'Excerpt',
	'app_featured_image' => 'Featured image',
	'app_pages' => 'Pages',
	'app_axis' => 'Axis',
	'app_show' => 'Show',
	'app_group_by' => 'Group by',
	'app_chart_type' => 'Chart type',
	'app_create_new_report' => 'Create new report',
	'app_no_reports_yet' => 'No reports yet.',
	'app_created_at' => 'Created at',
	'app_updated_at' => 'Updated at',
	'app_deleted_at' => 'Deleted at',
	'app_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
	'app_reports_y_axis_field' => 'Y-axis - please choose one of number fields',
	'app_select_crud_placeholder' => 'Please select one of your CRUDs',
	'app_select_dt_placeholder' => 'Please select one of date/time fields',
	'app_aggregate_function_use' => 'Aggregate function to use',
	'app_x_axis_group_by' => 'X-axis group by',
	'app_x_axis_field' => 'X-axis field (date/time)',
	'app_y_axis_field' => 'Y-axis field',
	'app_integer_float_placeholder' => 'Please select one of integer/float fields',
	'app_change_notifications_field_1_label' => 'Send email notification to User',
	'app_change_notifications_field_2_label' => 'When Entry on CRUD',
	'app_select_users_placeholder' => 'Please select one of your Users',
	'app_is_created' => 'is created',
	'app_is_updated' => 'is updated',
	'app_is_deleted' => 'is deleted',
	'app_notifications' => 'Notifications',
	'app_notify_user' => 'Notify User',
	'app_when_crud' => 'When CRUD',
	'app_create_new_notification' => 'Create new Notification',
	'app_stripe_transactions' => 'Stripe Transactions',
	'app_upgrade_to_premium' => 'Upgrade to Premium',
	'app_messages' => 'Messages',
	'app_you_have_no_messages' => 'You have no messages.',
	'app_all_messages' => 'All Messages',
	'app_new_message' => 'New message',
	'app_outbox' => 'Outbox',
	'app_inbox' => 'Inbox',
	'app_recipient' => 'Recipient',
	'app_subject' => 'Subject',
	'app_message' => 'Message',
	'app_send' => 'Send',
	'app_reply' => 'Reply',
	'app_calendar_sources' => 'Calendar sources',
	'app_new_calendar_source' => 'Create new calendar source',
	'app_crud_title' => 'Crud title',
	'app_crud_date_field' => 'Crud date field',
	'app_prefix' => 'Prefix',
	'app_label_field' => 'Label field',
	'app_suffix' => 'Sufix',
	'app_no_calendar_sources' => 'No calendar sources yet.',
	'app_crud_event_field' => 'Event label field',
	'app_create_new_calendar_source' => 'Create new Calendar Source',
	'app_edit_calendar_source' => 'Edit Calendar Source',
	'app_client_management' => 'Client management',
	'app_client_management_settings' => 'Client management settings',
	'app_country' => 'Country',
	'app_client_status' => 'Client status',
	'app_clients' => 'Clients',
	'app_client_statuses' => 'Client statuses',
	'app_currencies' => 'Currencies',
	'app_main_currency' => 'Main currency',
	'app_documents' => 'Documents',
	'app_file' => 'File',
	'app_income_source' => 'Income source',
	'app_income_sources' => 'Income sources',
	'app_fee_percent' => 'Fee percent',
	'app_note_text' => 'Note text',
	'app_client' => 'Client',
	'app_start_date' => 'Start date',
	'app_budget' => 'Budget',
	'app_project_status' => 'Project status',
	'app_project_statuses' => 'Project statuses',
	'app_transactions' => 'Transactions',
	'app_transaction_types' => 'Transaction types',
	'app_transaction_type' => 'Transaction type',
	'app_transaction_date' => 'Transaction date',
	'app_currency' => 'Currency',
	'app_current_password' => 'Current password',
	'app_new_password' => 'New password',
	'app_password_confirm' => 'New password confirmation',
	'app_dashboard_text' => 'You are logged in!',
	'app_forgot_password' => 'Forgot your password?',
	'app_remember_me' => 'Remember me',
	'app_login' => 'Login',
	'app_change_password' => 'Change password',
	'app_csv' => 'CSV',
	'app_print' => 'Print',
	'app_excel' => 'Excel',
	'app_copy' => 'Copy',
	'app_colvis' => 'Column visibility',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Reset password',
	'app_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
	'app_email_line1' => 'You are receiving this email because we received a password reset request for your account.',
	'app_email_line2' => 'If you did not request a password reset, no further action is required.',
	'app_email_greet' => 'Hello',
	'app_email_regards' => 'Regards',
	'app_confirm_password' => 'Confirm password',
	'app_if_you_are_having_trouble' => 'If you’re having trouble clicking the',
	'app_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
	'app_please_select' => 'Please select',
	'app_register' => 'Register',
	'app_registration' => 'Registration',
	'app_not_approved_title' => 'You are not approved',
	'app_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
	'app_there_were_problems_with_input' => 'There were problems with input',
	'app_whoops' => 'Whoops!',
	'app_file_contains_header_row' => 'File contains header row?',
	'app_csvImport' => 'CSV Import',
	'app_csv_file_to_import' => 'CSV file to import',
	'app_parse_csv' => 'Parse CSV',
	'app_import_data' => 'Import data',
	'app_imported_rows_to_table' => 'Imported :rows rows to :table table',
	'global_title' => 'MeasureUP 30',
];
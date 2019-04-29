<?php namespace ProcessWire;

$info = array(
	"title" => __('Assets Backups', __FILE__),
	"summary" => __('Create and/or restore assets backups from ProcessWire admin.', __FILE__), 
	"version" => 0, 
	"author" => "Michael Jaros", 
	"icon" => "database", 
	"requires" => "ProcessWire>=3.0.62", 
	"permission" => "fs-backup",
	"permissions" => array(
		"fs-backup" => "Manage assets/files backups (recommended for superuser only)" 
	),
	"page" => array(
		"name" => "assets-backups",
		"parent" => "setup", 
		"title" => "Assets Backups"
	),
	"nav" => array(
		array( 
			"url" => "./", 
			"label" => __('View', __FILE__), 
			"icon" => "list" 
		),
		array(
			"url" => "backup/", 
			"label" => __('Backup', __FILE__), 
			"icon" => "plus-circle" 
		),
		array(
			"url" => "upload/", 
			"label" => __('Upload', __FILE__), 
			"icon" => "cloud-upload" 
		)
	)
);

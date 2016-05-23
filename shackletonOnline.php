<?php

# Class to run the Shackleton Online gallery

require_once ('frontControllerApplication.php');
class shackletonOnline extends frontControllerApplication
{
	# Function to assign defaults additional to the general application defaults
	public function defaults ()
	{
		# Specify available arguments as defaults or as NULL (to represent a required argument)
		$defaults = array (
			'useDatabase' => false,
			'disableTabs' => true,
		);
		
		# Return the defaults
		return $defaults;
	}
	
	
	# Function assign additional actions
	public function actions ()
	{
		# Specify additional actions
		$actions = array (
			'home' => array (
				'description' => false,
				'url' => '',
				'tab' => 'Home',
			),
			'article' => array (
				'description' => false,
				'url' => 'article/',
				'tab' => 'Article',
			),
			'biography' => array (
				'description' => false,
				'url' => 'biography/',
				'tab' => 'Biography',
			),
			'expedition' => array (
				'description' => false,
				'url' => 'expedition/',
				'tab' => 'expedition',
			),
		);
		
		# Return the actions
		return $actions;
	}
	
	
	
	# Home
	public function home ()
	{
		require_once ('index.php');
	}
	
	
	# Article
	public function article ()
	{
		require_once ('article.php');
	}
	
	
	# Biography
	public function biography ()
	{
		require_once ('biography.php');
	}
	
	
	# Expedition
	public function expedition ()
	{
		require_once ('expedition.php');
	}
}

?>
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
			'h1' => '',
			'useDatabase' => false,
			'disableTabs' => true,
			'useTemplating' => true,
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
	
	
	# Additional main processing
	public function main ()
	{
		# Enable integration
		#!# Temporary while templates subject to potential change
		$this->template['integrationEnabled'] = true;
		
		# Pass the baseUrl to the template
		$this->template['baseUrl'] = $this->baseUrl;
		
	}
	
	
	
	# Home
	public function home ()
	{
		require_once ('home.php');
	}
	
	
	# Article
	public function article ()
	{
		require_once ('article.php');
	}
	
	
	# Biography
	public function biography ()
	{
		# Obtain the article
		$person = array (
			'name' => 'Thomas Crean',
			'portrait' => $this->baseUrl . '/images/tom-crean.jpg',
			'alias' => 'Hurrah the Willah (nom de plume on Discovery, Terra Nova and Endurance expeditions)',
			'rank' => 'Acting boatswain (Royal Navy)',
			'dates' => '1877-1938',
			'nationality' => 'British',
			'awards' => 'Polar medal (silver), Albert medal',
			'expeditions' => array (
				array (
					'title' => 'Aurora',
					'date' => '1914-1917',
					'image' => $this->baseUrl . '/images/teasers/expedition1.jpg',
					'link' => 'expedition.php'
				),
				array (
					'title' => 'Quest',
					'date' => '1921-1922',
					'image' => $this->baseUrl . '/images/teasers/expedition2.jpg',
					'link' => 'expedition.php'
				),
			),
		);
		
		# Pass the data into the template
		$this->template['person'] = $person;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Expedition
	public function expedition ()
	{
		require_once ('expedition.php');
	}
}

?>
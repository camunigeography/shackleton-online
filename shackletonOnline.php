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
			'apiBaseUrl' => NULL,
			'itemCaseSensitive' => true,
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
	public function article ($id)
	{
		if (!$id) {
			require_once ('article.php');
			return;
		}
		
		$id = str_replace ('_', ' ', $id);
		
		# Get the data from the API
		$apiUrl = $this->settings['apiBaseUrl'] . '/article?id=' . urlencode ($id) . '&collection=VSII' . '&baseUrlPeople=' . $this->baseUrl . '/biographies' . '&baseUrlExpeditions=' . $this->baseUrl . '/expeditions';
$apiUrl .= '&includesuppressed=1';
		$result = file_get_contents ($apiUrl);
		$article = json_decode ($result, true);
		//application::dumpData ($article);
		
		# End if no such record
		if ($article['error']) {
			$html = $this->page404 ();
			echo $html;
			return;
		}
		
		# Simplify template assignment
		$article['expedition'] = $article['associatedExpedition'][0]['name'];
$article['expeditionLink'] = $this->baseUrl . '/expeditions/endurance/';
#!# Is date intended to be the item date or the expedition date (range)?
		$article['date'] = $article['associatedExpedition'][0]['dateBegin'] . '-' . $article['associatedExpedition'][0]['dateEnd'];
		
		foreach ($article['images'] as $index => $src) {
			$imageLocation = '/museum/catalogue/images/' . $src;
			list ($width, $height, $type, $attr) = getimagesize ($_SERVER['DOCUMENT_ROOT'] . $imageLocation);
			$article['images'][$index] = array (
				'title' => $article['title'],
				'thumbnail' => $imageLocation,
				'large' => $imageLocation,
				'dimensions' => $width . 'x' . $height,
			);
		}
		
		# Format the about text
		$article['briefDescription'] = application::formatTextBlock ($article['briefDescription']);
		
		# Pass the data into the template
		$this->template['article'] = $article;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Biography
	public function biography ($id)
	{
		if (!$id) {
			require_once ('biography.php');
			return;
		}
		
		$id = str_replace ('_', ' ', $id);
		
		# Get the data from the API
		$apiUrl = $this->settings['apiBaseUrl'] . '/biography?id=' . urlencode ($id) . '&baseUrl=' . $this->baseUrl . '/biographies' . '&baseUrlExpeditions=' . $this->baseUrl . '/expeditions';
		$result = file_get_contents ($apiUrl);
		$person = json_decode ($result, true);
		// application::dumpData ($person);
		
		# End if no such record
		if ($person['error']) {
			$html = $this->page404 ();
			echo $html;
			return;
		}
		
		# Format the about text
		$person['about'] = application::formatTextBlock ($person['about']);
		
		# Pass the data into the template
		$this->template['person'] = $person;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Expedition
	public function expedition ($id)
	{
		if (!$id) {
			require_once ('expedition.php');
			return;
		}
		
		# Get the data from the API
		$apiUrl = $this->settings['apiBaseUrl'] . '/expedition?id=' . urlencode ($id) . '&baseUrl=' . $this->baseUrl . '&baseUrlPeople=' . $this->baseUrl . '/biographies';
		$result = file_get_contents ($apiUrl);
		$expedition = json_decode ($result, true);
		//application::dumpData ($expedition);
		
		# End if no such record
		if ($expedition['error']) {
			$html = $this->page404 ();
			echo $html;
			return;
		}
		
		# Format the about text
		$expedition['about'] = application::formatTextBlock ($expedition['about']);
		
		# Pass the data into the template
		$this->template['expedition'] = $expedition;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
}

?>
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
			'form' => false,	// No point loading forms as not used
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
			'articles' => array (
				'description' => false,
				'url' => 'articles/',
				'tab' => 'Articles',
			),
			'article' => array (
				'description' => false,
				'url' => 'article/',
				'tab' => 'Article',
			),
			'biographies' => array (
				'description' => false,
				'url' => 'biographies/',
				'tab' => 'Biographies',
			),
			'biography' => array (
				'description' => false,
				'url' => 'biography/',
				'tab' => 'Biography',
			),
			'expeditions' => array (
				'description' => false,
				'url' => 'expeditions/',
				'tab' => 'Expeditions',
			),
			'expedition' => array (
				'description' => false,
				'url' => 'expedition/',
				'tab' => 'Expedition',
			),
			'videos' => array (
				'description' => false,
				'url' => 'videos/',
				'tab' => 'Videos',
			),
			'search' => array (
				'description' => 'Search Shackleton Online',
				'url' => 'search/',
				'tab' => 'Search Shackleton Online',
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
		
		# Specify search scope for the form; see: http://www.ucs.cam.ac.uk/web-search/search-forms
		$this->searchInclude = $_SERVER['_SITE_URL'] . $this->baseUrl . '/';
		$this->template['searchInclude'] = $this->searchInclude;
		$this->searchFilterTitle = 'Search Shackleton Online';
		$this->template['searchFilterTitle'] = $this->searchFilterTitle;
		
	}
	
	
	
	# Home
	public function home ()
	{
		// Expeditions
		$this->template['expeditions'] = 
		  array(
		    array(
		      'title' => 'Discovery',
		      'name' => 'British National Antarctic Expedition',
		      'leader' => 'Robert Falcon Scott',
		      'date' => '1901-1904',
		      'bg' => $this->baseUrl . '/images/teasers/12.jpg',
		      'link' => $this->baseUrl . '/expeditions/discovery/',
		    ),
		    array(
		      'title' => 'Nimrod',
		      'name' => 'British Antarctic Expedition',
		      'leader' => 'Ernest Shackleton',
		      'date' => '1907-1909',
		      'bg' => $this->baseUrl . '/images/teasers/15.jpg',
		      'link' => $this->baseUrl . '/expeditions/nimrod/',
		    ),
		    array(
		      'title' => 'Endurance',
		      'name' => 'Imperial Trans-Antarctic Expedition',
		      'leader' => 'Ernest Shackleton',
		      'date' => '1914-1916',
		      'bg' => $this->baseUrl . '/images/teasers/10.jpg',
		      'link' => $this->baseUrl . '/expeditions/endurance/',
		    ),
		    array(
		      'title' => 'Aurora',
		      'name' => 'Imperial Trans-Antarctic Expedition',
		      'leader' => 'Captain Aeneas Mackintosh',
		      'date' => '1914-1917',
		      'bg' => $this->baseUrl . '/images/teasers/20.jpg',
		      'link' => $this->baseUrl . '/expeditions/aurora/',
		    ),
		    array(
		      'title' => 'Quest',
		      'name' => 'Shackleton Rowett Expedition',
		      'leader' => 'Ernest Shackleton (Frank Wild)',
		      'date' => '1921-1922',
		      'bg' => $this->baseUrl . '/images/teasers/18.jpg',
		      'link' => $this->baseUrl . '/expeditions/quest/',
		    ),
		  );
		
		
		# Articles:
		
		# Get the data from the API
#!# Lower-case inconsistency
		$apiUrl = $this->settings['apiBaseUrl'] . '/articles?collection=vsii&random=10' . '&baseUrlArticles=' . $this->baseUrl . '/articles';
$apiUrl .= '&includesuppressed=1';
		$result = file_get_contents ($apiUrl);
		$data = json_decode ($result, true);
		
		# Attach image metadata
		foreach ($data['articles'] as $id => $article) {
			$data['articles'][$id]['images'] = $this->attachImageMetadata ($article['images'], $article['title']);
		}
		
		# Pass the data into the template
		$this->template['articles'] = $data['articles'];
		
		
		# People:
		
		# Get the data from the API
		$forceId = 'Shackleton, Ernest Henry';
		$apiUrl = $this->settings['apiBaseUrl'] . '/biographies' . '?collection=VSII&random=5&forceid=' . urlencode ($forceId) . '&baseUrl=' . $this->baseUrl . '/biographies' . '&baseUrlExpeditions=' . $this->baseUrl . '/expeditions';
		$result = file_get_contents ($apiUrl);
		$people = json_decode ($result, true);
		// application::dumpData ($people);
		
		# Pass the data into the template
		$this->template['people'] = $people;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Articles index
	public function articles ()
	{
		# Get the data from the API
#!# Lower-case inconsistency
		$apiUrl = $this->settings['apiBaseUrl'] . '/articles?collection=vsii' . '&baseUrlArticles=' . $this->baseUrl . '/articles';
$apiUrl .= '&includesuppressed=1';
		
		$result = file_get_contents ($apiUrl);
		$data = json_decode ($result, true);
		
		# Attach image metadata
		foreach ($data['articles'] as $id => $article) {
			$data['articles'][$id]['images'] = $this->attachImageMetadata ($article['images'], $article['title']);
		}
		
		# Pass the data into the template
		$this->template['articles'] = $data['articles'];
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
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
			$this->page404 ();
			return;
		}
		
		# Simplify template assignment
		$article['expedition'] = $article['associatedExpedition'][0]['name'];
$article['expeditionLink'] = $this->baseUrl . '/expeditions/endurance/';
#!# Is date intended to be the item date or the expedition date (range)?
		$article['date'] = $article['associatedExpedition'][0]['dateBegin'] . '-' . $article['associatedExpedition'][0]['dateEnd'];
		
		# Attach image metadata
		$article['images'] = $this->attachImageMetadata ($article['images'], $article['title']);
		
		# Format the main texts
		$article['briefDescription'] = application::formatTextBlock ($article['briefDescription']);
		$article['fullDescription'] = application::formatTextBlock ($article['fullDescription']);
		
		# Pass the data into the template
		$this->template['article'] = $article;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Function to attach image metadata
	#!# Move into API
	private function attachImageMetadata ($images, $title)
	{
		foreach ($images as $index => $src) {
			$imageLocation = '/museum/catalogue/images/' . $src;
			list ($width, $height, $type, $attr) = getimagesize ($_SERVER['DOCUMENT_ROOT'] . $imageLocation);
			$images[$index] = array (
				#!# Hard-coded title - should ideally come from MODES
				'title' => $title,
				'thumbnail' => $imageLocation,
				'large' => $imageLocation,
				'dimensions' => $width . 'x' . $height,
			);
		}
		
		# Return the data
		return $images;
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
			$this->page404 ();
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
	
	
	# Biographies
	public function biographies ()
	{
		# Get the data from the API
		$apiUrl = $this->settings['apiBaseUrl'] . '/biographies' . '?collection=VSII&baseUrl=' . $this->baseUrl . '/biographies' . '&baseUrlExpeditions=' . $this->baseUrl . '/expeditions';
		$result = file_get_contents ($apiUrl);
		$people = json_decode ($result, true);
		// application::dumpData ($people);
		
		# End if error
		if ($people['error']) {
			$this->page404 ();
			return;
		}
		
		# Pass the data into the template
		$this->template['people'] = $people;
		
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
			$this->page404 ();
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
	
	
	# Videos
	public function videos ()
	{
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
	
	
	# Search
	public function search ()
	{
		# Create a search instance
		require_once ('camUniSearch.php');
		$camUniSearch = new camUniSearch (false, 'searchform', $echoHtml = false, 'query', $this->searchInclude, $this->searchFilterTitle);
		$html = $camUniSearch->getHtml ();
		
		# Pass the data into the template
		$this->template['html'] = $html;
		
		# Process the template
		$html = $this->templatise ();
		
		# Show the HTML
		echo $html;
	}
}

?>
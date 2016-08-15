<?php
define('SMARTY_DIR', dirname (__FILE__) . '/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty;
$smarty->setTemplateDir (dirname (__FILE__) . '/app/views/');

$baseUrl = '';
if (class_exists ('frontControllerApplication')) {
	$smarty->assign ('integrationEnabled', true);
	$baseUrl = $this->baseUrl;
}
$smarty->assign ('baseUrl', $baseUrl);

$smarty->assign('article', 
  array(
    'id' => 'N: 999a',
    'title' => 'The chronometer used during the open boat journey from Elephant Island to South Georgia in 1916',
    'briefDescription' => "A chronometer watch with a silver-plated casing, white enamel face and glass front. It belonged to Sir Ernest Shackleton and was used for navigation by Captain Frank Worsley during the boat journey from Elephant Island to South Georgia in 1916 during the Imperial Trans-Antarctic Expedition 1914-16 (Endurance). It was made by S. Smith & Son, and the reverse bears the inscription 'F.A. Worsley // From E.H. Shackleton // May 1916'. The watch originally had a wooden stand (N: 999b) with an inscribed plaque (no longer in the collection).",
    'expedition' => 'Imperial Trans-Antarctic Expedition (Aurora)',
    'expeditionLink' => 'expedition.php',
    'author' => 'N/A',
    'date' => '1914',
    'bodyCopy' => '<p>A chronometer is a very accurate watch, used for navigation. This chronometer was used by Worsley during the open boat journey, aboard James Caird, from Elephant Island to South Georgia in 1916.</p><p>The voyage of the James Caird from Elephant Island to South Georgia remains one of the greatest boat journeys ever accomplished. Worsleys skill in navigating is remarkable. Using only a sextant and chronometer they reached the safety of King Haakon Bay in South Georgia on 10 May 1916 and saved the lives of the men stranded on Elephant island.</p>',
    'images' => array(
      array(
        'title' => 'Face of the watch',
        'thumbnail' => $baseUrl . '/images/treasures/watch.jpg',
        'large' => $baseUrl . '/images/watch.jpg',
        'dimensions' => '400x592'
      ),
      array(
        'title' => 'Rear of the watch',
        'thumbnail' => $baseUrl . '/images/treasures/watch2.jpg',
        'large' => $baseUrl . '/images/watch2.jpg',
        'dimensions' => '400x494'
      )
    )
  )
);

$smarty->display('article.tpl');
?>
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

$smarty->assign('person', 
  array(
    'name' => 'Thomas Crean',
    'portrait' => $baseUrl . '/images/tom-crean.jpg',
    'alias' => 'Hurrah the Willah (nom de plume on Discovery, Terra Nova and Endurance expeditions)',
    'rank' => 'Acting boatswain (Royal Navy)',
    'dates' => '1877-1938',
    'nationality' => 'British',
    'awards' => 'Polar medal (silver), Albert medal',
    'expeditions' => array(
      array(
        'title' => 'Aurora',
        'date' => '1914-1917',
        'image' => $baseUrl . '/images/teasers/expedition1.jpg',
        'link' => 'expedition.php'
      ),
      array(
        'title' => 'Quest',
        'date' => '1921-1922',
        'image' => $baseUrl . '/images/teasers/expedition2.jpg',
        'link' => 'expedition.php'
      )
    )
  )
);

$smarty->display('biography.tpl');
?>
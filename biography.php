<?php
define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('person', 
  array(
    'name' => 'Thomas Crean',
    'portrait' => '/images/tom-crean.jpg',
    'alias' => 'Hurrah the Willah (nom de plume on Discovery, Terra Nova and Endurance expeditions)',
    'rank' => 'Acting boatswain (Royal Navy)',
    'dates' => '1877-1938',
    'nationality' => 'British',
    'awards' => 'Polar medal (silver), Albert medal',
    'expeditions' => array(
      array(
        'title' => 'Aurora',
        'date' => '1914-1917',
        'image' => '/images/teasers/expedition1.jpg',
        'link' => 'expedition.php'
      ),
      array(
        'title' => 'Quest',
        'date' => '1921-1922',
        'image' => '/images/teasers/expedition2.jpg',
        'link' => 'expedition.php'
      )
    )
  )
);

$smarty->display('biography.tpl');
?>
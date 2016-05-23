<?php
define('SMARTY_DIR', dirname (__FILE__) . '/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty;

$baseUrl = '';
if (class_exists ('frontControllerApplication')) {
	$smarty->setTemplateDir (dirname (__FILE__) . '/templates/');
	$smarty->assign ('integrationEnabled', true);
	$baseUrl = $this->baseUrl;
}
$smarty->assign ('baseUrl', $baseUrl);

$smarty->assign('expedition', 
  array(
    'title' => 'Aurora',
    'name' => 'Imperial Trans-Antarctic Expedition (Aurora)',
    'leader' => 'Captain Aeneas Mackintosh',
    'date' => '1914-1917',
    'banner' => $baseUrl . '/images/expedition-banner.jpg',
    'bodyCopy' => '<p>The Ross Sea expedition was organised by Sir Ernest Henry Shackleton to meet the polar party from Endurance.</p><p>It was intended that Aurora would winter at Cape Royds. However, Captain Mackintosh and nine men were left ashore when she was driven from her mooring in a blizzard. Aurora was beset for ten months in the Ross Sea before reaching New Zealand.</p><p>Against all the odds, the stranded shore party laid food and fuel depots for Shackletons expected party towards the Beardmore Glacier. Of the ten men left ashore only seven survived, Captain Mackintosh was among those who died.</p>',
    'personnel' => array(
      array(
        'name' => 'Ernest Shackleton',
        'role' => 'Expedition leader',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/shackleton.jpg'
      ),
      array(
        'name' => 'James McIlroy',
        'role' => 'Surgeon',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/mcilroy.jpg'
      ),
      array(
        'name' => 'Lionel Greenstreet',
        'role' => '1st Officer',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/greenstreet.jpg'
      ),
      array(
        'name' => 'Frank Hurley',
        'role' => 'Photographer',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/hurley.jpg'
      ),
      array(
        'name' => 'Perce Blackborow',
        'role' => 'Steward',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/blackborow.jpg'
      ),
      array(
        'name' => 'Robert Clark',
        'role' => 'Biologist',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/clark.jpg'
      ),
      array(
        'name' => 'Thomas Crean',
        'role' => '2nd Officer',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/crean.jpg'
      ),
      array(
        'name' => 'Huberht Hudson',
        'role' => 'Navigator',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/hudson.jpg'
      ),
      array(
        'name' => 'Frank Wild',
        'role' => '2nd in Command',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/wild.jpg'
      ),
      array(
        'name' => 'Reginald James',
        'role' => 'Physician',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/james.jpg'
      ),
      array(
        'name' => 'George Marston',
        'role' => 'Artist',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/marston.jpg'
      ),
      array(
        'name' => 'Leonard Hussey',
        'role' => 'Meteorologist',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/hussey.jpg'
      ),
      array(
        'name' => 'Thomas Orde-Lees',
        'role' => 'Storekeeper and Motor Expert',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/orde-lees.jpg'
      ),
      array(
        'name' => 'Frank Worsley',
        'role' => 'Captain',
        'link' => 'biography.php',
        'image' => $baseUrl . '/images/pioneers/worsley.jpg'
      )
    ),
    'treasures' => array(
      array(
        'title' => 'Watch',
        'link' => 'article.php',
        'thumbnail' => $baseUrl . '/images/treasures/watch.jpg'
      ),
      array(
        'title' => 'Goggles',
        'link' => 'article.php',
        'thumbnail' => $baseUrl . '/images/treasures/goggles.jpg'
      ),
      array(
        'title' => 'Instrument',
        'link' => 'article.php',
        'thumbnail' => $baseUrl . '/images/treasures/instrument.jpg'
      ),
      array(
        'title' => 'Map',
        'link' => 'article.php',
        'thumbnail' => $baseUrl . '/images/treasures/map.jpg'
      ),
      array(
        'title' => 'Telescope',
        'link' => 'article.php',
        'thumbnail' => $baseUrl . '/images/treasures/telescope.jpg'
      )
    )
  )
);

$smarty->display('expedition.tpl');
?>
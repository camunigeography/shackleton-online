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
    'date' => '1877-1938',
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
      ),
    ),
    'about' => "
        <p>Tom Crean was born at Gurtuchrane, a farming area near Anascaul on the Dingle Peninsula in Ireland's County Kerry. He received a rudimentary education at Brackluin School, Anascaul, and, like many of his time, saw the potential for obtaining a better life by enlisting in the Royal Navy, which he did shortly before his sixteenth birthday. Crean underwent his training on board HMS Impregnable at Devonport. By 1899 his hard work and dedication had seen him rise to petty officer second class, but in December 1900 he was demoted back to able seaman. Crean was serving on HMS Ringarooma in New Zealand in December 1901, when Robert Falcon Scott required a replacement sailor for Discovery on his British National Antarctic Expedition 1902-04 (Discovery). Crean volunteered and was accepted. During the expedition, Crean's performance was so impressive that Scott recommended he be promoted to petty officer first class.</p>
        <blockquote>
          \"I seemed to vow to myself that some day I would go to the region of ice and snow and go on and on till I came to one of the poles of the earth, the end of the axis upon which this great round ball turns.\"
          <cite>Ernest Shackleton</cite>
        </blockquote>
        <p>In 1910 Scott gladly accepted Crean for his British Antarctic Expedition 1907-09 (Terra Nova). As a member of the final support party, he accompanied Scott's Polar Party up the Beardmore Glacier and onto the Antarctic Plateau.  On the return journey, he and William Lashly pulled Lieutenant Teddy Evans, who was terribly sick with scurvy, on a sledge for many days. When Evans became too ill to be moved, Crean walked the last 35 miles to Hut Point alone to summon help.  For their roles in rescuing Evans, Crean and Lashly received the Albert Medal for bravery.</p>
        <p>Promoted to chief petty officer, after the expedition Crean was posted to the naval barracks at Chatham. In May 1914 he was accepted as a member of the Imperial Trans-Antarctic Expedition 1914-16 (Endurance). He joined Endurance as second officer, thus becoming one of the few men to serve under both Scott and Shackleton. Shackleton decided to include Crean in the six-man party that would cross the Antarctic continent. During the time aboard Endurance, Crean was responsible for one of the six dog teams, but his dogs were all eventually shot after the ship sank and it was decided that the men, forced to camp for months on the ice, could no longer afford to feed them.</p>
        <img class=\"biography-inset\" src=\"{$baseUrl}/images/tom-crean2.jpg\" alt=\"Tom Crean\">
        <p>Crean proved to be a vital asset to the party's survival. On the voyage to Elephant Island, he was second in command of one of the three boats. Selected for the attempt to reach South Georgia in James Caird, Crean then accompanied Shackleton and Frank Worsley on the epic trek over the previously unexplored interior of South Georgia to the Norwegian whaling station at Stromness. And when Shackleton finally returned to Elephant Island to rescue his men, Crean was still at his side.</p>
        <p>Crean returned to Britain in November 1916 and resumed his naval career. He served in the Great War, during which he was promoted to acting boatswain. Towards the end of the war he married Nell Herlihy, his childhood sweetheart. In March 1920 he was invalided out of the navy with defective vision following a fall while serving in HMS Fox.</p>
        <p>Shackleton invited Crean to accompany him on the Shackleton-Rowett Expedition, but Crean decided instead to settle in Anascaul, where in 1927 he opened a pub named the South Pole Inn. Crean died shortly after his sixty-first birthday when delays in an operation for an acute appendicitis resulted in a fatal infection setting in. He was buried in the family tomb that he had built in the cemetery at Ballynacourty, close to his birthplace.</p>
        <p>Crean was awarded the Polar Medal in silver for each of his three Antarctic expeditions. He is commemorated by Mount Crean (77°53'S, 159°30'E), a rocky mountain forming the central and highest summit of the Lashly Mountains in South Victoria Land, and by the Crean Glacier (54°08'S, 37°01'W), a four-mile-long glacier that flows from Wilckens Peaks to the head of Antarctic Bay on the north coast of South Georgia.</p>",
  )
);

$smarty->display('biography.tpl');
?>
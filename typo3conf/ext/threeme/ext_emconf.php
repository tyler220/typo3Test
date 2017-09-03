<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "threeme".
 *
 * Auto generated 03-09-2017 22:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Threeme Distribution',
  'description' => 'Kickstart your TYPO3 project with Threeme. Visit https://www.threeme.de for detailed information. The distribution focus on rapid Frontend development and preconfigurated Backend with low entrylevel for editors.',
  'category' => 'distribution',
  'version' => '4.1.0',
  'state' => 'stable',
  'clearcacheonload' => true,
  'author' => 'Andre Steiling',
  'author_email' => 'andre@threeme.de',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-8.7.99',
      'fluid_styled_content' => '8.7.0',
      'form' => '8.7.0',
      'ws_scss' => '1.1.0',
      'mask' => '3.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'news' => '6.0.0',
      'be_secure_pw' => '8.0.0',
      'realurl' => '2.2.0',
      'dd_googlesitemap' => '2.1.0',
      'min' => '1.3.0',
      'typo3_console' => '4.6.0',
    ),
  ),
  'uploadfolder' => true,
  'createDirs' => '',
  'author_company' => '',
);


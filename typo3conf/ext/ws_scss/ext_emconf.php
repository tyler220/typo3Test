<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ws_scss".
 *
 * Auto generated 03-09-2017 22:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'SASS compiler for TYPO3',
  'description' => 'Compiles scss files to CSS files.',
  'category' => 'fe',
  'version' => '1.1.4',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => 'typo3temp/ws_scss',
  'clearcacheonload' => false,
  'author' => 'Sven Wappler',
  'author_email' => 'typo3YYYY@wappler.systems',
  'author_company' => 'WapplerSystems',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.1.0-8.7.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:7:{s:12:"ext_icon.gif";s:4:"31d4";s:17:"ext_localconf.php";s:4:"be03";s:24:"ext_typoscript_setup.txt";s:4:"b038";s:40:"Classes/Hooks/RenderPreProcessorHook.php";s:4:"7467";s:37:"Classes/Utility/Lessphp/LessCache.php";s:4:"d4e5";s:38:"Classes/Utility/Lessphp/LessParser.php";s:4:"3c72";s:14:"doc/manual.sxw";s:4:"6d4c";}',
);


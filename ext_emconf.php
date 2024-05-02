<?php
$EM_CONF[$_EXTKEY] = [
   'title' => 'RZM Site Package',
   'description' => 'The basic Site Skelleton',
   'category' => 'templates',
   'author' => 'Christian Rupp',
   'author_email' => 'rupp.dev@gmail.com',
   'author_company' => 'Raumzeitmedia GmbH',
   'version' => '1.0.0',
   'state' => 'stable',
   'constraints' => [
      'depends' => [
         'typo3' => '12.4.0-13.0.1',
         'fluid_styled_content' => '12.4.0-13.0.1',
      ],
      'conflicts' => [
      ],
      'suggests' => [ 
         'content_defender' => '',
	      'mask' => '',
         'container' => '',
      ],
   ],
   'uploadfolder' => 0,
   'createDirs' => '',
   'clearCacheOnLoad' => 1
];
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
         'typo3' => '8.7.0-9.5.99',
         'fluid_styled_content' => '8.7.0-9.5.99'
      ],
      'conflicts' => [
      ],
      'suggests' => [
         'content_defender' => '3.0.11-3.0.99',
	      'mask' => '4.1.2-4.1.99'
      ],
   ],
   'uploadfolder' => 0,
   'createDirs' => '',
   'clearCacheOnLoad' => 1
];
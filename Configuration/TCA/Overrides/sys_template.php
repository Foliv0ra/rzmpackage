<?php
defined('TYPO3') || die();

call_user_func(function()
{
   /**
    * Extension key
    */
   $extensionKey = 'rzmpackage';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'Configuration/TypoScript',
      'RZM Site Package'
   );
});
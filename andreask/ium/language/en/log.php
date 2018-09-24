<?php

/**
*
* IUM (Inactive User Manager Reminder extension for the phpBB Forum Software package.
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @copyright (c) 2016 by Andreas Kourtidis
* @license   GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the CREDITS.txt file.
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SENT_REMINDERS'		=>	'%s saadeti meeldetuletused.',
	'USERS_DELETED'			=>	'"%1s" kasutajad kustutati, taotluse tüüp : "%2s"',
	'USER_DELETED'			=>	'Kasutaja "%1s" kustutatud, taotluse tüüp : "%2s"',
	'SOMETHING_WRONG'		=>	'Teie taotlusega oli midagi valesti. Kustutatud kasutajad ei vastanud andmebaasi tegelikele kasutajatele',
	'USER_SELF_DELETED'		=>	'Kasutaja kustutas ennast ise. Postituste konfigureerimine oli seatud "%s"',
));

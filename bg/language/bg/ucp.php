<?php
/**
*
* ucp [Bulgarian]
*
* @package language
* @version $Id: ucp.php 9478 2009-04-22 13:08:23Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
'TERMS_OF_USE_CONTENT'	=> 'При посещаването на “%1$s” (“%1$s”, “%2$s”), вие се съгласявате на условиата написани долу, но ако не сте съгласни, не използвайте “%1$s”. Запазваме правото си да променяме по всяко време условията и при промяна ще се опитаме на направим всично възможно да ви уведомим.<br />
    Въпреки, че администраторите и модераторите на този форум ще се опитат да премахнат или да променят възможно най-бързо всеки материал, носещ вреда, невъзможно е да бъдат прегледани всички съобщения. Вие разбирате, че всички съобщения на тези форуми изразяват личното мнение на съответните им автори, а не на администраторите, модераторите или уебмастъра (като изключим съобщенията, пуснати от тези хора), и следователно те не носят никаква отговорност.<br />
	<br />
	Приемате се да не пишете никакъв груб, неприличен, вулгарен, заплашителен, сексуално-ориентиран или всякакъв друг материал, който нарушава законите. Такова поведение може да доведе до моменталното и постоянното ви изгонване от форумите (както и уведомяването на вашия доставчик). IP адресите, от които са направени всички съобщения се записват и могат да бъдат използвани в такива случаи. Приемате, че уебмастъра, администратора и модераторите на този форум имат правото да премахват, променят или заключват всяка тема по всяко време, ако намерят за уместно. Като потребител одобрявате записването на всяка информация, която въведете, във база данни. Въпреки, че тази информация няма да бъде предоставяна на трети страни без вашето одобрение, уебмастъра, администратора и модераторите на този форум не могат да бъдат отговорни за всякакви хакерски атаки, които могат да доведат до разкриване на данните.<br />
	',

    'PRIVACY_POLICY'		=> 'Тази полица ще ви обясни в детайли как “%1$s” заедно с компаниите съдружници (“%1$s”, “%2$s”) използват информацията, коятос е събира по време на вашата сесия.<br />
    Събирането на информация става по два начина. Първо, достъпа до вашия сайт ще предизвика phpBB софтуера да направи бисквитки. Бисквитките са малки текстови файлове свалени на вашия компютър. Първите две бисквитки съдържат информация за потребителя ID и идентификатор на сесиите session-id, всичко това се изпълнява автоматично от phpBB. Третата бисквитка Ви позволява да разберете кои форуми/теми са вече прочетени и кои не.<br />
	<br />
	Втория начин по които ние събираме информация е чрез Вас. Пример когато пускате мнение като анонимен потребител или след като сте се регистрирали и сте влезли.<br />
	<br />
	Вашия акаунт ще съдържа уникално потребителско име, персонална парола за вход в акаунта и персонален валиден email адрес. Информацията в акаунта Ви се защитава от законите на държавата в която е хостнат сайта. Всякаква друга информация изисквана за да се регистрирате се отклонява от правилата. Във всички случай Вие решавате каква ще бъде информацията в публичния Ви акаунт.<br />
	<br />
	Паролата Ви е криптирана така, че да бъде на сигурно място. Препоръчително е когато се регистрирате в други форуми/сайтове да използвате различни пароли. Чрез паролата Вие можете да влезете в акаунта си, пазете я. Ако по някаква причина забравите паролата си можете да използвате опцията "забравих си паролата".<br />
	<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Акаунта беше активиран успешно. Благодарим Ви, че се регистрирахте.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Акаунта Ви беше активиран.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Акаунта Ви беше успешно активиран.',
	'ACCOUNT_ADDED'					=> 'Благодарим Ви, че се регистрирахте, вашият акаунт е създаден. Вие можете да влезете като използвате потребителското име и парола.',
	'ACCOUNT_COPPA'					=> 'Акаунта Ви беше създаден, но трябва да бъде одобрен, проверете email-а си за повече информация.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Акаунта беше обновен. Този форум изисква потвърждение на промените през email. Проверете email адреса си за повече информация.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Акаунта беше обновен. Този форум изисква потвърждение на промените от администратор. Проверете email адреса си за повече информация.',
	'ACCOUNT_INACTIVE'				=> 'Акаунта Ви беше създаден. Администратора изисква потвърждение на регистрацията от email. Активиращ код е изпратен на email адреса Ви.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Акаунта Ви беше създаден. Администратора изисква потвърждение на регистрацията от него. Администратора е информиран, че сте се регистрирал.',
	'ACTIVATION_EMAIL_SENT'			=> 'Активиращ email беше изпратен на пощата Ви.',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => 'Активиращ email беше изпратен на администратора.',
	'ADD'							=> 'Добави',
	'ADD_BCC'						=> 'Добави [копие]',
	'ADD_FOES'						=> 'Добави нови врагове',
	'ADD_FOES_EXPLAIN'				=> 'Можете да въведете няколко потребителски имена на различни редове',
	'ADD_FOLDER'					=> 'Добави папка',
	'ADD_FRIENDS'					=> 'Добави нови приятели',
	'ADD_FRIENDS_EXPLAIN'			=> 'Можете да въведете няколко потребителски имена на различни редове',
	'ADD_NEW_RULE'					=> 'Добави нов филтър',
	'ADD_RULE'						=> 'Добави филтър',
	'ADD_TO'						=> 'Добави [до]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Тук можете да добавяте нови потребители в групата. Също така можете да избирате дали въпросната група да стане група по поразбиране за тези потребители. Въведете всяко потребителско име на нов ред.',
	'AVATAR_NOT_ALLOWED'			=> 'Аватара не може да се покаже, защото аватарите са забранени.',

	'ADMIN_EMAIL'					=> 'Искам да получавам информация от администраторите',
	'AGREE'							=> 'Съгласен съм',
	'ALLOW_PM'						=> 'Искам да получавам лични съобщения',
	'ALLOW_PM_EXPLAIN'				=> 'Администраторите и модераторите винаги ще могат да Ви изпращат съобщения.',
	'ALREADY_ACTIVATED'				=> 'Акаунта Ви вече е активиран.',
	'ATTACHMENTS_EXPLAIN'			=> 'Това са всички прикачени файлове.',
	'ATTACHMENTS_DELETED'			=> 'Прикачените файлове бяха изтрити.',
	'ATTACHMENT_DELETED'			=> 'Прикачения файл беше изтрит.',
	'AVATAR_CATEGORY'				=> 'Категория',
	'AVATAR_EXPLAIN'				=> 'Максимален размер - ширина %1$d пиксела, височина %2$d пиксела, размер на файл: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Аватарите са изключени.',
	'AVATAR_GALLERY'				=> 'Галерия',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Аватара не може да бъде качен %s',
	'AVATAR_PAGE'					=> 'Страница',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Аватара ви не може да бъде показан, защото е в непозволен формат.',

	'BACK_TO_DRAFTS'			=> 'Върни се към черновите',
	'BACK_TO_LOGIN'				=> 'Върни се към страницата за вход',
	'BIRTHDAY'					=> 'Рожден ден',
	'BIRTHDAY_EXPLAIN'			=> 'Ако посочите точна дата, Вашият рожден ден ще бъде изведен на началната страница.',
	'BOARD_DATE_FORMAT'			=> 'Формат',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Синтаксисът трябва да е идентичен на <a href="https://www.php.net/date">date()</a> функцията в PHP.',
	'BOARD_DST'					=> 'DST',
	'BOARD_LANGUAGE'			=> 'Език',
	'BOARD_STYLE'				=> 'Стил',
	'BOARD_TIMEZONE'			=> 'Времева зона',
	'BOOKMARKS'					=> 'Любими',
	'BOOKMARKS_EXPLAIN'			=> 'Вие можете да записвате теми. Изберете отметката за всяка любима тема, която искате да изтриете и натиснете <em>Изтрий от любими</em>.',
	'BOOKMARKS_DISABLED'		=> 'Записките са изключени в този форум',
	'BOOKMARKS_REMOVED'			=> 'Записките бяха успешно изтрити',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Вие не можете да изтриете или промените съобщението си.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Съобщенията не могат да бъдат преместени към папка която искате да изтриете.',
	'CANNOT_MOVE_FROM_SPECIAL'   => 'Не можете да премествате съобщения от изходящата поща.',
	'CANNOT_RENAME_FOLDER'		=> 'Папката не може да бъде преименувана.',
	'CANNOT_REMOVE_FOLDER'		=> 'Папката не може да бъде изтрита.',
	'CHANGE_DEFAULT_GROUP'		=> 'Промени групата по подразбиране',
	'CHANGE_PASSWORD'			=> 'Промени парола',
	'CLICK_GOTO_FOLDER'         => '%1$sОтиди към твоята “%3$s” папка%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sВърни се към твоята “%3$s” папка%2$s',
	'CONFIRMATION'				=> 'Потвърждаване на регистрацията',
	'CONFIRM_CHANGES'			=> 'Потвърди промените',	
	'CONFIRM_EMAIL'				=> 'Потвърди email адреса',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Ако искате да промените email адреса си.',
	'CONFIRM_EXPLAIN'			=> 'За да се избегнат автоматичните регистрации, администратора изисква потвърждение на регистрацията с код за сигурност. Кода можете да видите долу. Ако имате проблеми се свържете с %sадминистратора%s.',
	'VC_REFRESH'				=> 'Обнови кода за потвърждение',
	'VC_REFRESH_EXPLAIN'		=> 'Ако не четете кода можете да изискате нов като натиснете на линка.',

	'CONFIRM_PASSWORD'			=> 'Потвърди парола',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'В случай, че искате да промените паролата си.',
	'COPPA_BIRTHDAY'			=> 'За да продължите с регистрационната процедура трябва да посочите кога сте роден/а.',
	'COPPA_COMPLIANCE'			=> 'COPPA съгласие',
	'COPPA_EXPLAIN'				=> 'Когато натиснете "Давай" акаунта ще бъде създаден. Акаунта няма да бъде активиран докато не бъде одобрен. Ще ви бъде изпратен email с повече информация.',
	'CREATE_FOLDER'				=> 'Добави папка…',
	'CURRENT_IMAGE'				=> 'Аватар',
	'CURRENT_PASSWORD'			=> 'Парола',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Трябва да въведете сегашната си парола, ако искате да промените потребителското име или мейл адреса си.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'За да промените потребителското име или мейл адреса си трябва да въведете сегашната си парола.',
	'CUR_PASSWORD_EMPTY'      => 'Трябва да въведете текущата ви парола.',
	'CUR_PASSWORD_ERROR'		=> 'Паролата е грешна.',
	'CUSTOM_DATEFORMAT'			=> 'По ваш избор…',

	'DEFAULT_ACTION'			=> 'По подразбиране',
	'DEFAULT_ACTION_EXPLAIN'	=> '',
	'DEFAULT_ADD_SIG'			=> 'Винаги прилагай подписа ми',
	'DEFAULT_BBCODE'			=> 'Включи BBCode по подразбиране',
	'DEFAULT_NOTIFY'			=> 'Винаги ме уведомявай за отговори',
	'DEFAULT_SMILIES'			=> 'Включи усмивки по подразбиране',
	'DEFINED_RULES'				=> 'Филтри',
	'DELETED_TOPIC'				=> 'Темата е изтрита',
	'DELETE_ATTACHMENT'			=> 'Изтрий прикачения файл',
	'DELETE_ATTACHMENTS'		=> 'Изтрий прикачените файлове',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Сигурен ли си че искаш да изтриеш прикачения файл?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Сигурен ли си че искаш да изтриеш прикачените файлове?',
	'DELETE_AVATAR'				=> 'Изтрий изображението',
	'DELETE_COOKIES_CONFIRM'	=> 'Сигурен ли си че искаш да изтриеш всички бисквитки?',
	'DELETE_MARKED_PM'			=> 'Изтрий маркираните съобщения',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Сигурен ли си че искаш да изтриеш всички маркирани съобщения?',
	'DELETE_OLDEST_MESSAGES'	=> 'Изтрий старите съобщения',
	'DELETE_MESSAGE'			=> 'Изтрий съобщение',
	'DELETE_MESSAGE_CONFIRM'	=> 'Сигурен ли си че искаш да изтриеш това лично съобщение?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Изтрий всички съобщения в изтритата папка',
	'DELETE_RULE'				=> 'Изтрий филтъра',
	'DELETE_RULE_CONFIRM'		=> 'Сигурен ли сте, че искате да изтриете този филтър?',
	'DEMOTE_SELECTED'			=> 'Понижи избрания',
	'DISABLE_CENSORS'			=> 'Включи цензурата на думи',
	'DISPLAY_GALLERY'			=> 'Покажи галерията',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Въведенията email домейн е с невалиден MX запис.',
	'DOWNLOADS'					=> 'Сваляния',
	'DRAFTS_DELETED'			=> 'Всички избрани чернови са успешно изтрити.',
	'DRAFTS_EXPLAIN'			=> 'Тук можете да преглеждате, променяте и изтривате своите чернови.',
	'DRAFT_UPDATED'				=> 'Черновата е променена успешно.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Тук можете да променяте черновите си. Те не съдържат информация за анкети и прикачени файлове.',
	'EMAIL_BANNED_EMAIL'		=> 'Въведеният e-mail адрес не може да бъде използван.',
	'EMAIL_REMIND'				=> 'Това е email адреса, който сте въвели при регистрацията на акаунт.',
	'EMAIL_TAKEN_EMAIL'			=> 'Въведения email адрес вече се използва от друг потребител',
	'EMPTY_DRAFT'				=> 'Трябва да въведете съобщения за да промените черновата',
	'EMPTY_DRAFT_TITLE'			=> 'Трябва да въведете заглавие на черновата',
	'EXPORT_AS_XML'				=> 'Експорт като XML',
	'EXPORT_AS_CSV'				=> 'Експорт като CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Експорт като CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Експорт като TXT',
	'EXPORT_AS_MSG'				=> 'Експорт като MSG',
	'EXPORT_FOLDER'				=> 'Експорт папка',

	'FIELD_REQUIRED'					=> 'Полето “%s” трябва да бъде попълнено.',
	'FIELD_TOO_SHORT'					=> 'Полето “%1$s” е прекалено късо, минимума е %2$d букви.',
	'FIELD_TOO_LONG'					=> 'Полето “%1$s” е прекалено дълго, максимума е %2$d букви.',
	'FIELD_TOO_SMALL'					=> 'Стойността “%1$s” е прекалено малка, минимума е %2$d.',
	'FIELD_TOO_LARGE'					=> 'Стойността “%1$s” е прекалено голяма, максимума е %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Полето “%s” съдържа непозволени знаци, само числата са разрешени.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Полето “%s” съдържа непозволени знаци, само латинските знаци са позволени.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Полето “%s” съдържа непозволени знаци, само латинските букви, празно място или -+_[] са позволени.',
	'FIELD_INVALID_DATE'				=> 'Полето “%s” съдържа невалидна дата.',
	'FIELD_INVALID_VALUE'            => 'Полето “%s” съдържа невалидна стоност.',

	'FOE_MESSAGE'				=> 'Съобщение от враг',
	'FOES_EXPLAIN'				=> 'Враговете са потребители, които могат да бъдат игнорирани по подразбиране. Мненията на тези потребители няма да бъдат показвани и лични съобщения от такива потребители няма да бъдат получавани.',
	'FOES_UPDATED'				=> 'Списъка беше променен успешно',
	'FOLDER_ADDED'				=> 'Папката е успешно добавена',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d от %2$d съобщения',
	'FOLDER_NAME_EMPTY'			=> 'Трябва да въведете име на папката.',
	'FOLDER_NAME_EXIST'			=> 'Папката <strong>%s</strong> вече съществува',
	'FOLDER_OPTIONS'			=> 'Опции на папката',
	'FOLDER_RENAMED'			=> 'Папката беше успешно преименувана',
	'FOLDER_REMOVED'			=> 'Папката беше успешно изтрита',
	'FOLDER_STATUS_MSG'			=> 'Папката %1$d%% е пълна (%2$d от %3$d съобщения)',
	'FORWARD_PM'				=> 'Пренасочи лично съобщение',
	'FORCE_PASSWORD_EXPLAIN'	=> 'За да можете да използвате форума трябва да промените паролата си',
	'FRIEND_MESSAGE'			=> 'Съобщение от приятел',
	'FRIENDS'					=> 'Приятели',
	'FRIENDS_EXPLAIN'			=> 'Чрез добавянето на приятели, Вие можете да комуникирате с тях лесно. Съобщенията от приятели ще бъдат маркирани.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Приятелския списък беше променен успешно',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Действието при препълнена папка беше променено',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Оригинално съобщение --------',
	'FWD_SUBJECT'				=> 'Заглавие: %s',
	'FWD_DATE'					=> 'Дата: %s',
	'FWD_FROM'					=> 'От: %s',
	'FWD_TO'					=> 'До: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Съобщение',

	'HIDE_ONLINE'				=> 'Невидим',
	'HIDE_ONLINE_EXPLAIN'       => 'Промяната на настройките ще повлияе при следващото влизане във форума.',
	'HOLD_NEW_MESSAGES'			=> 'Не приемай нови съобщения (Съобщенията ще бъдат задържани, докато не се освободи място)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Новите съобщения ще бъдат задържания',

	'IF_FOLDER_FULL'			=> 'Ако папката е пълна',
	'IMPORTANT_NEWS'			=> 'Новини',
	'INVALID_USER_BIRTHDAY'		=> 'Въведеният рожден ден е с невалидна дата.',
	'INVALID_CHARS_USERNAME'	=> 'Името съдържа забранени знаци.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Паролата не съдържа нужните знаци.',
	'ITEMS_REQUIRED'			=> 'Нещата маркирани с * са задължителни за попълване',

	'JOIN_SELECTED'				=> 'Присъедини се към избраните',

	'LANGUAGE'					=> 'Език',
	'LINK_REMOTE_AVATAR'		=> 'Аватар URL',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Въведете адреса на Аватара, от където той ще бъде копиран тук.',
	'LINK_REMOTE_SIZE'			=> 'Размери на аватара',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Специфична височина и ширина, остави празно или 0 за автоматично засичане.',
	'LOGIN_EXPLAIN_UCP'			=> 'Трябва да влезете в акаунта си за да имате достъп до контролния панел',
	'LOGIN_REDIRECT'			=> 'Вие влязохте успешно.',
	'LOGOUT_FAILED'				=> 'Грешка в сесиите. Свържете се с администратор ако проблемите продължат.',
	'LOGOUT_REDIRECT'			=> 'Вие излязохте успешно.',

	'MARK_IMPORTANT'				=> 'Маркирай като важно',
	'MARKED_MESSAGE'				=> 'Маркирани съобщения',
	'MAX_FOLDER_REACHED'			=> 'Максималният брой папки беше достигнат',
	'MESSAGE_BY_AUTHOR'				=> 'от',
	'MESSAGE_COLOURS'				=> 'Цветове на съобщението',
	'MESSAGE_DELETED'				=> 'Съобщението беше успешно изтрито',
	'MESSAGE_EDITED'				=> 'Съобщението беше успешно променено.',
	'MESSAGE_HISTORY'				=> 'История на съобщението',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Съобщението беше изтрито от автора си преди да пристигне до вас',
	'MESSAGE_SENT_ON'				=> 'на',
	'MESSAGE_STORED'				=> 'Съобщението беше изпратено успешно',
	'MESSAGE_TO'					=> 'До',
	'MESSAGES_DELETED'				=> 'Съобщението беше изтрито успешно',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Премести съобщения от изтритата папка до',
	'MOVE_DOWN'						=> 'Премести надолу',
	'MOVE_MARKED_TO_FOLDER'			=> 'Премести маркираните в %s',
	'MOVE_PM_ERROR'					=> 'Грешка при преместването на съобщенията в новата папка, само %1$d от %2$d съобщения бяха преместени.',
	'MOVE_TO_FOLDER'				=> 'Премести в папка',
	'MOVE_UP'						=> 'Премести нагоре',
	'NEW_EMAIL_CONFIRM_EMPTY'       => 'Не в въведен email за потвърждение.',

	'NEW_EMAIL_ERROR'				=> 'Email адреса който сте въвели не съвпада.',
	'NEW_FOLDER_NAME'				=> 'Ново име на папка',
	'NEW_PASSWORD'					=> 'Нова парола',
	'NEW_PASSWORD_CONFIRM_EMPTY'   => 'Трябва да въведете потвърждение на паролата.',
	'NEW_PASSWORD_ERROR'			=> 'Новата парола която сте въвели не съвпада.',
	'NOTIFY_METHOD'					=> 'Уведомителен метод',
	'NOTIFY_METHOD_BOTH'			=> 'и двете',
	'NOTIFY_METHOD_EMAIL'			=> 'само Email',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Метод за изпращане на съобщения.',
	'NOTIFY_METHOD_IM'				=> 'Само Jabber',
	'NOTIFY_ON_PM'					=> 'Уведомявай ме за нови лични съобщения',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Вие не можете да добавите анонимен потребител към приятелите си.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Вие не можете да добавяте роботи(ботове) като ваши приятели.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Вие не можете да добавите враг към приятелите си.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Вие не можете да добавите себе си към приятелите си.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Вие не можете да добавите администратор или модератор към враговете си.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Вие не можете да добавите анонимен потребители към враговете си.',
	'NOT_ADDED_FOES_BOTS'			=> 'Вие не можете да добавяте роботи(ботове) като ваши врагове.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Вие не можете да добавите врагове към приятелите си.',
	'NOT_ADDED_FOES_SELF'			=> 'Вие не можете да добавите себе си към враговете си.',
	'NOT_AGREE'						=> 'Не съм съгласен',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Папката получател “%s” е пълна.',
	'NOT_MOVED_MESSAGE'				=> 'Вие имате задържано 1 лично съобщение, защото папката е пълна.',
	'NOT_MOVED_MESSAGES'			=> 'Вие имате задържани %d лични съобщения, защото папката е пълна.',
	'NO_ACTION_MODE'				=> 'Няма взето действие.',
	'NO_AUTHOR'						=> 'Няма дефиниран автор на съобщението.',
	'NO_AVATAR_CATEGORY'			=> 'Без',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Вие не можете да изтривате лични съобщения.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Вие не можете да променяте лични съобщения.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Вие не можете да пренасочвате лични съобщения.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Вие не можете да изпращате лични съобщения до групи.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Вие не можете да изисквате нова парола.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Вие не можете да четете задържани лични съобщения.',
	'NO_AUTH_READ_MESSAGE'			=> 'Вие не можете да четете лични съобщения.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Вие не можете да прочетете това съобщение, защото беше изтрито от автора си.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Вие не можете да изпращате лични съобщения.',
	'NO_AUTH_SIGNATURE'				=> 'Вие не можете да прилагате подпис',

	'NO_BCC_RECIPIENT'			=> 'Без',
	'NO_BOOKMARKS'				=> 'няма',
	'NO_BOOKMARKS_SELECTED'		=> 'Няма избрани записки',
	'NO_EDIT_READ_MESSAGE'      => 'Личното съобщение не може да бъде променено, защото вече е прочетено от получателя.',
	'NO_EMAIL_USER'				=> 'Изпратената информация не може да бъде намерена',
	'NO_FOES'					=> 'Няма врагове',
	'NO_FRIENDS'				=> 'Няма приятели',
	'NO_FRIENDS_OFFLINE'		=> 'Няма приятели offline',
	'NO_FRIENDS_ONLINE'			=> 'Няма приятели online',
	'NO_GROUP_SELECTED'			=> 'Няма избрана група',
	'NO_IMPORTANT_NEWS'			=> 'няма',
	'NO_MESSAGE'				=> 'Личното съобщение не може да бъде намерено',
	'NO_NEW_FOLDER_NAME'		=> 'Трябва да изберете ново име на папката',
	'NO_NEWER_PM'				=> 'Няма нови съобщения',
	'NO_OLDER_PM'				=> 'Няма стари съобщения',
	'NO_PASSWORD_SUPPLIED'		=> 'Не можеш да влезеш без парола.',
	'NO_RECIPIENT'				=> 'Не е избран получател',
	'NO_RULES_DEFINED'			=> 'няма',
	'NO_SAVED_DRAFTS'			=> 'Няма чернови',
	'NO_TO_RECIPIENT'			=> 'Без',
	'NO_WATCHED_FORUMS'			=> 'няма',
	'NO_WATCHED_SELECTED'		=> 'Вие не сте избрали форуми или теми към които сте се абонирали.',
	'NO_WATCHED_TOPICS'			=> 'няма',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Паролата трябва да е м/у %1$d и %2$d знака дълга и трябва да съдържа латински букви',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Трябва да е м/у %1$d и %2$d знака.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Паролата трябва да е м/у %1$d и %2$d знака дълга и трябва да е миксирана',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Паролата трябва да е м/у %1$d и %2$d знака дълга и трябва да съдържа символи',
	'PASSWORD'					=> 'Парола',
	'PASSWORD_ACTIVATED'		=> 'Новата парола беше активирана',
	'PASSWORD_UPDATED'			=> 'Паролата беше успешно изпратена до оригиналния ви email адрес.',
	'PERMISSIONS_RESTORED'		=> 'Успешно възстановени оригиналните разрешения.',
	'PERMISSIONS_TRANSFERRED'	=> 'Правата са успешно прехвърлени от <strong>%s</strong>.',
	'PM_DISABLED'				=> 'Комуникирането чрез лични съобщения е изключено',
	'PM_FROM'					=> 'От',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Това съобщение беше изпратено от потребител, който вече не е регистриран.',
	'PM_ICON'					=> 'ЛС икона',
	'PM_INBOX'					=> 'Входящи',
	'PM_NO_USERS'				=> 'Потребителите не същетсвуват.',
	'PM_OUTBOX'					=> 'Изходящи',
	'PM_SENTBOX'				=> 'Изпратени',
	'PM_SUBJECT'				=> 'Заглавие',
	'PM_TO'						=> 'Изпрати до',
	'PM_USERS_REMOVED_NO_PM'	=> 'Някой от потребителите не могат да бъдат добавени, защото са изключили личните си съобщения.',
	'POPUP_ON_PM'				=> 'Отваряй получените съобщения в нов прозорец',
	'POST_EDIT_PM'				=> 'Промени съобщението',
	'POST_FORWARD_PM'			=> 'Пренасочи съобщението',
	'POST_NEW_PM'				=> 'Ново съобщението',
	'POST_PM_LOCKED'			=> 'Комуникирането чрез лични съобщения е заключено',
	'POST_PM_POST'				=> 'Цитирай мнение',
	'POST_QUOTE_PM'				=> 'Цитирай съобщение',
	'POST_REPLY_PM'				=> 'Отговори на съобщение',
	'PRINT_PM'					=> 'Принтирай',
	'PREFERENCES_UPDATED'		=> 'Настройките са обновени.',
	'PROFILE_INFO_NOTICE'		=> 'Тази информация ще бъде видима и за другите потребители. Бъдете внимателни, когато въвеждате лична информация. Всички полета, маркирани с *, са задължителни.',
	'PROFILE_UPDATED'			=> 'Профила беше обновен.',

	'RECIPIENT'							=> 'Получател',
	'RECIPIENTS'						=> 'Получатели',
	'REGISTRATION'						=> 'Регистрация',
	'RELEASE_MESSAGES'					=> '%sПусни всички чакащи съобщения%s… те ще бъдат записани, ако има достатъчно място.',
	'REMOVE_ADDRESS'					=> 'Изтрий адрес',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Изтрий избраните записки',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Сигурен ли сте че искате да изтриете всички записки?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Изтрий маркираните записки',
	'REMOVE_FOLDER'						=> 'Изтрий папката',
	'REMOVE_FOLDER_CONFIRM'				=> 'Сигурен ли сте че искате да изтриете папката?',
	'RENAME'							=> 'Преименувай',
	'RENAME_FOLDER'						=> 'Преименувай папката',
	'REPLIED_MESSAGE'					=> 'Отговори',
	'REPLY_TO_ALL'						=> 'Отговори на изпращача и всички получатели.',
	'REPORT_PM'							=> 'Доклавай личното съобщение',
	'RESIGN_SELECTED'					=> 'Остави избраните',
	'RETURN_FOLDER'						=> '%1$sВърни се към предишната папка%2$s',
	'RETURN_UCP'						=> '%sВърни се към контролния панел%s',
	'RULE_ADDED'						=> 'Филтъра е успешно добавен',
	'RULE_ALREADY_DEFINED'				=> 'Филтъра съществува',
	'RULE_DELETED'						=> 'Филтъра беше изтрит',
	'RULE_LIMIT_REACHED'				=> 'Не можете да добавяте повече ЛС правила. Достигнахте максимума.',
	'RULE_NOT_DEFINED'					=> 'Филтъра е невалиден',
	'RULE_REMOVED_MESSAGE'				=> 'Едно лично съобщение беше изтрито заради добавения филтър.',
	'RULE_REMOVED_MESSAGES'				=> '%d лични съобщения бяха изтрити заради добавения филтър.',

	'SAME_PASSWORD_ERROR'		=> 'Новата парола която сте въвели е еднаква с настоящата Ви',
	'SEARCH_YOUR_POSTS'			=> 'Покажи личните мнения',
	'SEND_PASSWORD'				=> 'Изпрати парола',
	'SENT_AT'					=> 'Изпратено на',
	'SHOW_EMAIL'				=> 'Винаги показвай email адреса ми',
	'SIGNATURE_EXPLAIN'			=> 'Лимит %d символа',
	'SIGNATURE_PREVIEW'			=> 'Преглед',
	'SIGNATURE_TOO_LONG'		=> 'Подписа Ви е прекалено дълъг.',
	'SORT'						=> 'Сортирай',
	'SORT_COMMENT'				=> 'Файл коментар',
	'SORT_DOWNLOADS'			=> 'Сваляния',
	'SORT_EXTENSION'			=> 'Разширение',
	'SORT_FILENAME'				=> 'Име на файла',
	'SORT_POST_TIME'			=> 'Време на добавяне',
	'SORT_SIZE'					=> 'Големина на файла',

	'TIMEZONE'					=> 'Времева зона',
	'TO'						=> 'До',
	'TOO_MANY_RECIPIENTS'		=> 'Прекалено много получатели',
	'TOO_MANY_REGISTERS'		=> 'Вие превишихте броя позволени регистрации. Моля, опитайте по-късно.',

	'UCP'						=> 'Контролен панел',
	'UCP_ACTIVATE'				=> 'Активирай акаунта',
	'UCP_ADMIN_ACTIVATE'		=> 'Трябва да въведете валиден email адрес преди акаунта Ви да бъде активиран. Администратора ще прегледа регистрацията, ако я одобри ще получите информация на email адреса.',
	'UCP_AIM'					=> 'AOL IM',
	'UCP_ATTACHMENTS'			=> 'Прикачени файлове',
	'UCP_COPPA_BEFORE'			=> 'Преди %s',
	'UCP_COPPA_ON_AFTER'		=> 'На или след %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Трябва да въведете валиден email адрес преди акаунта Ви да бъде активиран. Ще получите email с информация и активираща връзка.',
	'UCP_ICQ'					=> 'ICQ номер',
	'UCP_JABBER'				=> 'Jabber',

	'UCP_MAIN'					=> 'Общи',
	'UCP_MAIN_ATTACHMENTS'		=> 'Файлове',
	'UCP_MAIN_BOOKMARKS'		=> 'Записки',
	'UCP_MAIN_DRAFTS'			=> 'Чернови',
	'UCP_MAIN_FRONT'			=> 'Индекс',
	'UCP_MAIN_SUBSCRIBED'		=> 'Абонаменти',

	'UCP_MSNM'					=> 'WL/MSN',
	'UCP_NO_ATTACHMENTS'		=> 'няма',

	'UCP_PREFS'					=> 'Настройки на форума',
	'UCP_PREFS_PERSONAL'		=> 'Главни',
	'UCP_PREFS_POST'			=> 'Писане на мнение',
	'UCP_PREFS_VIEW'			=> 'Разглеждане на мнения',
	
	'UCP_PM'					=> 'Лични съобщения',
	'UCP_PM_COMPOSE'			=> 'Напиши съобщение',
	'UCP_PM_DRAFTS'				=> 'Чернови',
	'UCP_PM_OPTIONS'			=> 'Настройки',
	'UCP_PM_POPUP'				=> 'Лични съобщения',
	'UCP_PM_POPUP_TITLE'		=> 'Лични съобщения pop-up',
	'UCP_PM_UNREAD'				=> 'Непрочетени съобщения',
	'UCP_PM_VIEW'				=> 'Виж съобщенията',

	'UCP_PROFILE'				=> 'Личен профил',
	'UCP_PROFILE_AVATAR'		=> 'Аватар',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Лични',
	'UCP_PROFILE_REG_DETAILS'	=> 'Регистрация',
	'UCP_PROFILE_SIGNATURE'		=> 'Подпис',

	'UCP_USERGROUPS'			=> 'Потребителски групи',
	'UCP_USERGROUPS_MEMBER'		=> 'Членство',
	'UCP_USERGROUPS_MANAGE'		=> 'Управляване на групи',

	'UCP_REGISTER_DISABLE'			=> 'Създаването на акаунт е невъзможно.',
	'UCP_REMIND'					=> 'Изпрати парола',
	'UCP_RESEND'					=> 'Изпрати активиращ email',
	'UCP_WELCOME'					=> 'Добре дошли в контролния панел. От тук Вие можете да преглеждате профила си, да променяте настройки, абонаменти и други. Ако администраторът е позволил, можете да изпращате лични съобщения до други потребители.',
	'UCP_YIM'						=> 'Yahoo',
	'UCP_ZEBRA'						=> 'Приятели &amp; Врагове',
	'UCP_ZEBRA_FOES'				=> 'Врагове',
	'UCP_ZEBRA_FRIENDS'				=> 'Приятели',
	'UNDISCLOSED_RECIPIENT'			=> 'Поверителен получател',
	'UNKNOWN_FOLDER'				=> 'Непозната папка',
	'UNWATCH_MARKED'				=> 'Премахни абонамент',
	'UPLOAD_AVATAR_FILE'			=> 'От компютъра',
	'UPLOAD_AVATAR_URL'				=> 'Качи от външен URL адрес',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Въведете адреса на Аватара, от където той ще бъде копиран тук.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Потребителското име трябва да е м/у %1$d и %2$d символа дълго и да използва само alphanumeric.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Потребителското име трябва да е м/у %1$d и %2$d символа дълго и да използва alphanumeric, празно място или -+_[].',
	'USERNAME_ASCII_EXPLAIN'		=> 'Потребителското име трябва да е м/у %1$d и %2$d символа дълго и да използва само ASCII знаци, без специални символи.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Потребителското име трябва да е м/у %1$d и %2$d символа дълго и да използва само букви и цифри.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Потребителското име трябва да е м/у %1$d и %2$d знака дълго и да използва букви, цифри, празно място или +-[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Дължината трябва да е м/у %1$d и %2$d символа.',
	'USERNAME_TAKEN_USERNAME'		=> 'Името е заето.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Името е забранено.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Името не може да бъде намерено.',

	'VIEW_AVATARS'				=> 'Показвай аватари',
	'VIEW_EDIT'					=> 'Виж/Промени',
	'VIEW_FLASH'				=> 'Показвай флаш анимации',
	'VIEW_IMAGES'				=> 'Показвай изображения',
	'VIEW_NEXT_HISTORY'			=> 'Следващото ЛС',
	'VIEW_NEXT_PM'				=> 'Следващо ЛС',
	'VIEW_PM'					=> 'Виж съобщението',
	'VIEW_PM_INFO'				=> 'Детайли на съобщението',
	'VIEW_PM_MESSAGE'			=> '1 съобщение',
	'VIEW_PM_MESSAGES'			=> '%d съобщения',
	'VIEW_PREVIOUS_HISTORY'		=> 'Предишното ЛС',
	'VIEW_PREVIOUS_PM'			=> 'Предишно ЛС',
	'VIEW_SIGS'					=> 'Показвай сигнатурите',
	'VIEW_SMILIES'				=> 'Показвай усмивките',
	'VIEW_TOPICS_DAYS'			=> 'Покажи теми от минали дни',
	'VIEW_TOPICS_DIR'			=> 'Тип',
	'VIEW_TOPICS_KEY'			=> 'Сортирай по',
	'VIEW_POSTS_DAYS'			=> 'Покажи мнения от минали дни',
	'VIEW_POSTS_DIR'			=> 'Тип',
	'VIEW_POSTS_KEY'			=> 'Сортирай по',

	'WATCHED_EXPLAIN'			=> 'Отдолу виждате списък на вашите абонаменти. Вие ще бъдете уведомен при всяка променя. За да се откажете от абонаменти, натиснете <em>Премахни абонамент</em>.',
	'WATCHED_FORUMS'			=> 'Абонамент форуми',
	'WATCHED_TOPICS'			=> 'Абонамент теми',
	'WRONG_ACTIVATION'			=> 'Активиращият код е грешен',

	'YOUR_DETAILS'				=> 'Активност',
	'YOUR_FOES'					=> 'Врагове',
	'YOUR_FOES_EXPLAIN'			=> 'За да изтриете враг, трябва да маркирате името му и да натиснете <em>Давай</em>',
	'YOUR_FRIENDS'				=> 'Приятели',
	'YOUR_FRIENDS_EXPLAIN'		=> 'За да изтриете приятел, трябва да маркирате името му и да натиснете <em>Давай</em>',
	'YOUR_WARNINGS'				=> 'Ниво на предупреждение',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Сложи в папка',
		'MARK_AS_READ'		=> 'Маркирай като прочетено',
		'MARK_AS_IMPORTANT'	=> 'Маркирай съобщението',
		'DELETE_MESSAGE'	=> 'Изтрий съобщението'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Относно',
		'SENDER'	=> 'Подател',
		'MESSAGE'	=> 'Съобщение',
		'STATUS'	=> 'Статус',
		'TO'		=> 'Получател'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'като',
		'IS_NOT_LIKE'	=> 'не е като',
		'IS'			=> 'е',
		'IS_NOT'		=> 'не е',
		'BEGINS_WITH'	=> 'започва с',
		'ENDS_WITH'		=> 'завършва с',
		'IS_FRIEND'		=> 'е приятел',
		'IS_FOE'		=> 'е враг',
		'IS_USER'		=> 'е потребител',
		'IS_GROUP'		=> 'е в група',
		'ANSWERED'		=> 'отговорен',
		'FORWARDED'		=> 'пренасочен',
		'TO_GROUP'		=> 'в моята група по подразбиране',
		'TO_ME'			=> 'до мен'
	),


	'GROUPS_EXPLAIN'	=> 'Потребителските групи помагат на администратора за управлението на потребителите. По подразбиране Вие сте в определена група, това е твоята група по подразбиране. От администратора зависи дали можете да променяте групата по подразбиране. Вие можете да членувате и в други групи, някои от тях имат екстри.',
	'GROUP_LEADER'		=> 'Лидери',
	'GROUP_MEMBER'		=> 'Членство',
	'GROUP_PENDING'		=> 'Висящи членувания',
	'GROUP_NONMEMBER'	=> 'Различни групи',
	'GROUP_DETAILS'		=> 'Детайли',

	'NO_LEADER'		=> 'Групата няма лидер',
	'NO_MEMBER'		=> 'Няма групи',
	'NO_PENDING'	=> 'Няма висящи членове',
	'NO_NONMEMBER'	=> 'Няма група без потребители',
));

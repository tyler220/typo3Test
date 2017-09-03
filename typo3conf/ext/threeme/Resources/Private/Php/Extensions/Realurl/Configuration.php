<?php
$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array (
    '_DEFAULT' => array (
        'init' => array (
            'enableCHashCache' => true,
            'appendMissingSlash' => 'ifNotFile,redirect',
            'adminJumpToBackend' => true,
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,
        ),
        'pagePath' => array (
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => 7,
            'rootpage_id' => 1,
            'firstHitPathCache' => 1,
            'autoUpdatePathCache' => '1',
        ),
        'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => true,
            'index' => array(
/*
                    'example-feed.xml' => array(
                        'keyValues' => array(
                            'type' => 100,
                        ),
                    ),
*/
            ),
        ),
        'preVars' => array(
            # Language configuration, see
            # https://github.com/dmitryd/typo3-realurl/wiki/Notes-for-Integrators#configuring-languages
        ),
        'postVarSets' => array(
            '_DEFAULT' => array(
                # EXT:news
                'artikel' => array(
/*
                    array(
                        'GETvar' => 'tx_news_pi1[day]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[month]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[year]',
                    ),
*/
                    array(
                        'GETvar' => 'tx_news_pi1[news]',
                        'lookUpTable' => array(
                            'table' => 'tx_news_domain_model_news',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-',
                            ),
                            'languageGetVar' => 'L',
                            'languageExceptionUids' => '',
                            'languageField' => 'sys_language_uid',
                            'transOrigPointerField' => 'l10n_parent',
                            'autoUpdate' => 1,
                            'expireDays' => 180,
                        ),
                    ),
                ),
                # EXT:news archive
                'archiv' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][day]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][month]' ,
                            'valueMap' => array(
                            'january' => '01',
                            'february' => '02',
                            'march' => '03',
                            'april' => '04',
                            'may' => '05',
                            'june' => '06',
                            'july' => '07',
                            'august' => '08',
                            'september' => '09',
                            'october' => '10',
                            'november' => '11',
                            'december' => '12',
                        )
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                    ),
                ),
            ),
        ),
    ),
);

# Multiple domain configuration
# $TYPO3_CONF_VARS['EXTCONF']['realurl']['www.domain.tld'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
# $TYPO3_CONF_VARS['EXTCONF']['realurl']['www.domain.tld']['pagePath']['rootpage_id'] = PID;

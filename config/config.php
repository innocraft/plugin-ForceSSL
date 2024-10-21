<?php

/**
 * InnoCraft - the company of the makers of Piwik Analytics, the free/libre analytics platform
 *
 * @link https://www.innocraft.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

return array(
    'Piwik\Config' => \Piwik\DI::decorate(function ($previous) {
        $general = $previous->General;
        $general['force_ssl'] = 1;
        $previous->General = $general;

        return $previous;
    }),
);

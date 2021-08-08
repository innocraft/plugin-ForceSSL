<?php
/**
 * InnoCraft - the company of the makers of Piwik Analytics, the free/libre analytics platform
 *
 * @link https://www.innocraft.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\ForceSsl;

class ForceSSL extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return array(
            'Tracker.getJavascriptCode' => 'forceSslInJsCode'
        );
    }

    public function forceSslInJsCode(&$codeImpl, $parameters)
    {
        $codeImpl['protocol'] = 'https://';
    }

    public function isTrackerPlugin()
    {
        return true;
    }
}

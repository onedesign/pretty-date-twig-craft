<?php
namespace Craft;

class PrettyDatePlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Pretty Date');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'One Design Company';
    }

    public function getDeveloperUrl()
    {
        return 'http://onedesigncompany.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.prettydate.twigextensions.PrettyDateTwigExtension');

        return new PrettyDateTwigExtension();
    }
}

<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class PrettyDateTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'PrettyDate';
    }

    public function getFilters()
    {
        return array(
            'prettyDate' => new Twig_Filter_Method($this, 'prettyDate'),
        );
    }

    public function prettyDate($date)
    {
        return date_format($date, 'F j, Y');
    }
}

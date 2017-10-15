<?php
/**
 * Created by PhpStorm.
 * User: edvinassaltenis
 * Date: 15/10/2017
 * Time: 02:22
 */
namespace AppBundle\Twig;
use Ornicar\GravatarBundle\GravatarApi;

class GravExtention extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('gravatar', array($this, 'gravatarFilter')),
        );
    }

    public function gravatarFilter($email)
    {
        $gravatar = new GravatarApi();

        return $gravatar->getUrl($email);
    }
}
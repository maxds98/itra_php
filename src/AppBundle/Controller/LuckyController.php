<?php
/**
 * Created by PhpStorm.
 * User: maxds
 * Date: 19.12.17
 * Time: 17:09
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
        $user = new User();
        $id = $user->getUsername();
        return new Response(
            '<html><body>User id'.var_dump($id).'</body></html>'
        );
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: maxds
 * Date: 19.12.17
 * Time: 17:09
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
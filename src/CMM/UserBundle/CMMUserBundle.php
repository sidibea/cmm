<?php

namespace CMM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CMMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

<?php

namespace SweetSallyBe\FormsBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class FormsBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
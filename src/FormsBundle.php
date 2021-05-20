<?php


namespace SweetSallyBe\FormsBundle;


use SweetSallyBe\FormsBundle\DependencyInjection\FormsBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FormsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

}
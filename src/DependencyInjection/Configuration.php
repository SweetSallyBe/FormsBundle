<?php

namespace SweetSallyBe\FormsBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('twig');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
                ->scalarNode('paths')
                    ->defaultValue(['%kernel.project_dir%/vendor/sweet-sally-be/forms-bundle/src/Form/View' => 'FormsBundle'])
                    ->info('Path to the view')
                    ->end()
                ->scalarNode('form_themes')
                    ->defaultValue(['@FormsBundle/fields.html.twig'])
                    ->end()
            ->end();
        return $treeBuilder;
    }
}
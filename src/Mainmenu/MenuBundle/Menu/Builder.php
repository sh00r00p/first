<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mainmenu\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        
        $menu->setChildrenAttribute('class', 'nav pull-right');
        
        $menu->addChild('Home', array('uri' => '/'))
             ->setAttribute('dropdown', true);
        
        $menu['Home']->addChild('Shoes', array('uri' => '/shoes'))
                     ->setAttribute('divider_append', true)
                     ->setAttribute('class', 'first_level')
                     ->setAttribute('dropdown', true);
        
        $menu['Home']['Shoes']->addChild('Interview', array('uri' => '/16'))
                     ->setAttribute('class', 'second_level');
        
        $menu['Home']->addChild('Investment', array('uri' => '/invest'))
                ->setAttribute('class', 'first_level')    
                ->setAttribute('dropdown', true);
        
        $menu['Home']['Investment']->addChild('Philosophy', array('uri' => '/18'))
                    ->setAttribute('class', 'second_level');
        
        $menu->addChild('About', array('uri' => '/about'))
             ->setAttribute('divider_prepend', true);
        
        return $menu;
    }
}
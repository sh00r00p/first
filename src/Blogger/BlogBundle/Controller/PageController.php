<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BloggerBlogBundle:Blog',  'b')
                    ->addOrderBy('b.created', 'DESC')
                    ->getQuery()
                    ->getResult();

        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    public function shoesAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $cat = 'shoes';
        
        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BloggerBlogBundle:Blog',  'b')
                    ->where('b.tags = :category')
                    ->setParameter('category', $cat)
                    ->getQuery()
                    ->getResult();
        
        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function investAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $cat = 'investment';
        
        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BloggerBlogBundle:Blog',  'b')
                    ->where('b.tags = :category')
                    ->setParameter('category', $cat)
                    ->getQuery()
                    ->getResult();
        
        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
}
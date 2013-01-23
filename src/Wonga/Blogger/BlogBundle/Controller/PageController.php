<?php
// src/Wonga/Blogger/BlogBundle/Controller/PageController.php

namespace Wonga\Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('WongaBloggerBlogBundle:Page:index.html.twig');
    }
    
    public function aboutAction()
    {
        return $this->render('WongaBloggerBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction()
    {
      $enquiry = new Enquiry();
      $form = $this->createForm(new EnquiryType(), $enquiry);

      $request = $this->getRequest();
      if ($request->getMethod() == 'POST') {
          $form->bindRequest($request);

          if ($form->isValid()) {
              // Perform some action, such as sending an email

              // Redirect - This is important to prevent users re-posting
              // the form if they refresh the page
              return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
          }
      }
        return $this->render('WongaBloggerBlogBundle:Page:contact.html.twig');
    }
}
<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_94ce95b92ef582f7ea332713357e07679365c9ec0977f52ebeba8a08d33c02af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e4486776823e65f3079a7bd55f70e32cfd58cb2cd48381c033251fcf26a50a3 = $this->env->getExtension("native_profiler");
        $__internal_0e4486776823e65f3079a7bd55f70e32cfd58cb2cd48381c033251fcf26a50a3->enter($__internal_0e4486776823e65f3079a7bd55f70e32cfd58cb2cd48381c033251fcf26a50a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4486776823e65f3079a7bd55f70e32cfd58cb2cd48381c033251fcf26a50a3->leave($__internal_0e4486776823e65f3079a7bd55f70e32cfd58cb2cd48381c033251fcf26a50a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fa7902fd369c09e60cd325ea84c992a18913cd158417a6d26d3c8b7422acb32 = $this->env->getExtension("native_profiler");
        $__internal_5fa7902fd369c09e60cd325ea84c992a18913cd158417a6d26d3c8b7422acb32->enter($__internal_5fa7902fd369c09e60cd325ea84c992a18913cd158417a6d26d3c8b7422acb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5fa7902fd369c09e60cd325ea84c992a18913cd158417a6d26d3c8b7422acb32->leave($__internal_5fa7902fd369c09e60cd325ea84c992a18913cd158417a6d26d3c8b7422acb32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

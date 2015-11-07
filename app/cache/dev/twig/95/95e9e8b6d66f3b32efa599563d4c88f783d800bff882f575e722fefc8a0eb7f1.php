<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e2eac27a6bf2b3d75fc9837d5ef16e20e65ee9ecc0e739b1f4796ebbd330121f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_243308458d470a7a4b71eb2512726a134d72800aa5db8a65007085230a14e40a = $this->env->getExtension("native_profiler");
        $__internal_243308458d470a7a4b71eb2512726a134d72800aa5db8a65007085230a14e40a->enter($__internal_243308458d470a7a4b71eb2512726a134d72800aa5db8a65007085230a14e40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243308458d470a7a4b71eb2512726a134d72800aa5db8a65007085230a14e40a->leave($__internal_243308458d470a7a4b71eb2512726a134d72800aa5db8a65007085230a14e40a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36161fa3b654e7b5d9c2b9d49da17c8ecd0c63c414be725bc19a4675fc20fedd = $this->env->getExtension("native_profiler");
        $__internal_36161fa3b654e7b5d9c2b9d49da17c8ecd0c63c414be725bc19a4675fc20fedd->enter($__internal_36161fa3b654e7b5d9c2b9d49da17c8ecd0c63c414be725bc19a4675fc20fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_36161fa3b654e7b5d9c2b9d49da17c8ecd0c63c414be725bc19a4675fc20fedd->leave($__internal_36161fa3b654e7b5d9c2b9d49da17c8ecd0c63c414be725bc19a4675fc20fedd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

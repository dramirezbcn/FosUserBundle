<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1237e9b4797cceed86427682b122aa825e8710b1a1eaa914ca2d2af0886f5c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_228db42a0a9911b051c564d8f822b81444ea25a33060082a7603fcb1d332e3f9 = $this->env->getExtension("native_profiler");
        $__internal_228db42a0a9911b051c564d8f822b81444ea25a33060082a7603fcb1d332e3f9->enter($__internal_228db42a0a9911b051c564d8f822b81444ea25a33060082a7603fcb1d332e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228db42a0a9911b051c564d8f822b81444ea25a33060082a7603fcb1d332e3f9->leave($__internal_228db42a0a9911b051c564d8f822b81444ea25a33060082a7603fcb1d332e3f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56833d792976c95036a343bb4efda71656a2aa33469767622723f0a89b2338c5 = $this->env->getExtension("native_profiler");
        $__internal_56833d792976c95036a343bb4efda71656a2aa33469767622723f0a89b2338c5->enter($__internal_56833d792976c95036a343bb4efda71656a2aa33469767622723f0a89b2338c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56833d792976c95036a343bb4efda71656a2aa33469767622723f0a89b2338c5->leave($__internal_56833d792976c95036a343bb4efda71656a2aa33469767622723f0a89b2338c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92e2c7fb4d8f1ccf15ac8cc0246540d5482a1c98285eee30aaec1b7a5652b8d1 = $this->env->getExtension("native_profiler");
        $__internal_92e2c7fb4d8f1ccf15ac8cc0246540d5482a1c98285eee30aaec1b7a5652b8d1->enter($__internal_92e2c7fb4d8f1ccf15ac8cc0246540d5482a1c98285eee30aaec1b7a5652b8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92e2c7fb4d8f1ccf15ac8cc0246540d5482a1c98285eee30aaec1b7a5652b8d1->leave($__internal_92e2c7fb4d8f1ccf15ac8cc0246540d5482a1c98285eee30aaec1b7a5652b8d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91de94ac2afc9b81454d7dceb3d2b806bab17645858135817250c1ad769db9ea = $this->env->getExtension("native_profiler");
        $__internal_91de94ac2afc9b81454d7dceb3d2b806bab17645858135817250c1ad769db9ea->enter($__internal_91de94ac2afc9b81454d7dceb3d2b806bab17645858135817250c1ad769db9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_91de94ac2afc9b81454d7dceb3d2b806bab17645858135817250c1ad769db9ea->leave($__internal_91de94ac2afc9b81454d7dceb3d2b806bab17645858135817250c1ad769db9ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

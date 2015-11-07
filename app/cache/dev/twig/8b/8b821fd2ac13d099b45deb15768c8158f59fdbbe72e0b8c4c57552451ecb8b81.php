<?php

/* base.html.twig */
class __TwigTemplate_70a2cdefc98f4d94e73cacc1c811196291904ebcaee5d35d8c881b154dcb3792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e01112809807ec6824dd3c9e988197de5898371d692bc652094542c248dc6c62 = $this->env->getExtension("native_profiler");
        $__internal_e01112809807ec6824dd3c9e988197de5898371d692bc652094542c248dc6c62->enter($__internal_e01112809807ec6824dd3c9e988197de5898371d692bc652094542c248dc6c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e01112809807ec6824dd3c9e988197de5898371d692bc652094542c248dc6c62->leave($__internal_e01112809807ec6824dd3c9e988197de5898371d692bc652094542c248dc6c62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcdeb6cde3cbc7b2ca24cfd6a4aceba6e1289b6a4b774fc434edfed0b04e703d = $this->env->getExtension("native_profiler");
        $__internal_bcdeb6cde3cbc7b2ca24cfd6a4aceba6e1289b6a4b774fc434edfed0b04e703d->enter($__internal_bcdeb6cde3cbc7b2ca24cfd6a4aceba6e1289b6a4b774fc434edfed0b04e703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bcdeb6cde3cbc7b2ca24cfd6a4aceba6e1289b6a4b774fc434edfed0b04e703d->leave($__internal_bcdeb6cde3cbc7b2ca24cfd6a4aceba6e1289b6a4b774fc434edfed0b04e703d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_498fc76b8d8f212efe18933287d3c586f0c79a1950ed71df361463d4c7c8214f = $this->env->getExtension("native_profiler");
        $__internal_498fc76b8d8f212efe18933287d3c586f0c79a1950ed71df361463d4c7c8214f->enter($__internal_498fc76b8d8f212efe18933287d3c586f0c79a1950ed71df361463d4c7c8214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_498fc76b8d8f212efe18933287d3c586f0c79a1950ed71df361463d4c7c8214f->leave($__internal_498fc76b8d8f212efe18933287d3c586f0c79a1950ed71df361463d4c7c8214f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_202008902ac0a231ac383c0b1fd48c61c1cb3f3e284d54efcaf34f1a57b8769d = $this->env->getExtension("native_profiler");
        $__internal_202008902ac0a231ac383c0b1fd48c61c1cb3f3e284d54efcaf34f1a57b8769d->enter($__internal_202008902ac0a231ac383c0b1fd48c61c1cb3f3e284d54efcaf34f1a57b8769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_202008902ac0a231ac383c0b1fd48c61c1cb3f3e284d54efcaf34f1a57b8769d->leave($__internal_202008902ac0a231ac383c0b1fd48c61c1cb3f3e284d54efcaf34f1a57b8769d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf13491e1a50c4b7aa4db7ca43a501047ae1c63e733ad47c9b9de9846039cfe8 = $this->env->getExtension("native_profiler");
        $__internal_cf13491e1a50c4b7aa4db7ca43a501047ae1c63e733ad47c9b9de9846039cfe8->enter($__internal_cf13491e1a50c4b7aa4db7ca43a501047ae1c63e733ad47c9b9de9846039cfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf13491e1a50c4b7aa4db7ca43a501047ae1c63e733ad47c9b9de9846039cfe8->leave($__internal_cf13491e1a50c4b7aa4db7ca43a501047ae1c63e733ad47c9b9de9846039cfe8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

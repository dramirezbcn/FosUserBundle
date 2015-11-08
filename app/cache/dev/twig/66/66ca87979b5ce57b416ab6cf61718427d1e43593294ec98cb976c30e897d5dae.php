<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_ba94176c1a37c2268fc23d00802327d8adbf5d0a4380fd7836f732e66d25cdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5c8ae945ea562e78d54abc3d64c3b15d21d0fc018ae40f1ea8f619ee64ca68f = $this->env->getExtension("native_profiler");
        $__internal_e5c8ae945ea562e78d54abc3d64c3b15d21d0fc018ae40f1ea8f619ee64ca68f->enter($__internal_e5c8ae945ea562e78d54abc3d64c3b15d21d0fc018ae40f1ea8f619ee64ca68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e5c8ae945ea562e78d54abc3d64c3b15d21d0fc018ae40f1ea8f619ee64ca68f->leave($__internal_e5c8ae945ea562e78d54abc3d64c3b15d21d0fc018ae40f1ea8f619ee64ca68f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

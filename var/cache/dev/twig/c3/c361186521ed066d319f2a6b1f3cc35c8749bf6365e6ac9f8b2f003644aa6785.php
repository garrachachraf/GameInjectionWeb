<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_49dd02e190bca1b3629763065b114f6c806f608a509d0da32823f8c5b29ccb9f extends Twig_Template
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
        $__internal_95c590c63a66c868385ddbed86084781a589e1fb5382b91d8161b470e88a4a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c590c63a66c868385ddbed86084781a589e1fb5382b91d8161b470e88a4a8a->enter($__internal_95c590c63a66c868385ddbed86084781a589e1fb5382b91d8161b470e88a4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_347e097aa66c43650ac448e520510aab15ba0b30b61326e896c233ee21170700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347e097aa66c43650ac448e520510aab15ba0b30b61326e896c233ee21170700->enter($__internal_347e097aa66c43650ac448e520510aab15ba0b30b61326e896c233ee21170700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_95c590c63a66c868385ddbed86084781a589e1fb5382b91d8161b470e88a4a8a->leave($__internal_95c590c63a66c868385ddbed86084781a589e1fb5382b91d8161b470e88a4a8a_prof);

        
        $__internal_347e097aa66c43650ac448e520510aab15ba0b30b61326e896c233ee21170700->leave($__internal_347e097aa66c43650ac448e520510aab15ba0b30b61326e896c233ee21170700_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

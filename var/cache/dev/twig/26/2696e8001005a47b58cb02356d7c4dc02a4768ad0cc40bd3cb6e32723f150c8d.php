<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_644840eb5ac63b0e68e0e726108d99814a83148627be831c6a687cf62107c587 extends Twig_Template
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
        $__internal_2b7da9e303ad2addcf0670f85d0cae39c46c2e1eec034099d8c23b6942e34360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7da9e303ad2addcf0670f85d0cae39c46c2e1eec034099d8c23b6942e34360->enter($__internal_2b7da9e303ad2addcf0670f85d0cae39c46c2e1eec034099d8c23b6942e34360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_15babc50fff99ab8bbd839470edda1e26f08ab367f7cac11f6221a7f1e9eff4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15babc50fff99ab8bbd839470edda1e26f08ab367f7cac11f6221a7f1e9eff4b->enter($__internal_15babc50fff99ab8bbd839470edda1e26f08ab367f7cac11f6221a7f1e9eff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2b7da9e303ad2addcf0670f85d0cae39c46c2e1eec034099d8c23b6942e34360->leave($__internal_2b7da9e303ad2addcf0670f85d0cae39c46c2e1eec034099d8c23b6942e34360_prof);

        
        $__internal_15babc50fff99ab8bbd839470edda1e26f08ab367f7cac11f6221a7f1e9eff4b->leave($__internal_15babc50fff99ab8bbd839470edda1e26f08ab367f7cac11f6221a7f1e9eff4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

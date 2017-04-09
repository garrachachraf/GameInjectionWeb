<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_21f37a3f1dc258f11b7a7fabf655041f3e158dde5cca364589c753b5310161d9 extends Twig_Template
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
        $__internal_e2d27dcc71b7bc0ef706428436337b304f003f1d58de11f06299e41f857b97fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d27dcc71b7bc0ef706428436337b304f003f1d58de11f06299e41f857b97fb->enter($__internal_e2d27dcc71b7bc0ef706428436337b304f003f1d58de11f06299e41f857b97fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_827f69002cfe558b1184af99b95cdd69d8f1536e950c828657431f0bc33a411b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827f69002cfe558b1184af99b95cdd69d8f1536e950c828657431f0bc33a411b->enter($__internal_827f69002cfe558b1184af99b95cdd69d8f1536e950c828657431f0bc33a411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e2d27dcc71b7bc0ef706428436337b304f003f1d58de11f06299e41f857b97fb->leave($__internal_e2d27dcc71b7bc0ef706428436337b304f003f1d58de11f06299e41f857b97fb_prof);

        
        $__internal_827f69002cfe558b1184af99b95cdd69d8f1536e950c828657431f0bc33a411b->leave($__internal_827f69002cfe558b1184af99b95cdd69d8f1536e950c828657431f0bc33a411b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

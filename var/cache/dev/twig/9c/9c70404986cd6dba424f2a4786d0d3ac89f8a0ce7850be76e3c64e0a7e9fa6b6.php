<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_11931d752f15dbb34726c67a9a14b89f8e35e7bd288c0c162841abb64030c1d6 extends Twig_Template
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
        $__internal_051608776dedb0ec65ec1e879c1c58d0f029a9a2e7f8da0fe2716a9912e9b0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051608776dedb0ec65ec1e879c1c58d0f029a9a2e7f8da0fe2716a9912e9b0b5->enter($__internal_051608776dedb0ec65ec1e879c1c58d0f029a9a2e7f8da0fe2716a9912e9b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_373d4e283042a3d153e7604837d1bd4c172aa4aef174250d3ce372acd72da882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373d4e283042a3d153e7604837d1bd4c172aa4aef174250d3ce372acd72da882->enter($__internal_373d4e283042a3d153e7604837d1bd4c172aa4aef174250d3ce372acd72da882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        // line 1
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 2
            echo "<h1>erreur</h1>

";
        } else {
            // line 5
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        
        $__internal_051608776dedb0ec65ec1e879c1c58d0f029a9a2e7f8da0fe2716a9912e9b0b5->leave($__internal_051608776dedb0ec65ec1e879c1c58d0f029a9a2e7f8da0fe2716a9912e9b0b5_prof);

        
        $__internal_373d4e283042a3d153e7604837d1bd4c172aa4aef174250d3ce372acd72da882->leave($__internal_373d4e283042a3d153e7604837d1bd4c172aa4aef174250d3ce372acd72da882_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user  == null %}
<h1>erreur</h1>

{% else %}
    <h1>{{ user.pseudo }}</h1>
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/LoginBundle/Resources/views/Default/index.html.twig");
    }
}

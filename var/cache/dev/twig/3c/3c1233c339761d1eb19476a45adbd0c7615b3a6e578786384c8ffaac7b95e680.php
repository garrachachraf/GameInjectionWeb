<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_7d2891a051b6c059005a9bf65771b55044effacc34ed1fedfbab6a587831b905 extends Twig_Template
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
        $__internal_1f5cebbbc7963a2b2540003baea7c135d5d3f11b9f5a9444e7b0c2c2ad1c2569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5cebbbc7963a2b2540003baea7c135d5d3f11b9f5a9444e7b0c2c2ad1c2569->enter($__internal_1f5cebbbc7963a2b2540003baea7c135d5d3f11b9f5a9444e7b0c2c2ad1c2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_945a80e90f74ecb22dc9b657de2ca1e1979af50cb2e652a44ff79a31e200b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945a80e90f74ecb22dc9b657de2ca1e1979af50cb2e652a44ff79a31e200b0c9->enter($__internal_945a80e90f74ecb22dc9b657de2ca1e1979af50cb2e652a44ff79a31e200b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_1f5cebbbc7963a2b2540003baea7c135d5d3f11b9f5a9444e7b0c2c2ad1c2569->leave($__internal_1f5cebbbc7963a2b2540003baea7c135d5d3f11b9f5a9444e7b0c2c2ad1c2569_prof);

        
        $__internal_945a80e90f74ecb22dc9b657de2ca1e1979af50cb2e652a44ff79a31e200b0c9->leave($__internal_945a80e90f74ecb22dc9b657de2ca1e1979af50cb2e652a44ff79a31e200b0c9_prof);

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
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle/Resources/views/Default/index.html.twig");
    }
}

<?php

/* @EloboostedLogin/Default/index.html.twig */
class __TwigTemplate_bdd64e52fc263226e6e1b539021359ac786014fc3766d3c69b047a9e69e134a8 extends Twig_Template
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
        $__internal_ad7c3d9c2bb7dcc8ea5fab55e955a34ede9666837a91bbde9ff2c8d8a38dd7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7c3d9c2bb7dcc8ea5fab55e955a34ede9666837a91bbde9ff2c8d8a38dd7f8->enter($__internal_ad7c3d9c2bb7dcc8ea5fab55e955a34ede9666837a91bbde9ff2c8d8a38dd7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_c8dbf67e09b2ce3053913fea51ea969d79d633653858d6104c6da46bac5f4287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dbf67e09b2ce3053913fea51ea969d79d633653858d6104c6da46bac5f4287->enter($__internal_c8dbf67e09b2ce3053913fea51ea969d79d633653858d6104c6da46bac5f4287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_ad7c3d9c2bb7dcc8ea5fab55e955a34ede9666837a91bbde9ff2c8d8a38dd7f8->leave($__internal_ad7c3d9c2bb7dcc8ea5fab55e955a34ede9666837a91bbde9ff2c8d8a38dd7f8_prof);

        
        $__internal_c8dbf67e09b2ce3053913fea51ea969d79d633653858d6104c6da46bac5f4287->leave($__internal_c8dbf67e09b2ce3053913fea51ea969d79d633653858d6104c6da46bac5f4287_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedLogin/Default/index.html.twig";
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
{% endif %}", "@EloboostedLogin/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

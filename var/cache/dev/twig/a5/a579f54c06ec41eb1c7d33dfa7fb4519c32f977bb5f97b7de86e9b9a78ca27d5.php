<?php

/* @EloboostedLogin/Default/index.html.twig */
class __TwigTemplate_9f23d78c6e47988e9ffce90a3fa0ef3793996cdca3cb36aca718915a128dc613 extends Twig_Template
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
        $__internal_fa3448d17e65a56ff864a28c78d789101cdd41146b3fe8a049b2746807b4c7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3448d17e65a56ff864a28c78d789101cdd41146b3fe8a049b2746807b4c7cc->enter($__internal_fa3448d17e65a56ff864a28c78d789101cdd41146b3fe8a049b2746807b4c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_6f0b8f353eafe8b995cadaa4f14fa8080415b41e5bb5586a11657ff6c84ba32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b8f353eafe8b995cadaa4f14fa8080415b41e5bb5586a11657ff6c84ba32f->enter($__internal_6f0b8f353eafe8b995cadaa4f14fa8080415b41e5bb5586a11657ff6c84ba32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_fa3448d17e65a56ff864a28c78d789101cdd41146b3fe8a049b2746807b4c7cc->leave($__internal_fa3448d17e65a56ff864a28c78d789101cdd41146b3fe8a049b2746807b4c7cc_prof);

        
        $__internal_6f0b8f353eafe8b995cadaa4f14fa8080415b41e5bb5586a11657ff6c84ba32f->leave($__internal_6f0b8f353eafe8b995cadaa4f14fa8080415b41e5bb5586a11657ff6c84ba32f_prof);

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
{% endif %}", "@EloboostedLogin/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

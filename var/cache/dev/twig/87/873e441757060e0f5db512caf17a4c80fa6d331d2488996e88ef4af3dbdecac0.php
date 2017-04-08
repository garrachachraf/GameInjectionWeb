<?php

/* @StarRating/Display/ratingDisplay.html.twig */
class __TwigTemplate_59adde54e91fc35a9718946d0ba527d08962cdc2e8b3cf83da7690fde8d8f6ee extends Twig_Template
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
        $__internal_ee925ea18a407792709288b4ee53c83d75a1fa8d316cc451c2e2da4c4adb9bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee925ea18a407792709288b4ee53c83d75a1fa8d316cc451c2e2da4c4adb9bc7->enter($__internal_ee925ea18a407792709288b4ee53c83d75a1fa8d316cc451c2e2da4c4adb9bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        $__internal_25ca78bddee6ccfb61931d21f342895a03fa818ec52ecc74cc8cd256756d97ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ca78bddee6ccfb61931d21f342895a03fa818ec52ecc74cc8cd256756d97ca->enter($__internal_25ca78bddee6ccfb61931d21f342895a03fa818ec52ecc74cc8cd256756d97ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_ee925ea18a407792709288b4ee53c83d75a1fa8d316cc451c2e2da4c4adb9bc7->leave($__internal_ee925ea18a407792709288b4ee53c83d75a1fa8d316cc451c2e2da4c4adb9bc7_prof);

        
        $__internal_25ca78bddee6ccfb61931d21f342895a03fa818ec52ecc74cc8cd256756d97ca->leave($__internal_25ca78bddee6ccfb61931d21f342895a03fa818ec52ecc74cc8cd256756d97ca_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/Display/ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>", "@StarRating/Display/ratingDisplay.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\blackknight467\\star-rating-bundle\\blackknight467\\StarRatingBundle\\Resources\\views\\Display\\ratingDisplay.html.twig");
    }
}

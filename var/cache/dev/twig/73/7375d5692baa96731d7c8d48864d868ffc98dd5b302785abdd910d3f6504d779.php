<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_5906bfebc1df8ab57df92eb3f076efda942eeff918654fceef0a5057e7eb8713 extends Twig_Template
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
        $__internal_79ff6f823dbf3eb7818758360e71d42ba8304cb5557cd14e482589477b1b3332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ff6f823dbf3eb7818758360e71d42ba8304cb5557cd14e482589477b1b3332->enter($__internal_79ff6f823dbf3eb7818758360e71d42ba8304cb5557cd14e482589477b1b3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        $__internal_d6dcbe6216904274668d4a55f4c824b0b5bf582264db4ec6ae586d7850bd8eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dcbe6216904274668d4a55f4c824b0b5bf582264db4ec6ae586d7850bd8eb5->enter($__internal_d6dcbe6216904274668d4a55f4c824b0b5bf582264db4ec6ae586d7850bd8eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["max"] ?? $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= ($context["stars"] ?? $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, ($context["starSize"] ?? $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_79ff6f823dbf3eb7818758360e71d42ba8304cb5557cd14e482589477b1b3332->leave($__internal_79ff6f823dbf3eb7818758360e71d42ba8304cb5557cd14e482589477b1b3332_prof);

        
        $__internal_d6dcbe6216904274668d4a55f4c824b0b5bf582264db4ec6ae586d7850bd8eb5->leave($__internal_d6dcbe6216904274668d4a55f4c824b0b5bf582264db4ec6ae586d7850bd8eb5_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
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
</div>", "StarRatingBundle:Display:ratingDisplay.html.twig", "/Applications/MAMP/htdocs/nn/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/Display/ratingDisplay.html.twig");
    }
}

<?php

/* StarRatingBundle::rating.html.twig */
class __TwigTemplate_87f78eafc70c323e200180d29f97e102ba52fa2a822d332b69f9c157b1b56229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_357e5723c248836ac1ca61aa0b2721ec164901686b0d82ac2d425f546127ba7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357e5723c248836ac1ca61aa0b2721ec164901686b0d82ac2d425f546127ba7f->enter($__internal_357e5723c248836ac1ca61aa0b2721ec164901686b0d82ac2d425f546127ba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        $__internal_44eeee4fe3ab2e76701cc971b2fe095beb3e26a53dc7033e4ce5e16b4f5bfb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44eeee4fe3ab2e76701cc971b2fe095beb3e26a53dc7033e4ce5e16b4f5bfb4b->enter($__internal_44eeee4fe3ab2e76701cc971b2fe095beb3e26a53dc7033e4ce5e16b4f5bfb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_357e5723c248836ac1ca61aa0b2721ec164901686b0d82ac2d425f546127ba7f->leave($__internal_357e5723c248836ac1ca61aa0b2721ec164901686b0d82ac2d425f546127ba7f_prof);

        
        $__internal_44eeee4fe3ab2e76701cc971b2fe095beb3e26a53dc7033e4ce5e16b4f5bfb4b->leave($__internal_44eeee4fe3ab2e76701cc971b2fe095beb3e26a53dc7033e4ce5e16b4f5bfb4b_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_a5678aac7758cbf30c6fe8a075bbd36fcf25640cc022effe2893b31051ad9d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5678aac7758cbf30c6fe8a075bbd36fcf25640cc022effe2893b31051ad9d02->enter($__internal_a5678aac7758cbf30c6fe8a075bbd36fcf25640cc022effe2893b31051ad9d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_2b3d9d8700ad1c0e984fd7915978d64222482edcc4a4ebc11b5bbd7b087c2ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3d9d8700ad1c0e984fd7915978d64222482edcc4a4ebc11b5bbd7b087c2ca1->enter($__internal_2b3d9d8700ad1c0e984fd7915978d64222482edcc4a4ebc11b5bbd7b087c2ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2b3d9d8700ad1c0e984fd7915978d64222482edcc4a4ebc11b5bbd7b087c2ca1->leave($__internal_2b3d9d8700ad1c0e984fd7915978d64222482edcc4a4ebc11b5bbd7b087c2ca1_prof);

        
        $__internal_a5678aac7758cbf30c6fe8a075bbd36fcf25640cc022effe2893b31051ad9d02->leave($__internal_a5678aac7758cbf30c6fe8a075bbd36fcf25640cc022effe2893b31051ad9d02_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_ba26b7fc9026bf79ea0b3d8dd4dfc4018bcac87b09e8a259a3484857881e5608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba26b7fc9026bf79ea0b3d8dd4dfc4018bcac87b09e8a259a3484857881e5608->enter($__internal_ba26b7fc9026bf79ea0b3d8dd4dfc4018bcac87b09e8a259a3484857881e5608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_d9b0b6c6632c3d06732317941885a222bcdbcd5d369a0346fe212578d23c6f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b0b6c6632c3d06732317941885a222bcdbcd5d369a0346fe212578d23c6f9b->enter($__internal_d9b0b6c6632c3d06732317941885a222bcdbcd5d369a0346fe212578d23c6f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d9b0b6c6632c3d06732317941885a222bcdbcd5d369a0346fe212578d23c6f9b->leave($__internal_d9b0b6c6632c3d06732317941885a222bcdbcd5d369a0346fe212578d23c6f9b_prof);

        
        $__internal_ba26b7fc9026bf79ea0b3d8dd4dfc4018bcac87b09e8a259a3484857881e5608->leave($__internal_ba26b7fc9026bf79ea0b3d8dd4dfc4018bcac87b09e8a259a3484857881e5608_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle::rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  125 => 25,  120 => 24,  118 => 23,  113 => 22,  111 => 21,  109 => 20,  105 => 19,  103 => 18,  94 => 17,  81 => 12,  70 => 10,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  54 => 4,  51 => 3,  42 => 2,  32 => 17,  29 => 16,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}
{% block rating_widget %}
  {% spaceless %}
    <div {{ block('rating_widget_container_attributes') }}>
      {# type=\"number\" doesn't work with floats #}
      {% set type = type|default('text') %}
      <div class=\"rating-well\">
        {{- block('form_widget_simple') -}}
        {% for star in 1..stars %}
          <div id=\"rating_star_{{ stars - star + 1 }}\" class=\"star\" data-value=\"{{ stars - star + 1 }}\"></div>
        {% endfor %}
      </div>
    </div>
  {% endspaceless %}
{% endblock rating_widget %}

{% block rating_widget_container_attributes %}
{% spaceless %}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{% endspaceless %}
{% endblock rating_widget_container_attributes %}", "StarRatingBundle::rating.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\blackknight467\\star-rating-bundle\\blackknight467\\StarRatingBundle/Resources/views/rating.html.twig");
    }
}

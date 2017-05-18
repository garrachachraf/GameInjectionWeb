<?php

/* StarRatingBundle::rating.html.twig */
class __TwigTemplate_e0c23a30d1d21de284ef0d313d4a0149b4cc6d824b7ad1baff26a5015901263b extends Twig_Template
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
        $__internal_610f682566b4b7e761f39005a069078630b9429c2b34ed302a06c8acba26ddef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610f682566b4b7e761f39005a069078630b9429c2b34ed302a06c8acba26ddef->enter($__internal_610f682566b4b7e761f39005a069078630b9429c2b34ed302a06c8acba26ddef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        $__internal_8f10a6b032176a27eb3aa3df20d7a499159a2028a8b26cbe20970391baf2f427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f10a6b032176a27eb3aa3df20d7a499159a2028a8b26cbe20970391baf2f427->enter($__internal_8f10a6b032176a27eb3aa3df20d7a499159a2028a8b26cbe20970391baf2f427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_610f682566b4b7e761f39005a069078630b9429c2b34ed302a06c8acba26ddef->leave($__internal_610f682566b4b7e761f39005a069078630b9429c2b34ed302a06c8acba26ddef_prof);

        
        $__internal_8f10a6b032176a27eb3aa3df20d7a499159a2028a8b26cbe20970391baf2f427->leave($__internal_8f10a6b032176a27eb3aa3df20d7a499159a2028a8b26cbe20970391baf2f427_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_e9d4662ad9006a3161d2736cef319f6f32ddefca5ab1b21509ca660a2b8e228b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d4662ad9006a3161d2736cef319f6f32ddefca5ab1b21509ca660a2b8e228b->enter($__internal_e9d4662ad9006a3161d2736cef319f6f32ddefca5ab1b21509ca660a2b8e228b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_20b9d2aff864c855dadd23f6581787553d5791593a6af2ace2f7464ee0c139ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b9d2aff864c855dadd23f6581787553d5791593a6af2ace2f7464ee0c139ec->enter($__internal_20b9d2aff864c855dadd23f6581787553d5791593a6af2ace2f7464ee0c139ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["stars"] ?? $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, ((($context["stars"] ?? $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, ((($context["stars"] ?? $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
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
        
        $__internal_20b9d2aff864c855dadd23f6581787553d5791593a6af2ace2f7464ee0c139ec->leave($__internal_20b9d2aff864c855dadd23f6581787553d5791593a6af2ace2f7464ee0c139ec_prof);

        
        $__internal_e9d4662ad9006a3161d2736cef319f6f32ddefca5ab1b21509ca660a2b8e228b->leave($__internal_e9d4662ad9006a3161d2736cef319f6f32ddefca5ab1b21509ca660a2b8e228b_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_084ffaa7068b4ca9c5909f6f11ad18d91640fb357cc4dc094c95fd3930fff2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084ffaa7068b4ca9c5909f6f11ad18d91640fb357cc4dc094c95fd3930fff2ef->enter($__internal_084ffaa7068b4ca9c5909f6f11ad18d91640fb357cc4dc094c95fd3930fff2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_cd3a6ed1ec1df6bceb1ffb149a320dbb7cab62c9dc7775950651f37559bc1ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3a6ed1ec1df6bceb1ffb149a320dbb7cab62c9dc7775950651f37559bc1ee2->enter($__internal_cd3a6ed1ec1df6bceb1ffb149a320dbb7cab62c9dc7775950651f37559bc1ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_cd3a6ed1ec1df6bceb1ffb149a320dbb7cab62c9dc7775950651f37559bc1ee2->leave($__internal_cd3a6ed1ec1df6bceb1ffb149a320dbb7cab62c9dc7775950651f37559bc1ee2_prof);

        
        $__internal_084ffaa7068b4ca9c5909f6f11ad18d91640fb357cc4dc094c95fd3930fff2ef->leave($__internal_084ffaa7068b4ca9c5909f6f11ad18d91640fb357cc4dc094c95fd3930fff2ef_prof);

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
{% endblock rating_widget_container_attributes %}", "StarRatingBundle::rating.html.twig", "/Applications/MAMP/htdocs/nn/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/rating.html.twig");
    }
}

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
        $__internal_1b6c7a5b6600837fa4bc4d0f78d6ca0ee5b6700f662b1241a1dd5ecbfc2ca494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6c7a5b6600837fa4bc4d0f78d6ca0ee5b6700f662b1241a1dd5ecbfc2ca494->enter($__internal_1b6c7a5b6600837fa4bc4d0f78d6ca0ee5b6700f662b1241a1dd5ecbfc2ca494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        $__internal_0285ff42e8506adf961712419e59274d5acc7360bb6482675c0a132825a57d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0285ff42e8506adf961712419e59274d5acc7360bb6482675c0a132825a57d71->enter($__internal_0285ff42e8506adf961712419e59274d5acc7360bb6482675c0a132825a57d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_1b6c7a5b6600837fa4bc4d0f78d6ca0ee5b6700f662b1241a1dd5ecbfc2ca494->leave($__internal_1b6c7a5b6600837fa4bc4d0f78d6ca0ee5b6700f662b1241a1dd5ecbfc2ca494_prof);

        
        $__internal_0285ff42e8506adf961712419e59274d5acc7360bb6482675c0a132825a57d71->leave($__internal_0285ff42e8506adf961712419e59274d5acc7360bb6482675c0a132825a57d71_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_f5504c218805a8b05d4fa5faa6987ca45f94a7503b17e5dc1170e8230832410c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5504c218805a8b05d4fa5faa6987ca45f94a7503b17e5dc1170e8230832410c->enter($__internal_f5504c218805a8b05d4fa5faa6987ca45f94a7503b17e5dc1170e8230832410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_9ec79ea68f2e52e13bd1f351aa81d3c571037d057618f2fb6b86c75a1877e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec79ea68f2e52e13bd1f351aa81d3c571037d057618f2fb6b86c75a1877e7f1->enter($__internal_9ec79ea68f2e52e13bd1f351aa81d3c571037d057618f2fb6b86c75a1877e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

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
        
        $__internal_9ec79ea68f2e52e13bd1f351aa81d3c571037d057618f2fb6b86c75a1877e7f1->leave($__internal_9ec79ea68f2e52e13bd1f351aa81d3c571037d057618f2fb6b86c75a1877e7f1_prof);

        
        $__internal_f5504c218805a8b05d4fa5faa6987ca45f94a7503b17e5dc1170e8230832410c->leave($__internal_f5504c218805a8b05d4fa5faa6987ca45f94a7503b17e5dc1170e8230832410c_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_5dabc683940955444c16a202757aaf706b52ca337d1ab808b40b8b05162663e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dabc683940955444c16a202757aaf706b52ca337d1ab808b40b8b05162663e7->enter($__internal_5dabc683940955444c16a202757aaf706b52ca337d1ab808b40b8b05162663e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_5ce9130c030452d9113709703eee4b22de0442b0bfdd2a6b310bf063244f6981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce9130c030452d9113709703eee4b22de0442b0bfdd2a6b310bf063244f6981->enter($__internal_5ce9130c030452d9113709703eee4b22de0442b0bfdd2a6b310bf063244f6981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

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
        
        $__internal_5ce9130c030452d9113709703eee4b22de0442b0bfdd2a6b310bf063244f6981->leave($__internal_5ce9130c030452d9113709703eee4b22de0442b0bfdd2a6b310bf063244f6981_prof);

        
        $__internal_5dabc683940955444c16a202757aaf706b52ca337d1ab808b40b8b05162663e7->leave($__internal_5dabc683940955444c16a202757aaf706b52ca337d1ab808b40b8b05162663e7_prof);

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

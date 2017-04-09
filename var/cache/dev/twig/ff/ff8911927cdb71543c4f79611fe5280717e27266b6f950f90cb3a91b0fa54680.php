<?php

/* @StarRating/rating.html.twig */
class __TwigTemplate_48fbb147f4933db8742a1c788018bef6bbf51e4d8eeaad44b8974dbe6d7a5d68 extends Twig_Template
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
        $__internal_abe3daf61680ec6b8e96f23a0e25ef596e16b815e64826141f265f66ea11534e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe3daf61680ec6b8e96f23a0e25ef596e16b815e64826141f265f66ea11534e->enter($__internal_abe3daf61680ec6b8e96f23a0e25ef596e16b815e64826141f265f66ea11534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        $__internal_94fddc77a8c9f6991b0f36f87aab282793e9cc4c0dfa25427034bc27aed02072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fddc77a8c9f6991b0f36f87aab282793e9cc4c0dfa25427034bc27aed02072->enter($__internal_94fddc77a8c9f6991b0f36f87aab282793e9cc4c0dfa25427034bc27aed02072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_abe3daf61680ec6b8e96f23a0e25ef596e16b815e64826141f265f66ea11534e->leave($__internal_abe3daf61680ec6b8e96f23a0e25ef596e16b815e64826141f265f66ea11534e_prof);

        
        $__internal_94fddc77a8c9f6991b0f36f87aab282793e9cc4c0dfa25427034bc27aed02072->leave($__internal_94fddc77a8c9f6991b0f36f87aab282793e9cc4c0dfa25427034bc27aed02072_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_7d7a2a63e2fea5bcfdfb9d5acf77e5218a0600db93fe6b9db5d25fb2a7dfc545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7a2a63e2fea5bcfdfb9d5acf77e5218a0600db93fe6b9db5d25fb2a7dfc545->enter($__internal_7d7a2a63e2fea5bcfdfb9d5acf77e5218a0600db93fe6b9db5d25fb2a7dfc545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_eb96c1630969ac79a32fa6411d255e7f9864611aaf53ce0e12e213f43030db85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb96c1630969ac79a32fa6411d255e7f9864611aaf53ce0e12e213f43030db85->enter($__internal_eb96c1630969ac79a32fa6411d255e7f9864611aaf53ce0e12e213f43030db85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

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
        
        $__internal_eb96c1630969ac79a32fa6411d255e7f9864611aaf53ce0e12e213f43030db85->leave($__internal_eb96c1630969ac79a32fa6411d255e7f9864611aaf53ce0e12e213f43030db85_prof);

        
        $__internal_7d7a2a63e2fea5bcfdfb9d5acf77e5218a0600db93fe6b9db5d25fb2a7dfc545->leave($__internal_7d7a2a63e2fea5bcfdfb9d5acf77e5218a0600db93fe6b9db5d25fb2a7dfc545_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_0f67c34647d24bb610464a56f6005eefc9a16c90c9f34318ae96012bd3b482a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f67c34647d24bb610464a56f6005eefc9a16c90c9f34318ae96012bd3b482a7->enter($__internal_0f67c34647d24bb610464a56f6005eefc9a16c90c9f34318ae96012bd3b482a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_a8391b19236a094d2b9428c670386ac4c4e70666051264c2bc5bc0b9240ae422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8391b19236a094d2b9428c670386ac4c4e70666051264c2bc5bc0b9240ae422->enter($__internal_a8391b19236a094d2b9428c670386ac4c4e70666051264c2bc5bc0b9240ae422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

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
        
        $__internal_a8391b19236a094d2b9428c670386ac4c4e70666051264c2bc5bc0b9240ae422->leave($__internal_a8391b19236a094d2b9428c670386ac4c4e70666051264c2bc5bc0b9240ae422_prof);

        
        $__internal_0f67c34647d24bb610464a56f6005eefc9a16c90c9f34318ae96012bd3b482a7->leave($__internal_0f67c34647d24bb610464a56f6005eefc9a16c90c9f34318ae96012bd3b482a7_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/rating.html.twig";
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
{% endblock rating_widget_container_attributes %}", "@StarRating/rating.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\blackknight467\\star-rating-bundle\\blackknight467\\StarRatingBundle\\Resources\\views\\rating.html.twig");
    }
}

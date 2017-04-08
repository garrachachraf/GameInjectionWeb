<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_9633cf4e51b442e81b98d2f3a18367ffbdb44a611c9cee574f0222a4f6f1428d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6600eea5dd5e03ebfdd1c243293e162c0a5130d85cb33e94f0176b91542ae7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6600eea5dd5e03ebfdd1c243293e162c0a5130d85cb33e94f0176b91542ae7aa->enter($__internal_6600eea5dd5e03ebfdd1c243293e162c0a5130d85cb33e94f0176b91542ae7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        $__internal_dfbb525d450af18ebd33c043f1aed6a3a55a2afa14f8f8ba17cd8cac2c8f32d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbb525d450af18ebd33c043f1aed6a3a55a2afa14f8f8ba17cd8cac2c8f32d0->enter($__internal_dfbb525d450af18ebd33c043f1aed6a3a55a2afa14f8f8ba17cd8cac2c8f32d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_6600eea5dd5e03ebfdd1c243293e162c0a5130d85cb33e94f0176b91542ae7aa->leave($__internal_6600eea5dd5e03ebfdd1c243293e162c0a5130d85cb33e94f0176b91542ae7aa_prof);

        
        $__internal_dfbb525d450af18ebd33c043f1aed6a3a55a2afa14f8f8ba17cd8cac2c8f32d0->leave($__internal_dfbb525d450af18ebd33c043f1aed6a3a55a2afa14f8f8ba17cd8cac2c8f32d0_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_33787335543d0bb4eb471d32ff502c5647800191904aee3e5fd41e539b36a31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33787335543d0bb4eb471d32ff502c5647800191904aee3e5fd41e539b36a31f->enter($__internal_33787335543d0bb4eb471d32ff502c5647800191904aee3e5fd41e539b36a31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_5cde83faea22ee8d39ae510a245810768b4e930380aae53812e8cafc3af6e4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cde83faea22ee8d39ae510a245810768b4e930380aae53812e8cafc3af6e4b3->enter($__internal_5cde83faea22ee8d39ae510a245810768b4e930380aae53812e8cafc3af6e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if ((isset($context["is_human"]) ? $context["is_human"] : $this->getContext($context, "is_human"))) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img class=\"captcha_image\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : $this->getContext($context, "captcha_code")), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) ? $context["captcha_width"] : $this->getContext($context, "captcha_width")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) ? $context["captcha_height"] : $this->getContext($context, "captcha_height")), "html", null, true);
            echo "\" />
    ";
            // line 7
            if ((isset($context["reload"]) ? $context["reload"] : $this->getContext($context, "reload"))) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : $this->getContext($context, "captcha_code")), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : $this->getContext($context, "image_id")), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_5cde83faea22ee8d39ae510a245810768b4e930380aae53812e8cafc3af6e4b3->leave($__internal_5cde83faea22ee8d39ae510a245810768b4e930380aae53812e8cafc3af6e4b3_prof);

        
        $__internal_33787335543d0bb4eb471d32ff502c5647800191904aee3e5fd41e539b36a31f->leave($__internal_33787335543d0bb4eb471d32ff502c5647800191904aee3e5fd41e539b36a31f_prof);

    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  65 => 8,  63 => 7,  52 => 6,  50 => 5,  46 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block captcha_widget %}
{% if is_human %}
-
{% else %}
{% spaceless %}
    <img class=\"captcha_image\" id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
    {% if reload %}
    <script type=\"text/javascript\">
        function reload_{{ image_id }}() {
            var img = document.getElementById('{{ image_id }}');
            img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a>
    {% endif %}
    {{ form_widget(form) }}
{% endspaceless %}
{% endif %}
{% endblock %}
", "GregwarCaptchaBundle::captcha.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\gregwar\\captcha-bundle/Resources/views/captcha.html.twig");
    }
}

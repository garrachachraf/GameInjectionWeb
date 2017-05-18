<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_a130a45410b4d03955abb03f2163e90c57ce9db32d7dfc2b22b79e2fba953b25 extends Twig_Template
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
        $__internal_4bc836ab5c4b3f4072804d59e34b46d21d094603f88a559df8bcc3e7c0f6fb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc836ab5c4b3f4072804d59e34b46d21d094603f88a559df8bcc3e7c0f6fb2e->enter($__internal_4bc836ab5c4b3f4072804d59e34b46d21d094603f88a559df8bcc3e7c0f6fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        $__internal_db15372c382e86a6140767b00dad699b5d74bcd0eb7020a95d0ac78097253d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db15372c382e86a6140767b00dad699b5d74bcd0eb7020a95d0ac78097253d21->enter($__internal_db15372c382e86a6140767b00dad699b5d74bcd0eb7020a95d0ac78097253d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_4bc836ab5c4b3f4072804d59e34b46d21d094603f88a559df8bcc3e7c0f6fb2e->leave($__internal_4bc836ab5c4b3f4072804d59e34b46d21d094603f88a559df8bcc3e7c0f6fb2e_prof);

        
        $__internal_db15372c382e86a6140767b00dad699b5d74bcd0eb7020a95d0ac78097253d21->leave($__internal_db15372c382e86a6140767b00dad699b5d74bcd0eb7020a95d0ac78097253d21_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_9fafbd73e852e8beb3a34e8c8229278eb16d3ec311bbfe45137cb756221f4f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fafbd73e852e8beb3a34e8c8229278eb16d3ec311bbfe45137cb756221f4f4e->enter($__internal_9fafbd73e852e8beb3a34e8c8229278eb16d3ec311bbfe45137cb756221f4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_23062005637d75d57a1e87c0980ba6ad8c00c6d7177d9ef0b623cbc604bb758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23062005637d75d57a1e87c0980ba6ad8c00c6d7177d9ef0b623cbc604bb758d->enter($__internal_23062005637d75d57a1e87c0980ba6ad8c00c6d7177d9ef0b623cbc604bb758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if (($context["is_human"] ?? $this->getContext($context, "is_human"))) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img class=\"captcha_image\" id=\"";
            echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, ($context["captcha_width"] ?? $this->getContext($context, "captcha_width")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["captcha_height"] ?? $this->getContext($context, "captcha_height")), "html", null, true);
            echo "\" />
    ";
            // line 7
            if (($context["reload"] ?? $this->getContext($context, "reload"))) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_23062005637d75d57a1e87c0980ba6ad8c00c6d7177d9ef0b623cbc604bb758d->leave($__internal_23062005637d75d57a1e87c0980ba6ad8c00c6d7177d9ef0b623cbc604bb758d_prof);

        
        $__internal_9fafbd73e852e8beb3a34e8c8229278eb16d3ec311bbfe45137cb756221f4f4e->leave($__internal_9fafbd73e852e8beb3a34e8c8229278eb16d3ec311bbfe45137cb756221f4f4e_prof);

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
", "GregwarCaptchaBundle::captcha.html.twig", "/Applications/MAMP/htdocs/nn/vendor/gregwar/captcha-bundle/Resources/views/captcha.html.twig");
    }
}

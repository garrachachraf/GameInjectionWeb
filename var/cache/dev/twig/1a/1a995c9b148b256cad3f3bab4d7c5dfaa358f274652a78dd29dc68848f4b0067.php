<?php

/* @GregwarCaptcha/captcha.html.twig */
class __TwigTemplate_f94d618ac7aa1e92d03d5f4f4d91d477df80e8842031f8ae47cd7be5e6f8e773 extends Twig_Template
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
        $__internal_b82c83b8d29f46383c3c8fb0bae441797de6da6aa53e646e8d98f8edd82c3d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82c83b8d29f46383c3c8fb0bae441797de6da6aa53e646e8d98f8edd82c3d33->enter($__internal_b82c83b8d29f46383c3c8fb0bae441797de6da6aa53e646e8d98f8edd82c3d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        $__internal_5bcb67a508b48b9224d2bfc54d10d2dd30f36ac423c5b5a6047d10388231fa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcb67a508b48b9224d2bfc54d10d2dd30f36ac423c5b5a6047d10388231fa78->enter($__internal_5bcb67a508b48b9224d2bfc54d10d2dd30f36ac423c5b5a6047d10388231fa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_b82c83b8d29f46383c3c8fb0bae441797de6da6aa53e646e8d98f8edd82c3d33->leave($__internal_b82c83b8d29f46383c3c8fb0bae441797de6da6aa53e646e8d98f8edd82c3d33_prof);

        
        $__internal_5bcb67a508b48b9224d2bfc54d10d2dd30f36ac423c5b5a6047d10388231fa78->leave($__internal_5bcb67a508b48b9224d2bfc54d10d2dd30f36ac423c5b5a6047d10388231fa78_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_602912c50ba98014232b8a35c4c73d9198427057c95e894f68c381edc904c7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602912c50ba98014232b8a35c4c73d9198427057c95e894f68c381edc904c7a0->enter($__internal_602912c50ba98014232b8a35c4c73d9198427057c95e894f68c381edc904c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_d36428febab963bf0c7355ec1b027484c6167dc19059e07c5062a356b7cc8e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36428febab963bf0c7355ec1b027484c6167dc19059e07c5062a356b7cc8e0a->enter($__internal_d36428febab963bf0c7355ec1b027484c6167dc19059e07c5062a356b7cc8e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

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
        
        $__internal_d36428febab963bf0c7355ec1b027484c6167dc19059e07c5062a356b7cc8e0a->leave($__internal_d36428febab963bf0c7355ec1b027484c6167dc19059e07c5062a356b7cc8e0a_prof);

        
        $__internal_602912c50ba98014232b8a35c4c73d9198427057c95e894f68c381edc904c7a0->leave($__internal_602912c50ba98014232b8a35c4c73d9198427057c95e894f68c381edc904c7a0_prof);

    }

    public function getTemplateName()
    {
        return "@GregwarCaptcha/captcha.html.twig";
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
", "@GregwarCaptcha/captcha.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\gregwar\\captcha-bundle\\Resources\\views\\captcha.html.twig");
    }
}

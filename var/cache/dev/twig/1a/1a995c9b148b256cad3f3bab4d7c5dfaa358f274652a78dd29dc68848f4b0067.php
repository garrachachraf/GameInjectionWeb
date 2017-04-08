<?php

/* GregwarCaptchaBundle::captcha.html.twig */
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
        $__internal_e661fe9b95121d17881d219c0463ab157c1bf2ae7a1db116b2d6ede42d1abc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e661fe9b95121d17881d219c0463ab157c1bf2ae7a1db116b2d6ede42d1abc16->enter($__internal_e661fe9b95121d17881d219c0463ab157c1bf2ae7a1db116b2d6ede42d1abc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        $__internal_a86ad1d551dd03bfbc196c16ba2672e4a66c2c69f4cdafadb4296bb58d23f254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86ad1d551dd03bfbc196c16ba2672e4a66c2c69f4cdafadb4296bb58d23f254->enter($__internal_a86ad1d551dd03bfbc196c16ba2672e4a66c2c69f4cdafadb4296bb58d23f254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_e661fe9b95121d17881d219c0463ab157c1bf2ae7a1db116b2d6ede42d1abc16->leave($__internal_e661fe9b95121d17881d219c0463ab157c1bf2ae7a1db116b2d6ede42d1abc16_prof);

        
        $__internal_a86ad1d551dd03bfbc196c16ba2672e4a66c2c69f4cdafadb4296bb58d23f254->leave($__internal_a86ad1d551dd03bfbc196c16ba2672e4a66c2c69f4cdafadb4296bb58d23f254_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_b70a7e1e45028a301023518e1d24e0e9eebbc704608d2a5d1130b69af18e83c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70a7e1e45028a301023518e1d24e0e9eebbc704608d2a5d1130b69af18e83c4->enter($__internal_b70a7e1e45028a301023518e1d24e0e9eebbc704608d2a5d1130b69af18e83c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_0ec486f4659a4393e934465040d6673fca46a98c574de749af4a14fb835217a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec486f4659a4393e934465040d6673fca46a98c574de749af4a14fb835217a2->enter($__internal_0ec486f4659a4393e934465040d6673fca46a98c574de749af4a14fb835217a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

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
        
        $__internal_0ec486f4659a4393e934465040d6673fca46a98c574de749af4a14fb835217a2->leave($__internal_0ec486f4659a4393e934465040d6673fca46a98c574de749af4a14fb835217a2_prof);

        
        $__internal_b70a7e1e45028a301023518e1d24e0e9eebbc704608d2a5d1130b69af18e83c4->leave($__internal_b70a7e1e45028a301023518e1d24e0e9eebbc704608d2a5d1130b69af18e83c4_prof);

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
", "GregwarCaptchaBundle::captcha.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\gregwar\\captcha-bundle\\Resources\\views\\captcha.html.twig");
    }
}

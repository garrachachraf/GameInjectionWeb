<?php

/* base.html.twig */
class __TwigTemplate_1b112a055c5b143fd2623b5a94eec0695d0bce6ea8c61ae5098d2a71db46ffc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1c139d0cf2c10da5d20a94f1b91f8cb3749c5e46e9510e76af4062693595588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c139d0cf2c10da5d20a94f1b91f8cb3749c5e46e9510e76af4062693595588->enter($__internal_e1c139d0cf2c10da5d20a94f1b91f8cb3749c5e46e9510e76af4062693595588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_728badab725cca44fdee8f3122ea9e0aaa567422c2f6ca28a4d3ed0a37ce2f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728badab725cca44fdee8f3122ea9e0aaa567422c2f6ca28a4d3ed0a37ce2f73->enter($__internal_728badab725cca44fdee8f3122ea9e0aaa567422c2f6ca28a4d3ed0a37ce2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e1c139d0cf2c10da5d20a94f1b91f8cb3749c5e46e9510e76af4062693595588->leave($__internal_e1c139d0cf2c10da5d20a94f1b91f8cb3749c5e46e9510e76af4062693595588_prof);

        
        $__internal_728badab725cca44fdee8f3122ea9e0aaa567422c2f6ca28a4d3ed0a37ce2f73->leave($__internal_728badab725cca44fdee8f3122ea9e0aaa567422c2f6ca28a4d3ed0a37ce2f73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_743384759054764fbf4c9b4b3a4addc1e3de1f26dd402a2eda8594f501b10bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743384759054764fbf4c9b4b3a4addc1e3de1f26dd402a2eda8594f501b10bb9->enter($__internal_743384759054764fbf4c9b4b3a4addc1e3de1f26dd402a2eda8594f501b10bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aae23a061e43fb11eb47665978065b0e3903e7594f3d1c1b78fb2bae47eca2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae23a061e43fb11eb47665978065b0e3903e7594f3d1c1b78fb2bae47eca2b3->enter($__internal_aae23a061e43fb11eb47665978065b0e3903e7594f3d1c1b78fb2bae47eca2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aae23a061e43fb11eb47665978065b0e3903e7594f3d1c1b78fb2bae47eca2b3->leave($__internal_aae23a061e43fb11eb47665978065b0e3903e7594f3d1c1b78fb2bae47eca2b3_prof);

        
        $__internal_743384759054764fbf4c9b4b3a4addc1e3de1f26dd402a2eda8594f501b10bb9->leave($__internal_743384759054764fbf4c9b4b3a4addc1e3de1f26dd402a2eda8594f501b10bb9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_959f9a233afa92f9dc04f61522975a820ab8b8fcace6512df90e6307ce20b2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959f9a233afa92f9dc04f61522975a820ab8b8fcace6512df90e6307ce20b2d8->enter($__internal_959f9a233afa92f9dc04f61522975a820ab8b8fcace6512df90e6307ce20b2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_50c7328014dc0b028a80c909fdf0566feeeaab8cddd8ce654e46a466e0fe6811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c7328014dc0b028a80c909fdf0566feeeaab8cddd8ce654e46a466e0fe6811->enter($__internal_50c7328014dc0b028a80c909fdf0566feeeaab8cddd8ce654e46a466e0fe6811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_50c7328014dc0b028a80c909fdf0566feeeaab8cddd8ce654e46a466e0fe6811->leave($__internal_50c7328014dc0b028a80c909fdf0566feeeaab8cddd8ce654e46a466e0fe6811_prof);

        
        $__internal_959f9a233afa92f9dc04f61522975a820ab8b8fcace6512df90e6307ce20b2d8->leave($__internal_959f9a233afa92f9dc04f61522975a820ab8b8fcace6512df90e6307ce20b2d8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5148fef41d4829846a433ae11ac0ef581f0acf8b7fb79e34b54504965a166f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5148fef41d4829846a433ae11ac0ef581f0acf8b7fb79e34b54504965a166f16->enter($__internal_5148fef41d4829846a433ae11ac0ef581f0acf8b7fb79e34b54504965a166f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41a2a23b7912162077b275460f70e660901859bba1eb7e699d5a4468aba3f572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a2a23b7912162077b275460f70e660901859bba1eb7e699d5a4468aba3f572->enter($__internal_41a2a23b7912162077b275460f70e660901859bba1eb7e699d5a4468aba3f572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41a2a23b7912162077b275460f70e660901859bba1eb7e699d5a4468aba3f572->leave($__internal_41a2a23b7912162077b275460f70e660901859bba1eb7e699d5a4468aba3f572_prof);

        
        $__internal_5148fef41d4829846a433ae11ac0ef581f0acf8b7fb79e34b54504965a166f16->leave($__internal_5148fef41d4829846a433ae11ac0ef581f0acf8b7fb79e34b54504965a166f16_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbc68356c184f15665a4a14bc92f5cf49168b67fdce8ebe7850f3fcb89b13205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc68356c184f15665a4a14bc92f5cf49168b67fdce8ebe7850f3fcb89b13205->enter($__internal_bbc68356c184f15665a4a14bc92f5cf49168b67fdce8ebe7850f3fcb89b13205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ede055fa9f180aa78cb37196f4efd817dd3b31e79bd59bf3382ac6950c2ee97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede055fa9f180aa78cb37196f4efd817dd3b31e79bd59bf3382ac6950c2ee97d->enter($__internal_ede055fa9f180aa78cb37196f4efd817dd3b31e79bd59bf3382ac6950c2ee97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ede055fa9f180aa78cb37196f4efd817dd3b31e79bd59bf3382ac6950c2ee97d->leave($__internal_ede055fa9f180aa78cb37196f4efd817dd3b31e79bd59bf3382ac6950c2ee97d_prof);

        
        $__internal_bbc68356c184f15665a4a14bc92f5cf49168b67fdce8ebe7850f3fcb89b13205->leave($__internal_bbc68356c184f15665a4a14bc92f5cf49168b67fdce8ebe7850f3fcb89b13205_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\base.html.twig");
    }
}

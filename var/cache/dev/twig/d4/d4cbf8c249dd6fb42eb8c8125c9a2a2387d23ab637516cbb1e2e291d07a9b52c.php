<?php

/* ::base.html.twig */
class __TwigTemplate_24b59280ff59f5629e7cbc8a69f72a2c1f34e92e092a859f088665548f2ec62a extends Twig_Template
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
        $__internal_e057d15300e9279ed8bf0b52f605f000fb4596af43bb2f734f29804b34924d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e057d15300e9279ed8bf0b52f605f000fb4596af43bb2f734f29804b34924d9f->enter($__internal_e057d15300e9279ed8bf0b52f605f000fb4596af43bb2f734f29804b34924d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_11dd6bce2196068d4cef297c2a13a62def567566ad2cc031bc91d9d4e7000c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11dd6bce2196068d4cef297c2a13a62def567566ad2cc031bc91d9d4e7000c88->enter($__internal_11dd6bce2196068d4cef297c2a13a62def567566ad2cc031bc91d9d4e7000c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e057d15300e9279ed8bf0b52f605f000fb4596af43bb2f734f29804b34924d9f->leave($__internal_e057d15300e9279ed8bf0b52f605f000fb4596af43bb2f734f29804b34924d9f_prof);

        
        $__internal_11dd6bce2196068d4cef297c2a13a62def567566ad2cc031bc91d9d4e7000c88->leave($__internal_11dd6bce2196068d4cef297c2a13a62def567566ad2cc031bc91d9d4e7000c88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e42df06421834d52917e90404b40f41a8b1507ebceeeedf1a73cff5a003c5d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42df06421834d52917e90404b40f41a8b1507ebceeeedf1a73cff5a003c5d42->enter($__internal_e42df06421834d52917e90404b40f41a8b1507ebceeeedf1a73cff5a003c5d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e1ae8da909ade6d8c246336651090804c17b82769dbbf7d786f008cb8aff804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1ae8da909ade6d8c246336651090804c17b82769dbbf7d786f008cb8aff804->enter($__internal_2e1ae8da909ade6d8c246336651090804c17b82769dbbf7d786f008cb8aff804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e1ae8da909ade6d8c246336651090804c17b82769dbbf7d786f008cb8aff804->leave($__internal_2e1ae8da909ade6d8c246336651090804c17b82769dbbf7d786f008cb8aff804_prof);

        
        $__internal_e42df06421834d52917e90404b40f41a8b1507ebceeeedf1a73cff5a003c5d42->leave($__internal_e42df06421834d52917e90404b40f41a8b1507ebceeeedf1a73cff5a003c5d42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0919f74982c87e726d2bbc9835931420a19747917adc8f114bada9ec456ee083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0919f74982c87e726d2bbc9835931420a19747917adc8f114bada9ec456ee083->enter($__internal_0919f74982c87e726d2bbc9835931420a19747917adc8f114bada9ec456ee083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6dd823057435cd544eb22ce33410650622269a039f93e3a9ee6c8a96506f7132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd823057435cd544eb22ce33410650622269a039f93e3a9ee6c8a96506f7132->enter($__internal_6dd823057435cd544eb22ce33410650622269a039f93e3a9ee6c8a96506f7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6dd823057435cd544eb22ce33410650622269a039f93e3a9ee6c8a96506f7132->leave($__internal_6dd823057435cd544eb22ce33410650622269a039f93e3a9ee6c8a96506f7132_prof);

        
        $__internal_0919f74982c87e726d2bbc9835931420a19747917adc8f114bada9ec456ee083->leave($__internal_0919f74982c87e726d2bbc9835931420a19747917adc8f114bada9ec456ee083_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa414351afeaae6c94baa589898e7bb273ea3a59bc67eccb3fb763522edb868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa414351afeaae6c94baa589898e7bb273ea3a59bc67eccb3fb763522edb868->enter($__internal_baa414351afeaae6c94baa589898e7bb273ea3a59bc67eccb3fb763522edb868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50b90e8b9635f763ae1f054260cfe201da5b875ccb7742ebdfb85a94518f48ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b90e8b9635f763ae1f054260cfe201da5b875ccb7742ebdfb85a94518f48ed->enter($__internal_50b90e8b9635f763ae1f054260cfe201da5b875ccb7742ebdfb85a94518f48ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50b90e8b9635f763ae1f054260cfe201da5b875ccb7742ebdfb85a94518f48ed->leave($__internal_50b90e8b9635f763ae1f054260cfe201da5b875ccb7742ebdfb85a94518f48ed_prof);

        
        $__internal_baa414351afeaae6c94baa589898e7bb273ea3a59bc67eccb3fb763522edb868->leave($__internal_baa414351afeaae6c94baa589898e7bb273ea3a59bc67eccb3fb763522edb868_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91a23cdb44ddd7c5c97fd7de7514bc3384f5200e57590fdd00904c51eb77b08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a23cdb44ddd7c5c97fd7de7514bc3384f5200e57590fdd00904c51eb77b08f->enter($__internal_91a23cdb44ddd7c5c97fd7de7514bc3384f5200e57590fdd00904c51eb77b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c28bd618247f7b8574c2f9c2841cdb2d21dd060c47c9fc10547e83dc46579a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28bd618247f7b8574c2f9c2841cdb2d21dd060c47c9fc10547e83dc46579a0->enter($__internal_4c28bd618247f7b8574c2f9c2841cdb2d21dd060c47c9fc10547e83dc46579a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c28bd618247f7b8574c2f9c2841cdb2d21dd060c47c9fc10547e83dc46579a0->leave($__internal_4c28bd618247f7b8574c2f9c2841cdb2d21dd060c47c9fc10547e83dc46579a0_prof);

        
        $__internal_91a23cdb44ddd7c5c97fd7de7514bc3384f5200e57590fdd00904c51eb77b08f->leave($__internal_91a23cdb44ddd7c5c97fd7de7514bc3384f5200e57590fdd00904c51eb77b08f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/base.html.twig");
    }
}

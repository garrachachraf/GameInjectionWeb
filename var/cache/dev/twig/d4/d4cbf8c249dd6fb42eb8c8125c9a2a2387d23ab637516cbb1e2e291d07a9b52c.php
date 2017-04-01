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
        $__internal_c331e857016bd9a86541d4043a3feea3e3e481458f2b76a6d22064c7055c8afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c331e857016bd9a86541d4043a3feea3e3e481458f2b76a6d22064c7055c8afd->enter($__internal_c331e857016bd9a86541d4043a3feea3e3e481458f2b76a6d22064c7055c8afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_60f9bfb90ffbc6fc7723b24abf43481831180861a7ed522f3f375ea7c1e7edbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f9bfb90ffbc6fc7723b24abf43481831180861a7ed522f3f375ea7c1e7edbf->enter($__internal_60f9bfb90ffbc6fc7723b24abf43481831180861a7ed522f3f375ea7c1e7edbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c331e857016bd9a86541d4043a3feea3e3e481458f2b76a6d22064c7055c8afd->leave($__internal_c331e857016bd9a86541d4043a3feea3e3e481458f2b76a6d22064c7055c8afd_prof);

        
        $__internal_60f9bfb90ffbc6fc7723b24abf43481831180861a7ed522f3f375ea7c1e7edbf->leave($__internal_60f9bfb90ffbc6fc7723b24abf43481831180861a7ed522f3f375ea7c1e7edbf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dae3eab8be8c9bc605da8c6ae2ff946d86410343ac17d91f183552e4e02f3606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae3eab8be8c9bc605da8c6ae2ff946d86410343ac17d91f183552e4e02f3606->enter($__internal_dae3eab8be8c9bc605da8c6ae2ff946d86410343ac17d91f183552e4e02f3606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d695a0ce27a66dbc2f1e9421ec06f575dfb7e2d46aff83ebc954f069fd6f381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d695a0ce27a66dbc2f1e9421ec06f575dfb7e2d46aff83ebc954f069fd6f381->enter($__internal_5d695a0ce27a66dbc2f1e9421ec06f575dfb7e2d46aff83ebc954f069fd6f381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5d695a0ce27a66dbc2f1e9421ec06f575dfb7e2d46aff83ebc954f069fd6f381->leave($__internal_5d695a0ce27a66dbc2f1e9421ec06f575dfb7e2d46aff83ebc954f069fd6f381_prof);

        
        $__internal_dae3eab8be8c9bc605da8c6ae2ff946d86410343ac17d91f183552e4e02f3606->leave($__internal_dae3eab8be8c9bc605da8c6ae2ff946d86410343ac17d91f183552e4e02f3606_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbf6ed77cf40d446e56a7688f68554ee3b7c686ae978071777230797bf3c5bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf6ed77cf40d446e56a7688f68554ee3b7c686ae978071777230797bf3c5bec->enter($__internal_fbf6ed77cf40d446e56a7688f68554ee3b7c686ae978071777230797bf3c5bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_872969e87e8b80e228972aa333d2f6352d72e4694c43ff062ac2f474d93ae376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872969e87e8b80e228972aa333d2f6352d72e4694c43ff062ac2f474d93ae376->enter($__internal_872969e87e8b80e228972aa333d2f6352d72e4694c43ff062ac2f474d93ae376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_872969e87e8b80e228972aa333d2f6352d72e4694c43ff062ac2f474d93ae376->leave($__internal_872969e87e8b80e228972aa333d2f6352d72e4694c43ff062ac2f474d93ae376_prof);

        
        $__internal_fbf6ed77cf40d446e56a7688f68554ee3b7c686ae978071777230797bf3c5bec->leave($__internal_fbf6ed77cf40d446e56a7688f68554ee3b7c686ae978071777230797bf3c5bec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9b12fd75c0e940ba886deae647809ff94aaac750b807f453994a67c01f7f0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b12fd75c0e940ba886deae647809ff94aaac750b807f453994a67c01f7f0cf->enter($__internal_b9b12fd75c0e940ba886deae647809ff94aaac750b807f453994a67c01f7f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee046d0e89ffa42333927b234c9f84019ff0f479422a924778037433e4d8f109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee046d0e89ffa42333927b234c9f84019ff0f479422a924778037433e4d8f109->enter($__internal_ee046d0e89ffa42333927b234c9f84019ff0f479422a924778037433e4d8f109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee046d0e89ffa42333927b234c9f84019ff0f479422a924778037433e4d8f109->leave($__internal_ee046d0e89ffa42333927b234c9f84019ff0f479422a924778037433e4d8f109_prof);

        
        $__internal_b9b12fd75c0e940ba886deae647809ff94aaac750b807f453994a67c01f7f0cf->leave($__internal_b9b12fd75c0e940ba886deae647809ff94aaac750b807f453994a67c01f7f0cf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e2f2446b98d74d52fe62890dd930ca0be34e7d4337cfff2f25a2d723598e988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2f2446b98d74d52fe62890dd930ca0be34e7d4337cfff2f25a2d723598e988->enter($__internal_9e2f2446b98d74d52fe62890dd930ca0be34e7d4337cfff2f25a2d723598e988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f770dd8e36375f71e747401bb229808baa37007e9d0c01bcce07abc229f1db3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f770dd8e36375f71e747401bb229808baa37007e9d0c01bcce07abc229f1db3f->enter($__internal_f770dd8e36375f71e747401bb229808baa37007e9d0c01bcce07abc229f1db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f770dd8e36375f71e747401bb229808baa37007e9d0c01bcce07abc229f1db3f->leave($__internal_f770dd8e36375f71e747401bb229808baa37007e9d0c01bcce07abc229f1db3f_prof);

        
        $__internal_9e2f2446b98d74d52fe62890dd930ca0be34e7d4337cfff2f25a2d723598e988->leave($__internal_9e2f2446b98d74d52fe62890dd930ca0be34e7d4337cfff2f25a2d723598e988_prof);

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

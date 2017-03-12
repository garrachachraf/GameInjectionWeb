<?php

/* ::base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
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
        $__internal_5ec498eb25af0064e352d183edfa617319c06687545af4f1846490866ee47a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec498eb25af0064e352d183edfa617319c06687545af4f1846490866ee47a0d->enter($__internal_5ec498eb25af0064e352d183edfa617319c06687545af4f1846490866ee47a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f740d6ef5b641c29bce860e382ecaabad81673c7787e167fcef5910b1fcc67fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f740d6ef5b641c29bce860e382ecaabad81673c7787e167fcef5910b1fcc67fe->enter($__internal_f740d6ef5b641c29bce860e382ecaabad81673c7787e167fcef5910b1fcc67fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5ec498eb25af0064e352d183edfa617319c06687545af4f1846490866ee47a0d->leave($__internal_5ec498eb25af0064e352d183edfa617319c06687545af4f1846490866ee47a0d_prof);

        
        $__internal_f740d6ef5b641c29bce860e382ecaabad81673c7787e167fcef5910b1fcc67fe->leave($__internal_f740d6ef5b641c29bce860e382ecaabad81673c7787e167fcef5910b1fcc67fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddcd73ce9ee1c98206299649d033389e2828a9cbfffd36f2ae837a1bc369cb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcd73ce9ee1c98206299649d033389e2828a9cbfffd36f2ae837a1bc369cb03->enter($__internal_ddcd73ce9ee1c98206299649d033389e2828a9cbfffd36f2ae837a1bc369cb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00085685e3c02c685b91481ea0afdda7cd5c9fbfb2dcd13ab4c551a29053d3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00085685e3c02c685b91481ea0afdda7cd5c9fbfb2dcd13ab4c551a29053d3e6->enter($__internal_00085685e3c02c685b91481ea0afdda7cd5c9fbfb2dcd13ab4c551a29053d3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00085685e3c02c685b91481ea0afdda7cd5c9fbfb2dcd13ab4c551a29053d3e6->leave($__internal_00085685e3c02c685b91481ea0afdda7cd5c9fbfb2dcd13ab4c551a29053d3e6_prof);

        
        $__internal_ddcd73ce9ee1c98206299649d033389e2828a9cbfffd36f2ae837a1bc369cb03->leave($__internal_ddcd73ce9ee1c98206299649d033389e2828a9cbfffd36f2ae837a1bc369cb03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51c98dbab3147f2ead784f249ae54cd357c4da4463579bfad02f80a2a79d7ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c98dbab3147f2ead784f249ae54cd357c4da4463579bfad02f80a2a79d7ed6->enter($__internal_51c98dbab3147f2ead784f249ae54cd357c4da4463579bfad02f80a2a79d7ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b94ea30e6dc1cf045cb706f7a7ce3f5315681f83ce10dd8c382ebe6ec2ca5023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94ea30e6dc1cf045cb706f7a7ce3f5315681f83ce10dd8c382ebe6ec2ca5023->enter($__internal_b94ea30e6dc1cf045cb706f7a7ce3f5315681f83ce10dd8c382ebe6ec2ca5023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b94ea30e6dc1cf045cb706f7a7ce3f5315681f83ce10dd8c382ebe6ec2ca5023->leave($__internal_b94ea30e6dc1cf045cb706f7a7ce3f5315681f83ce10dd8c382ebe6ec2ca5023_prof);

        
        $__internal_51c98dbab3147f2ead784f249ae54cd357c4da4463579bfad02f80a2a79d7ed6->leave($__internal_51c98dbab3147f2ead784f249ae54cd357c4da4463579bfad02f80a2a79d7ed6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7c48ebf1a2663e907b50ec612fe98fb77c760597291395e922ffb50dadec702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c48ebf1a2663e907b50ec612fe98fb77c760597291395e922ffb50dadec702->enter($__internal_d7c48ebf1a2663e907b50ec612fe98fb77c760597291395e922ffb50dadec702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ddc93b08ec1991cf028580a7c0ca9a778e086d312b7ed34ac001e5da9a4bc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddc93b08ec1991cf028580a7c0ca9a778e086d312b7ed34ac001e5da9a4bc88->enter($__internal_3ddc93b08ec1991cf028580a7c0ca9a778e086d312b7ed34ac001e5da9a4bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ddc93b08ec1991cf028580a7c0ca9a778e086d312b7ed34ac001e5da9a4bc88->leave($__internal_3ddc93b08ec1991cf028580a7c0ca9a778e086d312b7ed34ac001e5da9a4bc88_prof);

        
        $__internal_d7c48ebf1a2663e907b50ec612fe98fb77c760597291395e922ffb50dadec702->leave($__internal_d7c48ebf1a2663e907b50ec612fe98fb77c760597291395e922ffb50dadec702_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1deef8220a2a4260d642fb1431f1016edf9c0c3c61e190bfd44f4010d81dc003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deef8220a2a4260d642fb1431f1016edf9c0c3c61e190bfd44f4010d81dc003->enter($__internal_1deef8220a2a4260d642fb1431f1016edf9c0c3c61e190bfd44f4010d81dc003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1441f94bc47214a55e47f7fe1436e110b39687e46743572d72482c6fc2735bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1441f94bc47214a55e47f7fe1436e110b39687e46743572d72482c6fc2735bb->enter($__internal_c1441f94bc47214a55e47f7fe1436e110b39687e46743572d72482c6fc2735bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1441f94bc47214a55e47f7fe1436e110b39687e46743572d72482c6fc2735bb->leave($__internal_c1441f94bc47214a55e47f7fe1436e110b39687e46743572d72482c6fc2735bb_prof);

        
        $__internal_1deef8220a2a4260d642fb1431f1016edf9c0c3c61e190bfd44f4010d81dc003->leave($__internal_1deef8220a2a4260d642fb1431f1016edf9c0c3c61e190bfd44f4010d81dc003_prof);

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
", "::base.html.twig", "/Library/WebServer/Documents/sprintweb3/app/Resources/views/base.html.twig");
    }
}

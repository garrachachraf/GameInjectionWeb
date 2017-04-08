<?php

/* @EloboostedFrontoffice/participation/new.html.twig */
class __TwigTemplate_9e8dc398c226b5b6604b6dc7e2debe013be41781c9d26d96696aad5a84821fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce4502742fbbe0b4e6c6fabfeb979de87c3ddb16f0461362617d05b24fce68ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4502742fbbe0b4e6c6fabfeb979de87c3ddb16f0461362617d05b24fce68ce->enter($__internal_ce4502742fbbe0b4e6c6fabfeb979de87c3ddb16f0461362617d05b24fce68ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $__internal_6454f8463a5b61369aa85ea4dd5d58924d0894da20ff7c431b76209a644b3e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6454f8463a5b61369aa85ea4dd5d58924d0894da20ff7c431b76209a644b3e29->enter($__internal_6454f8463a5b61369aa85ea4dd5d58924d0894da20ff7c431b76209a644b3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4502742fbbe0b4e6c6fabfeb979de87c3ddb16f0461362617d05b24fce68ce->leave($__internal_ce4502742fbbe0b4e6c6fabfeb979de87c3ddb16f0461362617d05b24fce68ce_prof);

        
        $__internal_6454f8463a5b61369aa85ea4dd5d58924d0894da20ff7c431b76209a644b3e29->leave($__internal_6454f8463a5b61369aa85ea4dd5d58924d0894da20ff7c431b76209a644b3e29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba75b275c8e3e203c1a9bb954cf15a7e43c9722b5cf02a61f74e7886517a2cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba75b275c8e3e203c1a9bb954cf15a7e43c9722b5cf02a61f74e7886517a2cb7->enter($__internal_ba75b275c8e3e203c1a9bb954cf15a7e43c9722b5cf02a61f74e7886517a2cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_236621cec02fb7b286f678cfbdc845654aed130936936a029f4ee9b0739be8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236621cec02fb7b286f678cfbdc845654aed130936936a029f4ee9b0739be8d9->enter($__internal_236621cec02fb7b286f678cfbdc845654aed130936936a029f4ee9b0739be8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_236621cec02fb7b286f678cfbdc845654aed130936936a029f4ee9b0739be8d9->leave($__internal_236621cec02fb7b286f678cfbdc845654aed130936936a029f4ee9b0739be8d9_prof);

        
        $__internal_ba75b275c8e3e203c1a9bb954cf15a7e43c9722b5cf02a61f74e7886517a2cb7->leave($__internal_ba75b275c8e3e203c1a9bb954cf15a7e43c9722b5cf02a61f74e7886517a2cb7_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Participation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/participation/new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\new.html.twig");
    }
}

<?php

/* @EloboostedBackoffice/tcategorie/new.html.twig */
class __TwigTemplate_c751f7fc688eddd2b9fdb3e204e905b634e42e0b0bd2af92937407ac69757885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/tcategorie/new.html.twig", 1);
        $this->blocks = array(
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_585b2e08520d167d7672d0ea0df0666f2dc8e0ccae9f4f7be3a27a8eec31a24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585b2e08520d167d7672d0ea0df0666f2dc8e0ccae9f4f7be3a27a8eec31a24f->enter($__internal_585b2e08520d167d7672d0ea0df0666f2dc8e0ccae9f4f7be3a27a8eec31a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/new.html.twig"));

        $__internal_b086dde9774f1d46f7216c7dd686d2eb643524f5f9c65372c66be697b52da9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b086dde9774f1d46f7216c7dd686d2eb643524f5f9c65372c66be697b52da9b8->enter($__internal_b086dde9774f1d46f7216c7dd686d2eb643524f5f9c65372c66be697b52da9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585b2e08520d167d7672d0ea0df0666f2dc8e0ccae9f4f7be3a27a8eec31a24f->leave($__internal_585b2e08520d167d7672d0ea0df0666f2dc8e0ccae9f4f7be3a27a8eec31a24f_prof);

        
        $__internal_b086dde9774f1d46f7216c7dd686d2eb643524f5f9c65372c66be697b52da9b8->leave($__internal_b086dde9774f1d46f7216c7dd686d2eb643524f5f9c65372c66be697b52da9b8_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_6640ab0db39f3917139f8c3c00f7e70188610f0f258d479a5b6e2a00b5b14730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6640ab0db39f3917139f8c3c00f7e70188610f0f258d479a5b6e2a00b5b14730->enter($__internal_6640ab0db39f3917139f8c3c00f7e70188610f0f258d479a5b6e2a00b5b14730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_6e18b53aa53890e91ed1c308c3f42fbad6fa11cc173279dc905fc839f0f7e577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e18b53aa53890e91ed1c308c3f42fbad6fa11cc173279dc905fc839f0f7e577->enter($__internal_6e18b53aa53890e91ed1c308c3f42fbad6fa11cc173279dc905fc839f0f7e577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 3
        echo "    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Add Category</h2>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br>
                <div id=\"demo-form2\" data-parsley-validate=\"\" class=\"form-horizontal form-label-left\" novalidate=\"\">

                    <div class=\"form-group\">
                        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomCategorie", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomCategorie", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_index");
        echo "\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6e18b53aa53890e91ed1c308c3f42fbad6fa11cc173279dc905fc839f0f7e577->leave($__internal_6e18b53aa53890e91ed1c308c3f42fbad6fa11cc173279dc905fc839f0f7e577_prof);

        
        $__internal_6640ab0db39f3917139f8c3c00f7e70188610f0f258d479a5b6e2a00b5b14730->leave($__internal_6640ab0db39f3917139f8c3c00f7e70188610f0f258d479a5b6e2a00b5b14730_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/tcategorie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  86 => 26,  81 => 24,  72 => 18,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}
{% block insiderowbottom %}
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Add Category</h2>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br>
                <div id=\"demo-form2\" data-parsley-validate=\"\" class=\"form-horizontal form-label-left\" novalidate=\"\">

                    <div class=\"form-group\">
                        {{ form_start(form) }}
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.nomCategorie.vars.id }}\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(form.nomCategorie) }}
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"{{ path('tcategorie_index') }}\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            {{ form_widget(form.Add) }}
                        </div>
                    </div>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@EloboostedBackoffice/tcategorie/new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\tcategorie\\new.html.twig");
    }
}

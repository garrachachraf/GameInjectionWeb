<?php

/* EloboostedBackofficeBundle:tcategorie:new.html.twig */
class __TwigTemplate_7c2d9d96dc7ddaadcdf38a80b8f62a2f6fe97534b75225cec1b37b7407deb46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:tcategorie:new.html.twig", 1);
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
        $__internal_613f9a1e51f5f15aa42e74540fd05c24c7c6963f26584b02248e435750df6367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613f9a1e51f5f15aa42e74540fd05c24c7c6963f26584b02248e435750df6367->enter($__internal_613f9a1e51f5f15aa42e74540fd05c24c7c6963f26584b02248e435750df6367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:new.html.twig"));

        $__internal_ff59a64e4fe07dfe7ae9fb7057e8ce52c9c98695166e2e5fef19d808a3789f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff59a64e4fe07dfe7ae9fb7057e8ce52c9c98695166e2e5fef19d808a3789f39->enter($__internal_ff59a64e4fe07dfe7ae9fb7057e8ce52c9c98695166e2e5fef19d808a3789f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613f9a1e51f5f15aa42e74540fd05c24c7c6963f26584b02248e435750df6367->leave($__internal_613f9a1e51f5f15aa42e74540fd05c24c7c6963f26584b02248e435750df6367_prof);

        
        $__internal_ff59a64e4fe07dfe7ae9fb7057e8ce52c9c98695166e2e5fef19d808a3789f39->leave($__internal_ff59a64e4fe07dfe7ae9fb7057e8ce52c9c98695166e2e5fef19d808a3789f39_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_a13bda45cca2cca8b0647c8d22d2563a81c89d9eb22bff413aeb99a89c3b92b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13bda45cca2cca8b0647c8d22d2563a81c89d9eb22bff413aeb99a89c3b92b0->enter($__internal_a13bda45cca2cca8b0647c8d22d2563a81c89d9eb22bff413aeb99a89c3b92b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_dace78f991416dcca1316875edaf18e90c657f6992441b90b6e56a629bfdcdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dace78f991416dcca1316875edaf18e90c657f6992441b90b6e56a629bfdcdff->enter($__internal_dace78f991416dcca1316875edaf18e90c657f6992441b90b6e56a629bfdcdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomCategorie", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Categorie's Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomCategorie", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_dace78f991416dcca1316875edaf18e90c657f6992441b90b6e56a629bfdcdff->leave($__internal_dace78f991416dcca1316875edaf18e90c657f6992441b90b6e56a629bfdcdff_prof);

        
        $__internal_a13bda45cca2cca8b0647c8d22d2563a81c89d9eb22bff413aeb99a89c3b92b0->leave($__internal_a13bda45cca2cca8b0647c8d22d2563a81c89d9eb22bff413aeb99a89c3b92b0_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:tcategorie:new.html.twig";
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
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.nomCategorie.vars.id }}\"> Categorie's Name <span class=\"required\">*</span>
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
", "EloboostedBackofficeBundle:tcategorie:new.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/tcategorie/new.html.twig");
    }
}

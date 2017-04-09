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
        $__internal_eb2a9b7626e7e915afbb123dc10501a1e3f9b5e9aae64e8adf2aeb122808e1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2a9b7626e7e915afbb123dc10501a1e3f9b5e9aae64e8adf2aeb122808e1d1->enter($__internal_eb2a9b7626e7e915afbb123dc10501a1e3f9b5e9aae64e8adf2aeb122808e1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/new.html.twig"));

        $__internal_863f3de739ac1f93555dffd009493ad54541a1044dbbf6a7160361135be3e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863f3de739ac1f93555dffd009493ad54541a1044dbbf6a7160361135be3e6be->enter($__internal_863f3de739ac1f93555dffd009493ad54541a1044dbbf6a7160361135be3e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2a9b7626e7e915afbb123dc10501a1e3f9b5e9aae64e8adf2aeb122808e1d1->leave($__internal_eb2a9b7626e7e915afbb123dc10501a1e3f9b5e9aae64e8adf2aeb122808e1d1_prof);

        
        $__internal_863f3de739ac1f93555dffd009493ad54541a1044dbbf6a7160361135be3e6be->leave($__internal_863f3de739ac1f93555dffd009493ad54541a1044dbbf6a7160361135be3e6be_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_c5cbd436d01cf4402dd5f3a843c63a70d7cf94452f48c8d8e5374e16a2e6e268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cbd436d01cf4402dd5f3a843c63a70d7cf94452f48c8d8e5374e16a2e6e268->enter($__internal_c5cbd436d01cf4402dd5f3a843c63a70d7cf94452f48c8d8e5374e16a2e6e268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_c6b1ecde230caa600616054fe2ae75314ed3276588abbca5fa0741c288b1ed6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b1ecde230caa600616054fe2ae75314ed3276588abbca5fa0741c288b1ed6d->enter($__internal_c6b1ecde230caa600616054fe2ae75314ed3276588abbca5fa0741c288b1ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_c6b1ecde230caa600616054fe2ae75314ed3276588abbca5fa0741c288b1ed6d->leave($__internal_c6b1ecde230caa600616054fe2ae75314ed3276588abbca5fa0741c288b1ed6d_prof);

        
        $__internal_c5cbd436d01cf4402dd5f3a843c63a70d7cf94452f48c8d8e5374e16a2e6e268->leave($__internal_c5cbd436d01cf4402dd5f3a843c63a70d7cf94452f48c8d8e5374e16a2e6e268_prof);

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

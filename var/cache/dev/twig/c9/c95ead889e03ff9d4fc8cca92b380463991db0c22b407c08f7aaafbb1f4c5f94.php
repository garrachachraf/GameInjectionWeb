<?php

/* @EloboostedBackoffice/tevenement/new.html.twig */
class __TwigTemplate_b43f599e02a4b429355caa70cbfcd8044a4e6b9e7db836fb6e90a44dd383f2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/tevenement/new.html.twig", 1);
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
        $__internal_33b8b55bfd27e0c82ec95a7fd8c28f23b39d9768aa568a54a3c49bb18ea43c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b8b55bfd27e0c82ec95a7fd8c28f23b39d9768aa568a54a3c49bb18ea43c63->enter($__internal_33b8b55bfd27e0c82ec95a7fd8c28f23b39d9768aa568a54a3c49bb18ea43c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/new.html.twig"));

        $__internal_11c65ee99ee46f438d5cf348b8bb2827af02a384ffa1538d72208b5b705ec642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c65ee99ee46f438d5cf348b8bb2827af02a384ffa1538d72208b5b705ec642->enter($__internal_11c65ee99ee46f438d5cf348b8bb2827af02a384ffa1538d72208b5b705ec642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b8b55bfd27e0c82ec95a7fd8c28f23b39d9768aa568a54a3c49bb18ea43c63->leave($__internal_33b8b55bfd27e0c82ec95a7fd8c28f23b39d9768aa568a54a3c49bb18ea43c63_prof);

        
        $__internal_11c65ee99ee46f438d5cf348b8bb2827af02a384ffa1538d72208b5b705ec642->leave($__internal_11c65ee99ee46f438d5cf348b8bb2827af02a384ffa1538d72208b5b705ec642_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_a14dfbaeaae7f62ff113d8bbb77007206242e3835e959be71602793f093a18cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14dfbaeaae7f62ff113d8bbb77007206242e3835e959be71602793f093a18cf->enter($__internal_a14dfbaeaae7f62ff113d8bbb77007206242e3835e959be71602793f093a18cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_f775cb4104b5de457570815ee198229295a2ab838f0e5f202b1d0b0713f8df94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f775cb4104b5de457570815ee198229295a2ab838f0e5f202b1d0b0713f8df94->enter($__internal_f775cb4104b5de457570815ee198229295a2ab838f0e5f202b1d0b0713f8df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 3
        echo "<div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Add Event</h2>
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleevent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Note <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleevent", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Note <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Lien <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Date <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEvent", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Type <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeEvent", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imgEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Type <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imgEvent", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index");
        echo "\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                        <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f775cb4104b5de457570815ee198229295a2ab838f0e5f202b1d0b0713f8df94->leave($__internal_f775cb4104b5de457570815ee198229295a2ab838f0e5f202b1d0b0713f8df94_prof);

        
        $__internal_a14dfbaeaae7f62ff113d8bbb77007206242e3835e959be71602793f093a18cf->leave($__internal_a14dfbaeaae7f62ff113d8bbb77007206242e3835e959be71602793f093a18cf_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/tevenement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  151 => 61,  146 => 59,  137 => 53,  131 => 50,  124 => 46,  118 => 43,  111 => 39,  105 => 36,  98 => 32,  92 => 29,  85 => 25,  79 => 22,  72 => 18,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
            <h2>Add Event</h2>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            <br>
            <div id=\"demo-form2\" data-parsley-validate=\"\" class=\"form-horizontal form-label-left\" novalidate=\"\">

                <div class=\"form-group\">
                    {{ form_start(form) }}
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.titleevent.vars.id }}\"> Note <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.titleevent) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.note.vars.id }}\"> Note <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.note) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.lien.vars.id }}\"> Lien <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.lien) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.dateEvent.vars.id }}\"> Date <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.dateEvent) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.typeEvent.vars.id }}\"> Type <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.typeEvent) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ form.imgEvent.vars.id }}\"> Type <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.imgEvent) }}
                    </div>
                </div>
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                        <a href=\"{{ path('tevenement_index') }}\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                        <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                        {{ form_widget(form.Add) }}
                    </div>
                </div>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
</div>
{% endblock %}", "@EloboostedBackoffice/tevenement/new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\tevenement\\new.html.twig");
    }
}

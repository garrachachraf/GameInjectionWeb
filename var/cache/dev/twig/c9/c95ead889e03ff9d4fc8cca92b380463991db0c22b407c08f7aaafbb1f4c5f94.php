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
        $__internal_06207e42b1fd0bac485a2250d854887636add8e95fdc9311c3bfb5e2f6c9174f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06207e42b1fd0bac485a2250d854887636add8e95fdc9311c3bfb5e2f6c9174f->enter($__internal_06207e42b1fd0bac485a2250d854887636add8e95fdc9311c3bfb5e2f6c9174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/new.html.twig"));

        $__internal_02bf5a451b8a91e53f2f66019777a365c59367895bf03f29975f3f9ce5d3a6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bf5a451b8a91e53f2f66019777a365c59367895bf03f29975f3f9ce5d3a6bb->enter($__internal_02bf5a451b8a91e53f2f66019777a365c59367895bf03f29975f3f9ce5d3a6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06207e42b1fd0bac485a2250d854887636add8e95fdc9311c3bfb5e2f6c9174f->leave($__internal_06207e42b1fd0bac485a2250d854887636add8e95fdc9311c3bfb5e2f6c9174f_prof);

        
        $__internal_02bf5a451b8a91e53f2f66019777a365c59367895bf03f29975f3f9ce5d3a6bb->leave($__internal_02bf5a451b8a91e53f2f66019777a365c59367895bf03f29975f3f9ce5d3a6bb_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_6f12080ac8b946f958b86f27b851196391b1ca46b10e9fad4c30333096022936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f12080ac8b946f958b86f27b851196391b1ca46b10e9fad4c30333096022936->enter($__internal_6f12080ac8b946f958b86f27b851196391b1ca46b10e9fad4c30333096022936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_8aa09a1fb05e46645379b3b7b70ca41144d5b08b5d0281f2c133ff0acdcf1aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa09a1fb05e46645379b3b7b70ca41144d5b08b5d0281f2c133ff0acdcf1aed->enter($__internal_8aa09a1fb05e46645379b3b7b70ca41144d5b08b5d0281f2c133ff0acdcf1aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_8aa09a1fb05e46645379b3b7b70ca41144d5b08b5d0281f2c133ff0acdcf1aed->leave($__internal_8aa09a1fb05e46645379b3b7b70ca41144d5b08b5d0281f2c133ff0acdcf1aed_prof);

        
        $__internal_6f12080ac8b946f958b86f27b851196391b1ca46b10e9fad4c30333096022936->leave($__internal_6f12080ac8b946f958b86f27b851196391b1ca46b10e9fad4c30333096022936_prof);

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

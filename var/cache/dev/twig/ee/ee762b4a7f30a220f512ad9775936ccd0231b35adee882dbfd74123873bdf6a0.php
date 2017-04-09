<?php

/* @EloboostedBackoffice/tevenement/edit.html.twig */
class __TwigTemplate_aa92905ad9acaea500dbc9acf39bcb78c65d4f33653e56759fd8230e71fc8d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/tevenement/edit.html.twig", 1);
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
        $__internal_489bcce0e5f99be2676cf529227fa70de8ea42e3b8321b94bbd74fc52a38469a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489bcce0e5f99be2676cf529227fa70de8ea42e3b8321b94bbd74fc52a38469a->enter($__internal_489bcce0e5f99be2676cf529227fa70de8ea42e3b8321b94bbd74fc52a38469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/edit.html.twig"));

        $__internal_d6902b263f1665bc21a061f95efaae1936c7d09ecac8f1bca825fb1a4c51befb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6902b263f1665bc21a061f95efaae1936c7d09ecac8f1bca825fb1a4c51befb->enter($__internal_d6902b263f1665bc21a061f95efaae1936c7d09ecac8f1bca825fb1a4c51befb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tevenement/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489bcce0e5f99be2676cf529227fa70de8ea42e3b8321b94bbd74fc52a38469a->leave($__internal_489bcce0e5f99be2676cf529227fa70de8ea42e3b8321b94bbd74fc52a38469a_prof);

        
        $__internal_d6902b263f1665bc21a061f95efaae1936c7d09ecac8f1bca825fb1a4c51befb->leave($__internal_d6902b263f1665bc21a061f95efaae1936c7d09ecac8f1bca825fb1a4c51befb_prof);

    }

    // line 3
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_7c48354b267d404b75aa0264860cc667dc3e2c7d6a669eaa7e0651759473a728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c48354b267d404b75aa0264860cc667dc3e2c7d6a669eaa7e0651759473a728->enter($__internal_7c48354b267d404b75aa0264860cc667dc3e2c7d6a669eaa7e0651759473a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_ff664afbd3e7c6d899493e4650c9664c84bee85b28e80fab8aa27f7cb2cf6c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff664afbd3e7c6d899493e4650c9664c84bee85b28e80fab8aa27f7cb2cf6c08->enter($__internal_ff664afbd3e7c6d899493e4650c9664c84bee85b28e80fab8aa27f7cb2cf6c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 4
        echo "    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Edit Category</h2>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br>
                <div id=\"demo-form2\" data-parsley-validate=\"\" class=\"form-horizontal form-label-left\" novalidate=\"\">

                    <div class=\"form-group\">
                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titleevent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Note <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titleevent", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "note", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Note <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "note", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lien", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Lien <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lien", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Date event <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateEvent", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imgEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imgEvent", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeEvent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeEvent", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index");
        echo "\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Add", array()), 'widget');
        echo "
                            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        </div>
                        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\"></input>
                        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div>


                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_ff664afbd3e7c6d899493e4650c9664c84bee85b28e80fab8aa27f7cb2cf6c08->leave($__internal_ff664afbd3e7c6d899493e4650c9664c84bee85b28e80fab8aa27f7cb2cf6c08_prof);

        
        $__internal_7c48354b267d404b75aa0264860cc667dc3e2c7d6a669eaa7e0651759473a728->leave($__internal_7c48354b267d404b75aa0264860cc667dc3e2c7d6a669eaa7e0651759473a728_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/tevenement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  159 => 64,  154 => 62,  150 => 61,  146 => 60,  137 => 54,  131 => 51,  124 => 47,  118 => 44,  111 => 40,  105 => 37,  98 => 33,  92 => 30,  85 => 26,  79 => 23,  72 => 19,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                <h2>Edit Category</h2>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br>
                <div id=\"demo-form2\" data-parsley-validate=\"\" class=\"form-horizontal form-label-left\" novalidate=\"\">

                    <div class=\"form-group\">
                        {{ form_start(edit_form) }}
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.titleevent.vars.id }}\"> Note <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.titleevent) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.note.vars.id }}\"> Note <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.note) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.lien.vars.id }}\"> Lien <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.lien) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.dateEvent.vars.id }}\"> Date event <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.dateEvent) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.imgEvent.vars.id }}\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.imgEvent) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.typeEvent.vars.id }}\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.typeEvent) }}
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"{{ path('tevenement_index') }}\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                            {{ form_widget(edit_form.Add) }}
                            {{ form_end(edit_form) }}
                        </div>
                        {{ form_start(delete_form) }}
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\"></input>
                        {{ form_end(delete_form) }}
                    </div>


                </div>

            </div>
        </div>
    </div>
{% endblock %}

", "@EloboostedBackoffice/tevenement/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\tevenement\\edit.html.twig");
    }
}

<?php

/* EloboostedBackofficeBundle:tevenement:edit.html.twig */
class __TwigTemplate_fcd3b77a3ff7d3198bf3c13dfda9e69d00ae50b11a1542bce055790397659429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:tevenement:edit.html.twig", 1);
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
        $__internal_dc494eb018bee5811030b68192077c762f18d22765d5554dc7598aa27ad0192b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc494eb018bee5811030b68192077c762f18d22765d5554dc7598aa27ad0192b->enter($__internal_dc494eb018bee5811030b68192077c762f18d22765d5554dc7598aa27ad0192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tevenement:edit.html.twig"));

        $__internal_211eab4376658f33aca34acaee885ac8ab600d45b840818177fa8a877c5b72e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211eab4376658f33aca34acaee885ac8ab600d45b840818177fa8a877c5b72e3->enter($__internal_211eab4376658f33aca34acaee885ac8ab600d45b840818177fa8a877c5b72e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tevenement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc494eb018bee5811030b68192077c762f18d22765d5554dc7598aa27ad0192b->leave($__internal_dc494eb018bee5811030b68192077c762f18d22765d5554dc7598aa27ad0192b_prof);

        
        $__internal_211eab4376658f33aca34acaee885ac8ab600d45b840818177fa8a877c5b72e3->leave($__internal_211eab4376658f33aca34acaee885ac8ab600d45b840818177fa8a877c5b72e3_prof);

    }

    // line 3
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_c374efeaec741e7446cf45a9fd9d0a54db503fb7b92c1c1330424ddf66bdb2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c374efeaec741e7446cf45a9fd9d0a54db503fb7b92c1c1330424ddf66bdb2ee->enter($__internal_c374efeaec741e7446cf45a9fd9d0a54db503fb7b92c1c1330424ddf66bdb2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_23cb0de9615ab0b408d0b6dd811ca24789833619584684f72ab00282b923d144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cb0de9615ab0b408d0b6dd811ca24789833619584684f72ab00282b923d144->enter($__internal_23cb0de9615ab0b408d0b6dd811ca24789833619584684f72ab00282b923d144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_23cb0de9615ab0b408d0b6dd811ca24789833619584684f72ab00282b923d144->leave($__internal_23cb0de9615ab0b408d0b6dd811ca24789833619584684f72ab00282b923d144_prof);

        
        $__internal_c374efeaec741e7446cf45a9fd9d0a54db503fb7b92c1c1330424ddf66bdb2ee->leave($__internal_c374efeaec741e7446cf45a9fd9d0a54db503fb7b92c1c1330424ddf66bdb2ee_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:tevenement:edit.html.twig";
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

", "EloboostedBackofficeBundle:tevenement:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/tevenement/edit.html.twig");
    }
}

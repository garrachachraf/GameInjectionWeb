<?php

/* EloboostedBackofficeBundle:tcategorie:edit.html.twig */
class __TwigTemplate_5ca8f3c8783c679e525e1feaa589726d6993d937df9cae89d71cd3818d8b2f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:tcategorie:edit.html.twig", 1);
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
        $__internal_af513c56e4c3b8a4e81c3545c488fd56afa35efb1203d1dc35f6cec89561eaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af513c56e4c3b8a4e81c3545c488fd56afa35efb1203d1dc35f6cec89561eaea->enter($__internal_af513c56e4c3b8a4e81c3545c488fd56afa35efb1203d1dc35f6cec89561eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:edit.html.twig"));

        $__internal_ad95ce5e4abeca74b5b9300bd6f9ca53129328f901c15b1b06044f7e074e0686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad95ce5e4abeca74b5b9300bd6f9ca53129328f901c15b1b06044f7e074e0686->enter($__internal_ad95ce5e4abeca74b5b9300bd6f9ca53129328f901c15b1b06044f7e074e0686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af513c56e4c3b8a4e81c3545c488fd56afa35efb1203d1dc35f6cec89561eaea->leave($__internal_af513c56e4c3b8a4e81c3545c488fd56afa35efb1203d1dc35f6cec89561eaea_prof);

        
        $__internal_ad95ce5e4abeca74b5b9300bd6f9ca53129328f901c15b1b06044f7e074e0686->leave($__internal_ad95ce5e4abeca74b5b9300bd6f9ca53129328f901c15b1b06044f7e074e0686_prof);

    }

    // line 3
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_f1ec6f0e01e273fb6e06faeeefea31826d2aab2ffa40f8371545590a522fe0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ec6f0e01e273fb6e06faeeefea31826d2aab2ffa40f8371545590a522fe0d1->enter($__internal_f1ec6f0e01e273fb6e06faeeefea31826d2aab2ffa40f8371545590a522fe0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_72029c8fd448e7c1e1b705e19f2b6d17ad1d55500da15380075922c787342533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72029c8fd448e7c1e1b705e19f2b6d17ad1d55500da15380075922c787342533->enter($__internal_72029c8fd448e7c1e1b705e19f2b6d17ad1d55500da15380075922c787342533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomCategorie", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomCategorie", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_index");
        echo "\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Add", array()), 'widget');
        echo "
                            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        </div>
                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\"></input>
                        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div>


                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_72029c8fd448e7c1e1b705e19f2b6d17ad1d55500da15380075922c787342533->leave($__internal_72029c8fd448e7c1e1b705e19f2b6d17ad1d55500da15380075922c787342533_prof);

        
        $__internal_f1ec6f0e01e273fb6e06faeeefea31826d2aab2ffa40f8371545590a522fe0d1->leave($__internal_f1ec6f0e01e273fb6e06faeeefea31826d2aab2ffa40f8371545590a522fe0d1_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:tcategorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  94 => 29,  89 => 27,  85 => 26,  81 => 25,  72 => 19,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"{{ edit_form.nomCategorie.vars.id }}\"> Nom Categorie <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(edit_form.nomCategorie) }}
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <a href=\"{{ path('tcategorie_index') }}\"><button class=\"btn btn-primary\" type=\"button\">Cancel</button></a>
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
", "EloboostedBackofficeBundle:tcategorie:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/tcategorie/edit.html.twig");
    }
}

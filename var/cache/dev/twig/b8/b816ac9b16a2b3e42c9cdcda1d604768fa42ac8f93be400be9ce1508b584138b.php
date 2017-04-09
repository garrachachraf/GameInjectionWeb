<?php

/* EloboostedBackofficeBundle:tcategorie:new.html.twig */
class __TwigTemplate_af5ed9d9224e4062db6f88af3f911b6d28d59801cf12ec843bccb7f254d67f58 extends Twig_Template
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
        $__internal_2329dd326aef82a121eba48039ee27422d641efa92a1eeb62a070bece4e28351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2329dd326aef82a121eba48039ee27422d641efa92a1eeb62a070bece4e28351->enter($__internal_2329dd326aef82a121eba48039ee27422d641efa92a1eeb62a070bece4e28351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:new.html.twig"));

        $__internal_98134161fd37b1e8d70990f3c76ccb55e6f87894f393c6deaef598f00897461d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98134161fd37b1e8d70990f3c76ccb55e6f87894f393c6deaef598f00897461d->enter($__internal_98134161fd37b1e8d70990f3c76ccb55e6f87894f393c6deaef598f00897461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2329dd326aef82a121eba48039ee27422d641efa92a1eeb62a070bece4e28351->leave($__internal_2329dd326aef82a121eba48039ee27422d641efa92a1eeb62a070bece4e28351_prof);

        
        $__internal_98134161fd37b1e8d70990f3c76ccb55e6f87894f393c6deaef598f00897461d->leave($__internal_98134161fd37b1e8d70990f3c76ccb55e6f87894f393c6deaef598f00897461d_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_5fd7819f80172a722531ff313f6d3321c2b45c5bbea3c8c65ec2a31dd8f53bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd7819f80172a722531ff313f6d3321c2b45c5bbea3c8c65ec2a31dd8f53bad->enter($__internal_5fd7819f80172a722531ff313f6d3321c2b45c5bbea3c8c65ec2a31dd8f53bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_bf317374246fa76de95464d15ff80b5e182a2ee42d8664206d01ca0e63fb1e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf317374246fa76de95464d15ff80b5e182a2ee42d8664206d01ca0e63fb1e65->enter($__internal_bf317374246fa76de95464d15ff80b5e182a2ee42d8664206d01ca0e63fb1e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_bf317374246fa76de95464d15ff80b5e182a2ee42d8664206d01ca0e63fb1e65->leave($__internal_bf317374246fa76de95464d15ff80b5e182a2ee42d8664206d01ca0e63fb1e65_prof);

        
        $__internal_5fd7819f80172a722531ff313f6d3321c2b45c5bbea3c8c65ec2a31dd8f53bad->leave($__internal_5fd7819f80172a722531ff313f6d3321c2b45c5bbea3c8c65ec2a31dd8f53bad_prof);

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
", "EloboostedBackofficeBundle:tcategorie:new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/tcategorie/new.html.twig");
    }
}

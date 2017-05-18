<?php

/* EloboostedFrontofficeBundle:games:new.html.twig */
class __TwigTemplate_f438b0b86c17556ea5b724ca2d28c6d002be81f5114ae889b4b092af6c2b4bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:games:new.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50498f819fabeb4cbbcbb8a1e728a135ad8478f486660d2adfece8e0cef5a41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50498f819fabeb4cbbcbb8a1e728a135ad8478f486660d2adfece8e0cef5a41e->enter($__internal_50498f819fabeb4cbbcbb8a1e728a135ad8478f486660d2adfece8e0cef5a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:new.html.twig"));

        $__internal_49c2afec3da7ee9e59469429920e668235942e206754c1c90334760cff8e7cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c2afec3da7ee9e59469429920e668235942e206754c1c90334760cff8e7cc4->enter($__internal_49c2afec3da7ee9e59469429920e668235942e206754c1c90334760cff8e7cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50498f819fabeb4cbbcbb8a1e728a135ad8478f486660d2adfece8e0cef5a41e->leave($__internal_50498f819fabeb4cbbcbb8a1e728a135ad8478f486660d2adfece8e0cef5a41e_prof);

        
        $__internal_49c2afec3da7ee9e59469429920e668235942e206754c1c90334760cff8e7cc4->leave($__internal_49c2afec3da7ee9e59469429920e668235942e206754c1c90334760cff8e7cc4_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_3e2b48c8978fb6c1720e8f847dadb5335ee9865e5afef38034c1d752005d866a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2b48c8978fb6c1720e8f847dadb5335ee9865e5afef38034c1d752005d866a->enter($__internal_3e2b48c8978fb6c1720e8f847dadb5335ee9865e5afef38034c1d752005d866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cbac176f09236b132283a90c6c54eddfc7bf2f274bc3505868f55d27122bef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbac176f09236b132283a90c6c54eddfc7bf2f274bc3505868f55d27122bef97->enter($__internal_cbac176f09236b132283a90c6c54eddfc7bf2f274bc3505868f55d27122bef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li class=\"active\">Add Game</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Game</h3>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomGames", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                               title=\"Select Game image\"></i>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imageGames", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'row');
        echo "
                        </div>

                    </div>

                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "supported", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group \">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idCathegorieg", array()), 'row');
        echo "
                    </div>

                    <div class=\"text-center margin-top-30\">
                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"
                           value=\"Add Game\"/>

                        <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\"><button class=\"btn btn-default btn-lg btn-rounded btn-shadow\"> Back to the list</button></a>

                    </div>
                    <div class=\"hidden\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'row');
        echo "</div>
                </div>



            </div>
        </div>

    </section>


    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "




";
        
        $__internal_cbac176f09236b132283a90c6c54eddfc7bf2f274bc3505868f55d27122bef97->leave($__internal_cbac176f09236b132283a90c6c54eddfc7bf2f274bc3505868f55d27122bef97_prof);

        
        $__internal_3e2b48c8978fb6c1720e8f847dadb5335ee9865e5afef38034c1d752005d866a->leave($__internal_3e2b48c8978fb6c1720e8f847dadb5335ee9865e5afef38034c1d752005d866a_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 87,  151 => 76,  145 => 73,  135 => 66,  128 => 62,  121 => 58,  112 => 52,  101 => 44,  91 => 37,  63 => 12,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    {{ form_start(form) }}
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li class=\"active\">Add Game</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Game</h3>
                    </div>

                    <div class=\"form-group\">
                        {{ form_row(form.nomGames) }}
                    </div>

                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                               title=\"Select Game image\"></i>
                            {{ form_row(form.imageGames) }}
                        </div>
                    </div>

                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            {{ form_row(form.prix) }}
                        </div>

                    </div>

                    <div class=\"form-group\">
                        {{ form_row(form.supported) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_row(form.description) }}
                    </div>

                    <div class=\"form-group \">
                            {{ form_row(form.idCathegorieg) }}
                    </div>

                    <div class=\"text-center margin-top-30\">
                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"
                           value=\"Add Game\"/>

                        <a href=\"{{ path('yes_index') }}\"><button class=\"btn btn-default btn-lg btn-rounded btn-shadow\"> Back to the list</button></a>

                    </div>
                    <div class=\"hidden\">{{ form_row(form.submit) }}</div>
                </div>



            </div>
        </div>

    </section>


    {{ form_end(form) }}




{% endblock %}
", "EloboostedFrontofficeBundle:games:new.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/games/new.html.twig");
    }
}

<?php

/* @EloboostedFrontoffice/games/new.html.twig */
class __TwigTemplate_c4fe9fad9d83e2dabc9afd35deb15cb5ce4ce29fceb0f8b01ef25ae3875a0fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/games/new.html.twig", 1);
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
        $__internal_00dc44875c47b88ac7218d91b6d237a9217efbb510e029c32c878a0d4f5aca6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dc44875c47b88ac7218d91b6d237a9217efbb510e029c32c878a0d4f5aca6e->enter($__internal_00dc44875c47b88ac7218d91b6d237a9217efbb510e029c32c878a0d4f5aca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/new.html.twig"));

        $__internal_51b7049b91fbad77db7447e1c5d131e065e8ffc796ad1966b5846f8aad15eeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b7049b91fbad77db7447e1c5d131e065e8ffc796ad1966b5846f8aad15eeec->enter($__internal_51b7049b91fbad77db7447e1c5d131e065e8ffc796ad1966b5846f8aad15eeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00dc44875c47b88ac7218d91b6d237a9217efbb510e029c32c878a0d4f5aca6e->leave($__internal_00dc44875c47b88ac7218d91b6d237a9217efbb510e029c32c878a0d4f5aca6e_prof);

        
        $__internal_51b7049b91fbad77db7447e1c5d131e065e8ffc796ad1966b5846f8aad15eeec->leave($__internal_51b7049b91fbad77db7447e1c5d131e065e8ffc796ad1966b5846f8aad15eeec_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_3e740d89614623cdb7c67d8e37c7f3eea53a89125896fea44ad61e8d35336f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e740d89614623cdb7c67d8e37c7f3eea53a89125896fea44ad61e8d35336f4c->enter($__internal_3e740d89614623cdb7c67d8e37c7f3eea53a89125896fea44ad61e8d35336f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f822ca2f940bc9d7383b5b14084638ee653bfcec9de8e1ff346334395dd79bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f822ca2f940bc9d7383b5b14084638ee653bfcec9de8e1ff346334395dd79bb9->enter($__internal_f822ca2f940bc9d7383b5b14084638ee653bfcec9de8e1ff346334395dd79bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGames", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                               title=\"Select Game image\"></i>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageGames", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'row');
        echo "
                        </div>

                    </div>

                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supported", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                    </div>

                    <div class=\"form-group \">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCathegorieg", array()), 'row');
        echo "

                    </div>

                    <div class=\"text-center margin-top-30\">
                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"
                           value=\"Add Game\"/>
                    </div>

                </div>



            </div>
        </div>

    </section>


    ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    <ul>
        <li>
            <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f822ca2f940bc9d7383b5b14084638ee653bfcec9de8e1ff346334395dd79bb9->leave($__internal_f822ca2f940bc9d7383b5b14084638ee653bfcec9de8e1ff346334395dd79bb9_prof);

        
        $__internal_3e740d89614623cdb7c67d8e37c7f3eea53a89125896fea44ad61e8d35336f4c->leave($__internal_3e740d89614623cdb7c67d8e37c7f3eea53a89125896fea44ad61e8d35336f4c_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/games/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 90,  157 => 85,  135 => 66,  128 => 62,  121 => 58,  112 => 52,  101 => 44,  91 => 37,  63 => 12,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                    </div>

                </div>



            </div>
        </div>

    </section>


    {{ form_end(form) }}


    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/games/new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\new.html.twig");
    }
}

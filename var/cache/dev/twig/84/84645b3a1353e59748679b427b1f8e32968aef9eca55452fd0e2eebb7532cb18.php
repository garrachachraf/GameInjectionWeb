<?php

/* @EloboostedFrontoffice/games/new.html.twig */
class __TwigTemplate_e452186daf9e7a0cecca25db35296b631bf3f74396b42c693498c4766c98e689 extends Twig_Template
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
        $__internal_422539db7a2aeb78cf81d737f09c06694948e53bc0786e3b2e6090a594d41a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422539db7a2aeb78cf81d737f09c06694948e53bc0786e3b2e6090a594d41a4a->enter($__internal_422539db7a2aeb78cf81d737f09c06694948e53bc0786e3b2e6090a594d41a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/new.html.twig"));

        $__internal_96ac49fa4a44614229ed25a5c3d37ca5b0698a0307fa36b0460c2d9308ea0b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ac49fa4a44614229ed25a5c3d37ca5b0698a0307fa36b0460c2d9308ea0b6f->enter($__internal_96ac49fa4a44614229ed25a5c3d37ca5b0698a0307fa36b0460c2d9308ea0b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422539db7a2aeb78cf81d737f09c06694948e53bc0786e3b2e6090a594d41a4a->leave($__internal_422539db7a2aeb78cf81d737f09c06694948e53bc0786e3b2e6090a594d41a4a_prof);

        
        $__internal_96ac49fa4a44614229ed25a5c3d37ca5b0698a0307fa36b0460c2d9308ea0b6f->leave($__internal_96ac49fa4a44614229ed25a5c3d37ca5b0698a0307fa36b0460c2d9308ea0b6f_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_293d991a460ea93ce566f3f3819c4c9eda400d642eb4118b0d5d2b24f148bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293d991a460ea93ce566f3f3819c4c9eda400d642eb4118b0d5d2b24f148bbb5->enter($__internal_293d991a460ea93ce566f3f3819c4c9eda400d642eb4118b0d5d2b24f148bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3384cda239d13124eea3f24e9d68b79c28b163c34df7d6642130324405268382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3384cda239d13124eea3f24e9d68b79c28b163c34df7d6642130324405268382->enter($__internal_3384cda239d13124eea3f24e9d68b79c28b163c34df7d6642130324405268382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_3384cda239d13124eea3f24e9d68b79c28b163c34df7d6642130324405268382->leave($__internal_3384cda239d13124eea3f24e9d68b79c28b163c34df7d6642130324405268382_prof);

        
        $__internal_293d991a460ea93ce566f3f3819c4c9eda400d642eb4118b0d5d2b24f148bbb5->leave($__internal_293d991a460ea93ce566f3f3819c4c9eda400d642eb4118b0d5d2b24f148bbb5_prof);

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
", "@EloboostedFrontoffice/games/new.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\new.html.twig");
    }
}

<?php

/* EloboostedFrontofficeBundle:tproduit:edit.html.twig */
class __TwigTemplate_a3d084bfc594988e23979acaeabfed0bca5b22ffaea524b30e7c1295ee02157e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "EloboostedFrontofficeBundle:tproduit:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EloboostedFrontoffice/Default/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb6ab3fc05c8355818b4a1cf8a02d91bdc57d38d4ef428d46750143f3327260b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6ab3fc05c8355818b4a1cf8a02d91bdc57d38d4ef428d46750143f3327260b->enter($__internal_eb6ab3fc05c8355818b4a1cf8a02d91bdc57d38d4ef428d46750143f3327260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:edit.html.twig"));

        $__internal_ae515d9af1563c725df2a8e4dc8936dc83ec1f91e11f0eeea2d3ac2d0d29fce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae515d9af1563c725df2a8e4dc8936dc83ec1f91e11f0eeea2d3ac2d0d29fce3->enter($__internal_ae515d9af1563c725df2a8e4dc8936dc83ec1f91e11f0eeea2d3ac2d0d29fce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6ab3fc05c8355818b4a1cf8a02d91bdc57d38d4ef428d46750143f3327260b->leave($__internal_eb6ab3fc05c8355818b4a1cf8a02d91bdc57d38d4ef428d46750143f3327260b_prof);

        
        $__internal_ae515d9af1563c725df2a8e4dc8936dc83ec1f91e11f0eeea2d3ac2d0d29fce3->leave($__internal_ae515d9af1563c725df2a8e4dc8936dc83ec1f91e11f0eeea2d3ac2d0d29fce3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9bfb17d2417bdc495646f68f9d7ae95f908be4d25429d5906782a1faf196e903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfb17d2417bdc495646f68f9d7ae95f908be4d25429d5906782a1faf196e903->enter($__internal_9bfb17d2417bdc495646f68f9d7ae95f908be4d25429d5906782a1faf196e903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a8b320c8d58167d66c0f49bbff82b08229b07e771ed28dfa29c8f856b3ebe683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b320c8d58167d66c0f49bbff82b08229b07e771ed28dfa29c8f856b3ebe683->enter($__internal_a8b320c8d58167d66c0f49bbff82b08229b07e771ed28dfa29c8f856b3ebe683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"></script>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Store</a></li>
                        <li class=\"active\">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<section class=\"elements bg-white padding-top-40 padding-bottom-50\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "libelleProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "marqueProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prixProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo "<br>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idCategorieProd", array()), 'widget');
        echo "<br>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imgProduit", array()), 'widget');
        echo "
                        <script>\$('#";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imgProduit", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                                buttonName: 'btn-success',
                                buttonText: ' Choose an image'
                            });</script>

                    </div>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageProduit2", array()), 'widget');
        echo "
                    <script>\$('#";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageProduit2", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                            buttonName: 'btn-success',
                            buttonText: ' Choose an image'
                        });</script>

                </div>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageProduit3", array()), 'widget');
        echo "
                <script>\$('#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageProduit3", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                        buttonName: 'btn-success',
                        buttonText: ' Choose an image'
                    });</script>

            </div>
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descriptionProduit", array()), 'widget');
        echo "<br>
                    <div class=\"form-group\">
                        ";
        // line 68
        ob_start();
        // line 69
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "captcha", array()), 'widget');
        echo "
                        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 71
        echo "                    </div>
                    <div class=\"text-center margin-top-30\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "Valider", array()), 'widget');
        echo "
                    </div>
    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
        </div>
    </div>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
</section>
";
        
        $__internal_a8b320c8d58167d66c0f49bbff82b08229b07e771ed28dfa29c8f856b3ebe683->leave($__internal_a8b320c8d58167d66c0f49bbff82b08229b07e771ed28dfa29c8f856b3ebe683_prof);

        
        $__internal_9bfb17d2417bdc495646f68f9d7ae95f908be4d25429d5906782a1faf196e903->leave($__internal_9bfb17d2417bdc495646f68f9d7ae95f908be4d25429d5906782a1faf196e903_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  188 => 80,  180 => 75,  175 => 73,  171 => 71,  165 => 69,  163 => 68,  158 => 66,  149 => 60,  145 => 59,  135 => 52,  131 => 51,  121 => 44,  117 => 43,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  62 => 9,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EloboostedFrontoffice/Default/Layout.html.twig' %}

{% block main %}
    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"></script>
    <link href=\"{{ asset('plugins/owl-carousel/owl.carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.css') }}\" rel=\"stylesheet\">

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Store</a></li>
                        <li class=\"active\">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<section class=\"elements bg-white padding-top-40 padding-bottom-50\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
    {{ form_start(edit_form) }}
                    {{ form_widget(edit_form.libelleProduit) }}<br>
                    {{ form_widget(edit_form.marqueProduit) }}<br>
                    {{ form_widget(edit_form.prixProduit) }}<br>
                    {{ form_widget(edit_form.etat) }}<br>
                    {{ form_widget(edit_form.idCategorieProd) }}<br>
                    <div class=\"form-group input-icon-left\">
                    {{ form_widget(edit_form.imgProduit) }}
                        <script>\$('#{{ edit_form.imgProduit.vars.id }}').filestyle({
                                buttonName: 'btn-success',
                                buttonText: ' Choose an image'
                            });</script>

                    </div>
                    <div class=\"form-group input-icon-left\">
                    {{ form_widget(edit_form.imageProduit2) }}
                    <script>\$('#{{ edit_form.imageProduit2.vars.id }}').filestyle({
                            buttonName: 'btn-success',
                            buttonText: ' Choose an image'
                        });</script>

                </div>
                    <div class=\"form-group input-icon-left\">
                    {{ form_widget(edit_form.imageProduit3) }}
                <script>\$('#{{ edit_form.imageProduit3.vars.id }}').filestyle({
                        buttonName: 'btn-success',
                        buttonText: ' Choose an image'
                    });</script>

            </div>
                    {{ form_widget(edit_form.descriptionProduit) }}<br>
                    <div class=\"form-group\">
                        {% spaceless %}
                            {{ form_widget(edit_form.captcha) }}
                        {% endspaceless %}
                    </div>
                    <div class=\"text-center margin-top-30\">
                    {{ form_widget(edit_form.Valider) }}
                    </div>
    {{ form_end(edit_form) }}
        </div>
    </div>
        </div>
    </div>
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
</section>
{% endblock %}
", "EloboostedFrontofficeBundle:tproduit:edit.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tproduit/edit.html.twig");
    }
}

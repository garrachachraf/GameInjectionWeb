<?php

/* @EloboostedFrontoffice/tproduit/edit.html.twig */
class __TwigTemplate_a49c8660da3f7d5dddc7aea9298e1f0b38cbcc966fd40d3bcfbd22880a8b2118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "@EloboostedFrontoffice/tproduit/edit.html.twig", 1);
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
        $__internal_cf554fedf394689f442920ba729721bd7799efeac76d86945810d1844fb4ea38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf554fedf394689f442920ba729721bd7799efeac76d86945810d1844fb4ea38->enter($__internal_cf554fedf394689f442920ba729721bd7799efeac76d86945810d1844fb4ea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/edit.html.twig"));

        $__internal_7f8e084ad8cb604e193b22d5747bd213c9bca3abd9275c16e727002d4d985efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8e084ad8cb604e193b22d5747bd213c9bca3abd9275c16e727002d4d985efa->enter($__internal_7f8e084ad8cb604e193b22d5747bd213c9bca3abd9275c16e727002d4d985efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf554fedf394689f442920ba729721bd7799efeac76d86945810d1844fb4ea38->leave($__internal_cf554fedf394689f442920ba729721bd7799efeac76d86945810d1844fb4ea38_prof);

        
        $__internal_7f8e084ad8cb604e193b22d5747bd213c9bca3abd9275c16e727002d4d985efa->leave($__internal_7f8e084ad8cb604e193b22d5747bd213c9bca3abd9275c16e727002d4d985efa_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1a8d0d76ec656a7735e757d2de1301f43d606519a6fbaf3bd0d2338eb942f9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8d0d76ec656a7735e757d2de1301f43d606519a6fbaf3bd0d2338eb942f9bf->enter($__internal_1a8d0d76ec656a7735e757d2de1301f43d606519a6fbaf3bd0d2338eb942f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9fd57c6a3d2baf31f234aa44d500978ae54b7906e8050985403ccd6b6b81093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd57c6a3d2baf31f234aa44d500978ae54b7906e8050985403ccd6b6b81093d->enter($__internal_9fd57c6a3d2baf31f234aa44d500978ae54b7906e8050985403ccd6b6b81093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelleProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marqueProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prixProduit", array()), 'widget');
        echo "<br>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo "<br>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idCategorieProd", array()), 'widget');
        echo "<br>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imgProduit", array()), 'widget');
        echo "
                        <script>\$('#";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imgProduit", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                                buttonName: 'btn-success',
                                buttonText: ' Choose an image'
                            });</script>

                    </div>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageProduit2", array()), 'widget');
        echo "
                    <script>\$('#";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageProduit2", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                            buttonName: 'btn-success',
                            buttonText: ' Choose an image'
                        });</script>

                </div>
                    <div class=\"form-group input-icon-left\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageProduit3", array()), 'widget');
        echo "
                <script>\$('#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageProduit3", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                        buttonName: 'btn-success',
                        buttonText: ' Choose an image'
                    });</script>

            </div>
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descriptionProduit", array()), 'widget');
        echo "<br>
                    <div class=\"form-group\">
                        ";
        // line 68
        ob_start();
        // line 69
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "captcha", array()), 'widget');
        echo "
                        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 71
        echo "                    </div>
                    <div class=\"text-center margin-top-30\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", array()), 'widget');
        echo "
                    </div>
    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_9fd57c6a3d2baf31f234aa44d500978ae54b7906e8050985403ccd6b6b81093d->leave($__internal_9fd57c6a3d2baf31f234aa44d500978ae54b7906e8050985403ccd6b6b81093d_prof);

        
        $__internal_1a8d0d76ec656a7735e757d2de1301f43d606519a6fbaf3bd0d2338eb942f9bf->leave($__internal_1a8d0d76ec656a7735e757d2de1301f43d606519a6fbaf3bd0d2338eb942f9bf_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tproduit/edit.html.twig";
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
", "@EloboostedFrontoffice/tproduit/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tproduit\\edit.html.twig");
    }
}

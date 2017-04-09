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
        $__internal_96c92d66e83b2cc676a709afe8dd80f16d5a55b0133b45eec2a839d315e377a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c92d66e83b2cc676a709afe8dd80f16d5a55b0133b45eec2a839d315e377a4->enter($__internal_96c92d66e83b2cc676a709afe8dd80f16d5a55b0133b45eec2a839d315e377a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/edit.html.twig"));

        $__internal_4f61f59c7e2a49591144c46ab70103eb81d0fbbce2075006e2f9407ad95bd40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f61f59c7e2a49591144c46ab70103eb81d0fbbce2075006e2f9407ad95bd40c->enter($__internal_4f61f59c7e2a49591144c46ab70103eb81d0fbbce2075006e2f9407ad95bd40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c92d66e83b2cc676a709afe8dd80f16d5a55b0133b45eec2a839d315e377a4->leave($__internal_96c92d66e83b2cc676a709afe8dd80f16d5a55b0133b45eec2a839d315e377a4_prof);

        
        $__internal_4f61f59c7e2a49591144c46ab70103eb81d0fbbce2075006e2f9407ad95bd40c->leave($__internal_4f61f59c7e2a49591144c46ab70103eb81d0fbbce2075006e2f9407ad95bd40c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a99fbc19fbe722cad77ccdc25a45b3c52d44825bd8d89e46f9abb667cc9e5557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99fbc19fbe722cad77ccdc25a45b3c52d44825bd8d89e46f9abb667cc9e5557->enter($__internal_a99fbc19fbe722cad77ccdc25a45b3c52d44825bd8d89e46f9abb667cc9e5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c7060f21b966dff3fc96d6ae4d6c5c53e3cbccdd183dffc2e426c79e05537108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7060f21b966dff3fc96d6ae4d6c5c53e3cbccdd183dffc2e426c79e05537108->enter($__internal_c7060f21b966dff3fc96d6ae4d6c5c53e3cbccdd183dffc2e426c79e05537108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c7060f21b966dff3fc96d6ae4d6c5c53e3cbccdd183dffc2e426c79e05537108->leave($__internal_c7060f21b966dff3fc96d6ae4d6c5c53e3cbccdd183dffc2e426c79e05537108_prof);

        
        $__internal_a99fbc19fbe722cad77ccdc25a45b3c52d44825bd8d89e46f9abb667cc9e5557->leave($__internal_a99fbc19fbe722cad77ccdc25a45b3c52d44825bd8d89e46f9abb667cc9e5557_prof);

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

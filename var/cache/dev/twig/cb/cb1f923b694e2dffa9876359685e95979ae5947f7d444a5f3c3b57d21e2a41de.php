<?php

/* EloboostedFrontofficeBundle:tproduit:new.html.twig */
class __TwigTemplate_e18cea0302244d6bc14751120634c267ce25dac489abf55421ea87dad82faef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tproduit:new.html.twig", 1);
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
        $__internal_477e366345ea45a3d477c8c40716339db6902652b865e88803aa516a113ff8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477e366345ea45a3d477c8c40716339db6902652b865e88803aa516a113ff8f9->enter($__internal_477e366345ea45a3d477c8c40716339db6902652b865e88803aa516a113ff8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:new.html.twig"));

        $__internal_343aec2a15cc20aab9d394196372873b10c71a66ecc0a441fd5935c83c147729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343aec2a15cc20aab9d394196372873b10c71a66ecc0a441fd5935c83c147729->enter($__internal_343aec2a15cc20aab9d394196372873b10c71a66ecc0a441fd5935c83c147729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477e366345ea45a3d477c8c40716339db6902652b865e88803aa516a113ff8f9->leave($__internal_477e366345ea45a3d477c8c40716339db6902652b865e88803aa516a113ff8f9_prof);

        
        $__internal_343aec2a15cc20aab9d394196372873b10c71a66ecc0a441fd5935c83c147729->leave($__internal_343aec2a15cc20aab9d394196372873b10c71a66ecc0a441fd5935c83c147729_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_92c84084fc6bb24438ddafd7d7cb52a3947a4010e32f699ba479a42be6cc4443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c84084fc6bb24438ddafd7d7cb52a3947a4010e32f699ba479a42be6cc4443->enter($__internal_92c84084fc6bb24438ddafd7d7cb52a3947a4010e32f699ba479a42be6cc4443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3d5484972b00227d375b6be14ecf89f6d823dbb151c337e31e75a02fcc1f6e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5484972b00227d375b6be14ecf89f6d823dbb151c337e31e75a02fcc1f6e94->enter($__internal_3d5484972b00227d375b6be14ecf89f6d823dbb151c337e31e75a02fcc1f6e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        // line 10
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
                        <li class=\"active\">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-40 padding-bottom-50\" id=\"body\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">

                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleProduit", array()), 'widget');
        echo "<br>
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marqueProduit", array()), 'widget');
        echo "<br>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixProduit", array()), 'widget');
        echo "<br>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorieProd", array()), 'widget');
        echo "<br>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "<br>

                        <div class=\"form-group input-icon-left\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imgProduit", array()), 'widget');
        echo "
                            <script>\$('#";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imgProduit", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                                    buttonName: 'btn-success ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imgProduit", array()), "vars", array()), "name", array()), "html", null, true);
        echo "',
                                    buttonText: ' Choose an image'
                                });</script>

                        </div>
                        <div class=\"form-group input-icon-left\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageProduit2", array()), 'widget');
        echo "
                            <script>\$('#";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageProduit2", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                                    buttonName: 'btn-success ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageProduit2", array()), "vars", array()), "name", array()), "html", null, true);
        echo "',
                                    buttonText: ' Choose an image'
                                });</script>
                        </div>
                        <div class=\"form-group input-icon-left\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageProduit3", array()), 'widget');
        echo "
                            <script>\$('#";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageProduit3", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').filestyle({
                                    buttonName: 'btn-success',
                                    buttonText: ' Choose an image'
                                });</script>
                        </div>
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionProduit", array()), 'widget');
        echo "<br>
                        <div class=\"text-center margin-top-30\">
                            ";
        // line 69
        ob_start();
        // line 70
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'widget');
        echo "
                            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 72
        echo "                        </div>
                        <div class=\"text-center margin-top-30\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget');
        echo "
                        </div>
                        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                </div>
                <div class=\"col-lg-5 height-300\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/content/contact.jpg"), "html", null, true);
        echo "\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
                </div>

            </div>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
        <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
        <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modal.js\"></script>
        <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal.css\" rel=\"stylesheet\">
        <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css\" rel=\"stylesheet\">
        <script>
            \$(function(){

                \$.fn.modal.defaults.spinner = \$.fn.modalmanager.defaults.spinner =
                    '<div class=\"loading-spinner\" style=\"width: 200px; margin-left: -100px;\">' +
                    '<div class=\"progress progress-striped active\">' +
                    '<div class=\"progress-bar\" style=\"width: 100%;\"></div>' +
                    '</div>' +
                    '</div>';

                \$.fn.modalmanager.defaults.resize = true;

                \$('[data-source]').each(function(){
                    var \$this = \$(this),
                        \$source = \$(\$this.data('source'));

                    var text = [];
                    \$source.each(function(){
                        var \$s = \$(this);
                        if (\$s.attr('type') == 'text/javascript'){
                            text.push(\$s.html().replace(/(\\n)*/, ''));
                        } else {
                            text.push(\$s.clone().wrap('<div>').parent().html());
                        }
                    });

                    \$this.text(text.join('\\n\\n').replace(/\\t/g, '    '));
                });

                prettyPrint();
            });
        </script>
        <script  type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").click(function(){
                    \$('body').modalmanager('loading');
                });
            });
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>
    </section>

";
        
        $__internal_3d5484972b00227d375b6be14ecf89f6d823dbb151c337e31e75a02fcc1f6e94->leave($__internal_3d5484972b00227d375b6be14ecf89f6d823dbb151c337e31e75a02fcc1f6e94_prof);

        
        $__internal_92c84084fc6bb24438ddafd7d7cb52a3947a4010e32f699ba479a42be6cc4443->leave($__internal_92c84084fc6bb24438ddafd7d7cb52a3947a4010e32f699ba479a42be6cc4443_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 127,  206 => 86,  202 => 85,  194 => 80,  187 => 76,  182 => 74,  178 => 72,  172 => 70,  170 => 69,  165 => 67,  157 => 62,  153 => 61,  145 => 56,  141 => 55,  137 => 54,  128 => 48,  124 => 47,  120 => 46,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  63 => 10,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                        <li class=\"active\">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-40 padding-bottom-50\" id=\"body\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">

                    {{ form_start(form) }}
                        {{ form_widget(form.libelleProduit) }}<br>
                        {{ form_widget(form.marqueProduit) }}<br>
                        {{ form_widget(form.prixProduit) }}<br>
                        {{ form_widget(form.idCategorieProd) }}<br>
                        {{ form_widget(form.etat) }}<br>

                        <div class=\"form-group input-icon-left\">
                        {{ form_widget(form.imgProduit) }}
                            <script>\$('#{{ form.imgProduit.vars.id }}').filestyle({
                                    buttonName: 'btn-success {{ form.imgProduit.vars.name }}',
                                    buttonText: ' Choose an image'
                                });</script>

                        </div>
                        <div class=\"form-group input-icon-left\">
                            {{ form_widget(form.imageProduit2) }}
                            <script>\$('#{{ form.imageProduit2.vars.id }}').filestyle({
                                    buttonName: 'btn-success {{ form.imageProduit2.vars.name }}',
                                    buttonText: ' Choose an image'
                                });</script>
                        </div>
                        <div class=\"form-group input-icon-left\">
                            {{ form_widget(form.imageProduit3) }}
                            <script>\$('#{{ form.imageProduit3.vars.id }}').filestyle({
                                    buttonName: 'btn-success',
                                    buttonText: ' Choose an image'
                                });</script>
                        </div>
                        {{ form_widget(form.descriptionProduit) }}<br>
                        <div class=\"text-center margin-top-30\">
                            {% spaceless %}
                                {{ form_widget(form.captcha) }}
                            {% endspaceless %}
                        </div>
                        <div class=\"text-center margin-top-30\">
                            {{ form_widget(form.Valider) }}
                        </div>
                        {{ form_end(form) }}
                </div>
                </div>
                <div class=\"col-lg-5 height-300\">
                    <img src=\"{{ asset('img/content/contact.jpg') }}\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
                </div>

            </div>
        <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
        <script src=\"{{ asset('js/core.min.js') }}\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
        <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
        <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modal.js\"></script>
        <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal.css\" rel=\"stylesheet\">
        <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css\" rel=\"stylesheet\">
        <script>
            \$(function(){

                \$.fn.modal.defaults.spinner = \$.fn.modalmanager.defaults.spinner =
                    '<div class=\"loading-spinner\" style=\"width: 200px; margin-left: -100px;\">' +
                    '<div class=\"progress progress-striped active\">' +
                    '<div class=\"progress-bar\" style=\"width: 100%;\"></div>' +
                    '</div>' +
                    '</div>';

                \$.fn.modalmanager.defaults.resize = true;

                \$('[data-source]').each(function(){
                    var \$this = \$(this),
                        \$source = \$(\$this.data('source'));

                    var text = [];
                    \$source.each(function(){
                        var \$s = \$(this);
                        if (\$s.attr('type') == 'text/javascript'){
                            text.push(\$s.html().replace(/(\\n)*/, ''));
                        } else {
                            text.push(\$s.clone().wrap('<div>').parent().html());
                        }
                    });

                    \$this.text(text.join('\\n\\n').replace(/\\t/g, '    '));
                });

                prettyPrint();
            });
        </script>
        <script  type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#{{ form.Valider.vars.id }}\").click(function(){
                    \$('body').modalmanager('loading');
                });
            });
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>
    </section>

{% endblock %}
", "EloboostedFrontofficeBundle:tproduit:new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tproduit/new.html.twig");
    }
}

<?php

/* EloboostedFrontofficeBundle:Post:addPost.html.twig */
class __TwigTemplate_03a1672cbae2d947730fe83af5acbf572e6b6b31ad1636ea147ef0a0ecfb9f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:Post:addPost.html.twig", 2);
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
        $__internal_e3bb2a33771cc213b4ab6b950891ebce318a3dd2ad861b8a826c1fa33ebac927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bb2a33771cc213b4ab6b950891ebce318a3dd2ad861b8a826c1fa33ebac927->enter($__internal_e3bb2a33771cc213b4ab6b950891ebce318a3dd2ad861b8a826c1fa33ebac927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Post:addPost.html.twig"));

        $__internal_ad486a1715c86a9887686d59a83bb36ca98fc190c90b7872be383a00d8f5bfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad486a1715c86a9887686d59a83bb36ca98fc190c90b7872be383a00d8f5bfbe->enter($__internal_ad486a1715c86a9887686d59a83bb36ca98fc190c90b7872be383a00d8f5bfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Post:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3bb2a33771cc213b4ab6b950891ebce318a3dd2ad861b8a826c1fa33ebac927->leave($__internal_e3bb2a33771cc213b4ab6b950891ebce318a3dd2ad861b8a826c1fa33ebac927_prof);

        
        $__internal_ad486a1715c86a9887686d59a83bb36ca98fc190c90b7872be383a00d8f5bfbe->leave($__internal_ad486a1715c86a9887686d59a83bb36ca98fc190c90b7872be383a00d8f5bfbe_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7333925b0ea6644b91d031aa8950c5434af4bc9471d417c6c4ed17dc6996260c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7333925b0ea6644b91d031aa8950c5434af4bc9471d417c6c4ed17dc6996260c->enter($__internal_7333925b0ea6644b91d031aa8950c5434af4bc9471d417c6c4ed17dc6996260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a3bf2ac3ec4f06f4417f5fe54b3e3576542b86873bc3efaacec94eaacbe4dfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bf2ac3ec4f06f4417f5fe54b3e3576542b86873bc3efaacec94eaacbe4dfcb->enter($__internal_a3bf2ac3ec4f06f4417f5fe54b3e3576542b86873bc3efaacec94eaacbe4dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div id=\"wrapper\">
        <section class=\"border-bottom-1 border-grey-300 padding-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ol class=\"breadcrumb\">
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"forum-new.html#\">Pages</a></li>
                            <li class=\"active\">Forums</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"bg-grey-50 padding-bottom-60\">
            <div class=\"container\">
                <div class=\"headline\">
                    <h4 class=\"no-padding-top\">New Post</h4>
                </div>

                <div class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" method=\"post\">
                            <div class=\"form-group row\">
                                <label for=\"thread\" class=\"col-md-2\">Title</label>
                                <div class=\"col-md-10\">
                                    <input type=\"text\"  required class=\"form-control\" name=\"title\" placeholder=\"Add a title\">
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label for=\"thread\" class=\"col-md-2\">Category</label>
                                <div class=\"col-md-10\">
                                    <select name=\"category\">
                                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label class=\"col-md-2\">Message</label>

                                    <div class=\"col-md-10\" >
                                        <input type=\"text\" required  class=\"form-control\" name=\"message\" placeholder=\"Add Message\" style=\"height:200px;\">
                                    </div>
                                </div>

                            <div class=\"text-center\"><input type=\"submit\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>

";
        
        $__internal_a3bf2ac3ec4f06f4417f5fe54b3e3576542b86873bc3efaacec94eaacbe4dfcb->leave($__internal_a3bf2ac3ec4f06f4417f5fe54b3e3576542b86873bc3efaacec94eaacbe4dfcb_prof);

        
        $__internal_7333925b0ea6644b91d031aa8950c5434af4bc9471d417c6c4ed17dc6996260c->leave($__internal_7333925b0ea6644b91d031aa8950c5434af4bc9471d417c6c4ed17dc6996260c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Post:addPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  90 => 40,  86 => 39,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/FrontofficeBundle/Resources/views/Products/addProduct.html.twig #}
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}
    <div id=\"wrapper\">
        <section class=\"border-bottom-1 border-grey-300 padding-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ol class=\"breadcrumb\">
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"forum-new.html#\">Pages</a></li>
                            <li class=\"active\">Forums</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"bg-grey-50 padding-bottom-60\">
            <div class=\"container\">
                <div class=\"headline\">
                    <h4 class=\"no-padding-top\">New Post</h4>
                </div>

                <div class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" method=\"post\">
                            <div class=\"form-group row\">
                                <label for=\"thread\" class=\"col-md-2\">Title</label>
                                <div class=\"col-md-10\">
                                    <input type=\"text\"  required class=\"form-control\" name=\"title\" placeholder=\"Add a title\">
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label for=\"thread\" class=\"col-md-2\">Category</label>
                                <div class=\"col-md-10\">
                                    <select name=\"category\">
                                        {% for category in category %}
                                            <option value=\"{{ category.id }}\">{{ category.nom }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label class=\"col-md-2\">Message</label>

                                    <div class=\"col-md-10\" >
                                        <input type=\"text\" required  class=\"form-control\" name=\"message\" placeholder=\"Add Message\" style=\"height:200px;\">
                                    </div>
                                </div>

                            <div class=\"text-center\"><input type=\"submit\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>

{% endblock %}
", "EloboostedFrontofficeBundle:Post:addPost.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Post/addPost.html.twig");
    }
}

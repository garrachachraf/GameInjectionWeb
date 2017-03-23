<?php

/* @EloboostedFrontoffice/Post/addPost.html.twig */
class __TwigTemplate_b74001e4d8978039b2709764bc202737444a10fb0b8f98377fd1262b63da2461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Post/addPost.html.twig", 2);
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
        $__internal_4f2854930764c1173cbe5c189c41478cb0ef47d9b27541e6c15b5bad7c9ef591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2854930764c1173cbe5c189c41478cb0ef47d9b27541e6c15b5bad7c9ef591->enter($__internal_4f2854930764c1173cbe5c189c41478cb0ef47d9b27541e6c15b5bad7c9ef591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/addPost.html.twig"));

        $__internal_a0eff6abae4eccfaab35b3c5cdfacf3b189eb38f263dac8fae5d46dec05435b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eff6abae4eccfaab35b3c5cdfacf3b189eb38f263dac8fae5d46dec05435b7->enter($__internal_a0eff6abae4eccfaab35b3c5cdfacf3b189eb38f263dac8fae5d46dec05435b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2854930764c1173cbe5c189c41478cb0ef47d9b27541e6c15b5bad7c9ef591->leave($__internal_4f2854930764c1173cbe5c189c41478cb0ef47d9b27541e6c15b5bad7c9ef591_prof);

        
        $__internal_a0eff6abae4eccfaab35b3c5cdfacf3b189eb38f263dac8fae5d46dec05435b7->leave($__internal_a0eff6abae4eccfaab35b3c5cdfacf3b189eb38f263dac8fae5d46dec05435b7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_76a52b99fbee1a9dee2a550118de99881d31d9275c7b468c974fce0e7a86d15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a52b99fbee1a9dee2a550118de99881d31d9275c7b468c974fce0e7a86d15d->enter($__internal_76a52b99fbee1a9dee2a550118de99881d31d9275c7b468c974fce0e7a86d15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3ed00c14b9e8978d041e2d8f2ce42ad5600a723171a09aa612e7327755e900f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed00c14b9e8978d041e2d8f2ce42ad5600a723171a09aa612e7327755e900f6->enter($__internal_3ed00c14b9e8978d041e2d8f2ce42ad5600a723171a09aa612e7327755e900f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_3ed00c14b9e8978d041e2d8f2ce42ad5600a723171a09aa612e7327755e900f6->leave($__internal_3ed00c14b9e8978d041e2d8f2ce42ad5600a723171a09aa612e7327755e900f6_prof);

        
        $__internal_76a52b99fbee1a9dee2a550118de99881d31d9275c7b468c974fce0e7a86d15d->leave($__internal_76a52b99fbee1a9dee2a550118de99881d31d9275c7b468c974fce0e7a86d15d_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Post/addPost.html.twig";
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
", "@EloboostedFrontoffice/Post/addPost.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\addPost.html.twig");
    }
}

<?php

/* @EloboostedFrontoffice/Post/addPost.html.twig */
class __TwigTemplate_f1ae645c1b4b92288e787e92d2d342b6b73e28d7b0884d0242da093eae010c20 extends Twig_Template
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
        $__internal_b1c69cfe33d4df889f69b3de524f5790c1c9a2c401a3e2af1eb047df40677e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c69cfe33d4df889f69b3de524f5790c1c9a2c401a3e2af1eb047df40677e82->enter($__internal_b1c69cfe33d4df889f69b3de524f5790c1c9a2c401a3e2af1eb047df40677e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/addPost.html.twig"));

        $__internal_d34eef51b247ddb17418bfea9d22e664eb67c938f28cc0a53a6e5c34f753dc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34eef51b247ddb17418bfea9d22e664eb67c938f28cc0a53a6e5c34f753dc73->enter($__internal_d34eef51b247ddb17418bfea9d22e664eb67c938f28cc0a53a6e5c34f753dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c69cfe33d4df889f69b3de524f5790c1c9a2c401a3e2af1eb047df40677e82->leave($__internal_b1c69cfe33d4df889f69b3de524f5790c1c9a2c401a3e2af1eb047df40677e82_prof);

        
        $__internal_d34eef51b247ddb17418bfea9d22e664eb67c938f28cc0a53a6e5c34f753dc73->leave($__internal_d34eef51b247ddb17418bfea9d22e664eb67c938f28cc0a53a6e5c34f753dc73_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2a397172a1d07aa4f6b67b011df5900874170ed257c6f603fc27ea4b598c11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a397172a1d07aa4f6b67b011df5900874170ed257c6f603fc27ea4b598c11c->enter($__internal_a2a397172a1d07aa4f6b67b011df5900874170ed257c6f603fc27ea4b598c11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c7e73a5baa521928177383cbd434ca82dccfe882dfe47a7a607faeedfd2c0ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e73a5baa521928177383cbd434ca82dccfe882dfe47a7a607faeedfd2c0ab2->enter($__internal_c7e73a5baa521928177383cbd434ca82dccfe882dfe47a7a607faeedfd2c0ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c7e73a5baa521928177383cbd434ca82dccfe882dfe47a7a607faeedfd2c0ab2->leave($__internal_c7e73a5baa521928177383cbd434ca82dccfe882dfe47a7a607faeedfd2c0ab2_prof);

        
        $__internal_a2a397172a1d07aa4f6b67b011df5900874170ed257c6f603fc27ea4b598c11c->leave($__internal_a2a397172a1d07aa4f6b67b011df5900874170ed257c6f603fc27ea4b598c11c_prof);

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

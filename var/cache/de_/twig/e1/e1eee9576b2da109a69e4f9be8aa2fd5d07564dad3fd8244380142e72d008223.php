<?php

/* @EloboostedFrontoffice/Products/addProduct.html.twig */
class __TwigTemplate_3d094ec01d9973ef8c078a6be9d4b4dc1abb23a4afd4c466cdaa76bace87e213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Products/addProduct.html.twig", 2);
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
        $__internal_c3def897068d4064bd688beadc23fbdc5cb226323e340189a8e0fbaa6cca35d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3def897068d4064bd688beadc23fbdc5cb226323e340189a8e0fbaa6cca35d0->enter($__internal_c3def897068d4064bd688beadc23fbdc5cb226323e340189a8e0fbaa6cca35d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Products/addProduct.html.twig"));

        $__internal_c4aaa9ee70bb1f18e836f5d402bc2f1257bd73f53c145b1c1b9f17fb6f8dc947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4aaa9ee70bb1f18e836f5d402bc2f1257bd73f53c145b1c1b9f17fb6f8dc947->enter($__internal_c4aaa9ee70bb1f18e836f5d402bc2f1257bd73f53c145b1c1b9f17fb6f8dc947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Products/addProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3def897068d4064bd688beadc23fbdc5cb226323e340189a8e0fbaa6cca35d0->leave($__internal_c3def897068d4064bd688beadc23fbdc5cb226323e340189a8e0fbaa6cca35d0_prof);

        
        $__internal_c4aaa9ee70bb1f18e836f5d402bc2f1257bd73f53c145b1c1b9f17fb6f8dc947->leave($__internal_c4aaa9ee70bb1f18e836f5d402bc2f1257bd73f53c145b1c1b9f17fb6f8dc947_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ce5e05857408b45ee4afff8279a91f24c219d2cec58191d9f7e0ceb2e817cec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5e05857408b45ee4afff8279a91f24c219d2cec58191d9f7e0ceb2e817cec2->enter($__internal_ce5e05857408b45ee4afff8279a91f24c219d2cec58191d9f7e0ceb2e817cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c9053ddf56b9cf6338fb6b72fb4a9efb3be38f00aa3f20f7f7d396625b486411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9053ddf56b9cf6338fb6b72fb4a9efb3be38f00aa3f20f7f7d396625b486411->enter($__internal_c9053ddf56b9cf6338fb6b72fb4a9efb3be38f00aa3f20f7f7d396625b486411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"> </script>


    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

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
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"title\">
                        <h3> Add New Product</h3>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Product Name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Mark\">
                    </div>



                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" placeholder=\"price\">
                        </div>

                        <div class=\"form-group \">
                            <select id=\"modal-select\" class=\"form-control input-md\">

                                <option value=\"sell\">sell</option>
                                <option value=\"exchange\">exchange</option>



                            </select>
                        </div>
                        <div class=\"form-group \">
                            <select id=\"modal-select\" class=\"form-control input-md\">
                                <option value=\"\" disabled selected>Categorie</option>
                                <option value=\"sell\">sell</option>
                                <option value=\"exchange\">exchange</option>



                            </select>
                        </div>


                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"BSbtnsuccess\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess1\" name=\"BSbtnsuccess1\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess1').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess2\" name=\"BSbtnsuccess2\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess2').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" rows=\"7\" placeholder=\"Message\"></textarea>
                    </div>
                    <div class=\"text-center margin-top-30\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Add Product</button>
                    </div>
                </div>
                <div class=\"col-lg-5 height-300\">
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/content/contact.jpg"), "html", null, true);
        echo "\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
            </div>

        </div>
    </section>


";
        
        $__internal_c9053ddf56b9cf6338fb6b72fb4a9efb3be38f00aa3f20f7f7d396625b486411->leave($__internal_c9053ddf56b9cf6338fb6b72fb4a9efb3be38f00aa3f20f7f7d396625b486411_prof);

        
        $__internal_ce5e05857408b45ee4afff8279a91f24c219d2cec58191d9f7e0ceb2e817cec2->leave($__internal_ce5e05857408b45ee4afff8279a91f24c219d2cec58191d9f7e0ceb2e817cec2_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Products/addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 115,  56 => 9,  49 => 4,  40 => 3,  11 => 2,);
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

    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"> </script>


    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

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
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"title\">
                        <h3> Add New Product</h3>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Product Name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Mark\">
                    </div>



                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" placeholder=\"price\">
                        </div>

                        <div class=\"form-group \">
                            <select id=\"modal-select\" class=\"form-control input-md\">

                                <option value=\"sell\">sell</option>
                                <option value=\"exchange\">exchange</option>



                            </select>
                        </div>
                        <div class=\"form-group \">
                            <select id=\"modal-select\" class=\"form-control input-md\">
                                <option value=\"\" disabled selected>Categorie</option>
                                <option value=\"sell\">sell</option>
                                <option value=\"exchange\">exchange</option>



                            </select>
                        </div>


                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"BSbtnsuccess\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess1\" name=\"BSbtnsuccess1\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess1').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess2\" name=\"BSbtnsuccess2\" class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess2').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" rows=\"7\" placeholder=\"Message\"></textarea>
                    </div>
                    <div class=\"text-center margin-top-30\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Add Product</button>
                    </div>
                </div>
                <div class=\"col-lg-5 height-300\">
                    <img src=\"{{ asset('img/content/contact.jpg') }}\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
            </div>

        </div>
    </section>


{% endblock %}
", "@EloboostedFrontoffice/Products/addProduct.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Products\\addProduct.html.twig");
    }
}

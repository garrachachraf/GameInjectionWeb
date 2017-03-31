<?php

/* base.html.twig */
class __TwigTemplate_7c8de93789d51c37c9c15448aa19b651df2fbb142d0003c6e02b7beef4307346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45303fd7e02932ff624879270b0eee8f5ed66d0ae23a9f265ad5397c1bed6d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45303fd7e02932ff624879270b0eee8f5ed66d0ae23a9f265ad5397c1bed6d11->enter($__internal_45303fd7e02932ff624879270b0eee8f5ed66d0ae23a9f265ad5397c1bed6d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_547d84e2d25a53d76f07cdc2cc0929d09e34092420b2c310118b701deaf4f239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547d84e2d25a53d76f07cdc2cc0929d09e34092420b2c310118b701deaf4f239->enter($__internal_547d84e2d25a53d76f07cdc2cc0929d09e34092420b2c310118b701deaf4f239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_45303fd7e02932ff624879270b0eee8f5ed66d0ae23a9f265ad5397c1bed6d11->leave($__internal_45303fd7e02932ff624879270b0eee8f5ed66d0ae23a9f265ad5397c1bed6d11_prof);

        
        $__internal_547d84e2d25a53d76f07cdc2cc0929d09e34092420b2c310118b701deaf4f239->leave($__internal_547d84e2d25a53d76f07cdc2cc0929d09e34092420b2c310118b701deaf4f239_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07173b79ec062f3b4b2bafc95fe8c893f5ae55c08db4dbe1b2db4144f534ba11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07173b79ec062f3b4b2bafc95fe8c893f5ae55c08db4dbe1b2db4144f534ba11->enter($__internal_07173b79ec062f3b4b2bafc95fe8c893f5ae55c08db4dbe1b2db4144f534ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_960ec8b40135ebe0d894eebaf30f3412a3cfc454eba965167c1539b1c5228e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960ec8b40135ebe0d894eebaf30f3412a3cfc454eba965167c1539b1c5228e48->enter($__internal_960ec8b40135ebe0d894eebaf30f3412a3cfc454eba965167c1539b1c5228e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_960ec8b40135ebe0d894eebaf30f3412a3cfc454eba965167c1539b1c5228e48->leave($__internal_960ec8b40135ebe0d894eebaf30f3412a3cfc454eba965167c1539b1c5228e48_prof);

        
        $__internal_07173b79ec062f3b4b2bafc95fe8c893f5ae55c08db4dbe1b2db4144f534ba11->leave($__internal_07173b79ec062f3b4b2bafc95fe8c893f5ae55c08db4dbe1b2db4144f534ba11_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37dd713e7f1ebd99348ab40d414739000b2593776d9aa05ce23c23ee72895e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dd713e7f1ebd99348ab40d414739000b2593776d9aa05ce23c23ee72895e8f->enter($__internal_37dd713e7f1ebd99348ab40d414739000b2593776d9aa05ce23c23ee72895e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5b9acaaa19977533c6235c5ceb03601fd5cfb9c1d1b8df6b24e2c435edf1a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b9acaaa19977533c6235c5ceb03601fd5cfb9c1d1b8df6b24e2c435edf1a89->enter($__internal_d5b9acaaa19977533c6235c5ceb03601fd5cfb9c1d1b8df6b24e2c435edf1a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5b9acaaa19977533c6235c5ceb03601fd5cfb9c1d1b8df6b24e2c435edf1a89->leave($__internal_d5b9acaaa19977533c6235c5ceb03601fd5cfb9c1d1b8df6b24e2c435edf1a89_prof);

        
        $__internal_37dd713e7f1ebd99348ab40d414739000b2593776d9aa05ce23c23ee72895e8f->leave($__internal_37dd713e7f1ebd99348ab40d414739000b2593776d9aa05ce23c23ee72895e8f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_249a70eb9d67c2b7ab8c29ba7322866dcf2f7335f879561f6b32508b64c666b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249a70eb9d67c2b7ab8c29ba7322866dcf2f7335f879561f6b32508b64c666b7->enter($__internal_249a70eb9d67c2b7ab8c29ba7322866dcf2f7335f879561f6b32508b64c666b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c667e71794927501a29a053976e589395a02378a5dc4efbea0b50adb93551648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c667e71794927501a29a053976e589395a02378a5dc4efbea0b50adb93551648->enter($__internal_c667e71794927501a29a053976e589395a02378a5dc4efbea0b50adb93551648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c667e71794927501a29a053976e589395a02378a5dc4efbea0b50adb93551648->leave($__internal_c667e71794927501a29a053976e589395a02378a5dc4efbea0b50adb93551648_prof);

        
        $__internal_249a70eb9d67c2b7ab8c29ba7322866dcf2f7335f879561f6b32508b64c666b7->leave($__internal_249a70eb9d67c2b7ab8c29ba7322866dcf2f7335f879561f6b32508b64c666b7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c417bc9c80c348c7ad4cbdec08fdf7a3935745cacb4c33647f04ef86a7b7c83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c417bc9c80c348c7ad4cbdec08fdf7a3935745cacb4c33647f04ef86a7b7c83a->enter($__internal_c417bc9c80c348c7ad4cbdec08fdf7a3935745cacb4c33647f04ef86a7b7c83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f13bcf3cad4a6ad4777ea3a4039e21d812a2a0ce95b4d51d8333937201c0ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f13bcf3cad4a6ad4777ea3a4039e21d812a2a0ce95b4d51d8333937201c0ad7->enter($__internal_8f13bcf3cad4a6ad4777ea3a4039e21d812a2a0ce95b4d51d8333937201c0ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f13bcf3cad4a6ad4777ea3a4039e21d812a2a0ce95b4d51d8333937201c0ad7->leave($__internal_8f13bcf3cad4a6ad4777ea3a4039e21d812a2a0ce95b4d51d8333937201c0ad7_prof);

        
        $__internal_c417bc9c80c348c7ad4cbdec08fdf7a3935745cacb4c33647f04ef86a7b7c83a->leave($__internal_c417bc9c80c348c7ad4cbdec08fdf7a3935745cacb4c33647f04ef86a7b7c83a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\base.html.twig");
    }
}

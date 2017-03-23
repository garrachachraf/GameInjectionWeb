<?php

/* base.html.twig */
class __TwigTemplate_1b112a055c5b143fd2623b5a94eec0695d0bce6ea8c61ae5098d2a71db46ffc3 extends Twig_Template
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
        $__internal_dc4958c4416bc21b9a24b51fd1c6f1e6c2378271c4d3b35d9536b18da9009f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4958c4416bc21b9a24b51fd1c6f1e6c2378271c4d3b35d9536b18da9009f69->enter($__internal_dc4958c4416bc21b9a24b51fd1c6f1e6c2378271c4d3b35d9536b18da9009f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_322936878f7430b34958c8019c36bc61a8c45509da7817eb385573c10c6bad3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322936878f7430b34958c8019c36bc61a8c45509da7817eb385573c10c6bad3d->enter($__internal_322936878f7430b34958c8019c36bc61a8c45509da7817eb385573c10c6bad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dc4958c4416bc21b9a24b51fd1c6f1e6c2378271c4d3b35d9536b18da9009f69->leave($__internal_dc4958c4416bc21b9a24b51fd1c6f1e6c2378271c4d3b35d9536b18da9009f69_prof);

        
        $__internal_322936878f7430b34958c8019c36bc61a8c45509da7817eb385573c10c6bad3d->leave($__internal_322936878f7430b34958c8019c36bc61a8c45509da7817eb385573c10c6bad3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0809d7c642bc2642b4ae09e1632a46a29c1591ba77602712b93ee7c9e4740249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0809d7c642bc2642b4ae09e1632a46a29c1591ba77602712b93ee7c9e4740249->enter($__internal_0809d7c642bc2642b4ae09e1632a46a29c1591ba77602712b93ee7c9e4740249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7381bd3aff80c416c829b201820fef186ef82b6654e807b78f81b24f9dada78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7381bd3aff80c416c829b201820fef186ef82b6654e807b78f81b24f9dada78e->enter($__internal_7381bd3aff80c416c829b201820fef186ef82b6654e807b78f81b24f9dada78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7381bd3aff80c416c829b201820fef186ef82b6654e807b78f81b24f9dada78e->leave($__internal_7381bd3aff80c416c829b201820fef186ef82b6654e807b78f81b24f9dada78e_prof);

        
        $__internal_0809d7c642bc2642b4ae09e1632a46a29c1591ba77602712b93ee7c9e4740249->leave($__internal_0809d7c642bc2642b4ae09e1632a46a29c1591ba77602712b93ee7c9e4740249_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1749a2b56e0df63fa2ff3d746212c334bed30cbff0a7987bd3b097b977cbc0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1749a2b56e0df63fa2ff3d746212c334bed30cbff0a7987bd3b097b977cbc0ed->enter($__internal_1749a2b56e0df63fa2ff3d746212c334bed30cbff0a7987bd3b097b977cbc0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9062dddcbd7ad01e82c0f668cf186048b412724ed7998cbade170c54d8f29bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9062dddcbd7ad01e82c0f668cf186048b412724ed7998cbade170c54d8f29bdb->enter($__internal_9062dddcbd7ad01e82c0f668cf186048b412724ed7998cbade170c54d8f29bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9062dddcbd7ad01e82c0f668cf186048b412724ed7998cbade170c54d8f29bdb->leave($__internal_9062dddcbd7ad01e82c0f668cf186048b412724ed7998cbade170c54d8f29bdb_prof);

        
        $__internal_1749a2b56e0df63fa2ff3d746212c334bed30cbff0a7987bd3b097b977cbc0ed->leave($__internal_1749a2b56e0df63fa2ff3d746212c334bed30cbff0a7987bd3b097b977cbc0ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b786e22958c32ab452501e9838ce47388005734af7aed29fe667b952f06094e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b786e22958c32ab452501e9838ce47388005734af7aed29fe667b952f06094e5->enter($__internal_b786e22958c32ab452501e9838ce47388005734af7aed29fe667b952f06094e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ee581429a4306934923dd3084f7501d9656773bd858378d5bc01a0ef8a242f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee581429a4306934923dd3084f7501d9656773bd858378d5bc01a0ef8a242f9->enter($__internal_7ee581429a4306934923dd3084f7501d9656773bd858378d5bc01a0ef8a242f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ee581429a4306934923dd3084f7501d9656773bd858378d5bc01a0ef8a242f9->leave($__internal_7ee581429a4306934923dd3084f7501d9656773bd858378d5bc01a0ef8a242f9_prof);

        
        $__internal_b786e22958c32ab452501e9838ce47388005734af7aed29fe667b952f06094e5->leave($__internal_b786e22958c32ab452501e9838ce47388005734af7aed29fe667b952f06094e5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23ffa842528735d00329c6a6c84ddc6e31eac58851ccb29d8170f8f0ecc40fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ffa842528735d00329c6a6c84ddc6e31eac58851ccb29d8170f8f0ecc40fb9->enter($__internal_23ffa842528735d00329c6a6c84ddc6e31eac58851ccb29d8170f8f0ecc40fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73f297de11c9c1ea17be9e7f2b6401e9c7aef4fbf78331c6953719aedf6d43ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f297de11c9c1ea17be9e7f2b6401e9c7aef4fbf78331c6953719aedf6d43ed->enter($__internal_73f297de11c9c1ea17be9e7f2b6401e9c7aef4fbf78331c6953719aedf6d43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73f297de11c9c1ea17be9e7f2b6401e9c7aef4fbf78331c6953719aedf6d43ed->leave($__internal_73f297de11c9c1ea17be9e7f2b6401e9c7aef4fbf78331c6953719aedf6d43ed_prof);

        
        $__internal_23ffa842528735d00329c6a6c84ddc6e31eac58851ccb29d8170f8f0ecc40fb9->leave($__internal_23ffa842528735d00329c6a6c84ddc6e31eac58851ccb29d8170f8f0ecc40fb9_prof);

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

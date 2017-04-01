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
        $__internal_66f5e8f83263ba8df9f2310b4f9d93bb44b8480103e36b8e574703d39d50472a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f5e8f83263ba8df9f2310b4f9d93bb44b8480103e36b8e574703d39d50472a->enter($__internal_66f5e8f83263ba8df9f2310b4f9d93bb44b8480103e36b8e574703d39d50472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_598021c37dd101288ae266425c6916efbf6b36571ccc43febd811eb635707bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598021c37dd101288ae266425c6916efbf6b36571ccc43febd811eb635707bca->enter($__internal_598021c37dd101288ae266425c6916efbf6b36571ccc43febd811eb635707bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_66f5e8f83263ba8df9f2310b4f9d93bb44b8480103e36b8e574703d39d50472a->leave($__internal_66f5e8f83263ba8df9f2310b4f9d93bb44b8480103e36b8e574703d39d50472a_prof);

        
        $__internal_598021c37dd101288ae266425c6916efbf6b36571ccc43febd811eb635707bca->leave($__internal_598021c37dd101288ae266425c6916efbf6b36571ccc43febd811eb635707bca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5acfcea50eb7f163ad614ea407a4535d2d861570ddab59f2d7de65881c5d8227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acfcea50eb7f163ad614ea407a4535d2d861570ddab59f2d7de65881c5d8227->enter($__internal_5acfcea50eb7f163ad614ea407a4535d2d861570ddab59f2d7de65881c5d8227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50349fe0fa67d76e394b9f10a4ec334d23954867a6fdca4062654927d2acab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50349fe0fa67d76e394b9f10a4ec334d23954867a6fdca4062654927d2acab37->enter($__internal_50349fe0fa67d76e394b9f10a4ec334d23954867a6fdca4062654927d2acab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50349fe0fa67d76e394b9f10a4ec334d23954867a6fdca4062654927d2acab37->leave($__internal_50349fe0fa67d76e394b9f10a4ec334d23954867a6fdca4062654927d2acab37_prof);

        
        $__internal_5acfcea50eb7f163ad614ea407a4535d2d861570ddab59f2d7de65881c5d8227->leave($__internal_5acfcea50eb7f163ad614ea407a4535d2d861570ddab59f2d7de65881c5d8227_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b1e0988ee99c8689245b0c9a1f07bdf7165301d19651582e3320d6cd930ede0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1e0988ee99c8689245b0c9a1f07bdf7165301d19651582e3320d6cd930ede0->enter($__internal_8b1e0988ee99c8689245b0c9a1f07bdf7165301d19651582e3320d6cd930ede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08b0dd47ef2b014f6de86fb88b49a1687eff0bc81586cdcc7573ab97f5632fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b0dd47ef2b014f6de86fb88b49a1687eff0bc81586cdcc7573ab97f5632fe1->enter($__internal_08b0dd47ef2b014f6de86fb88b49a1687eff0bc81586cdcc7573ab97f5632fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08b0dd47ef2b014f6de86fb88b49a1687eff0bc81586cdcc7573ab97f5632fe1->leave($__internal_08b0dd47ef2b014f6de86fb88b49a1687eff0bc81586cdcc7573ab97f5632fe1_prof);

        
        $__internal_8b1e0988ee99c8689245b0c9a1f07bdf7165301d19651582e3320d6cd930ede0->leave($__internal_8b1e0988ee99c8689245b0c9a1f07bdf7165301d19651582e3320d6cd930ede0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec61b59a7942f17c1cf4d033733c202ee9779a8ece297fd6afc951df3088b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec61b59a7942f17c1cf4d033733c202ee9779a8ece297fd6afc951df3088b0b->enter($__internal_dec61b59a7942f17c1cf4d033733c202ee9779a8ece297fd6afc951df3088b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eb8fcc17ffba87a5f539c341470e86f5889fa096c204bd35b99632ec5dd1ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb8fcc17ffba87a5f539c341470e86f5889fa096c204bd35b99632ec5dd1ea9->enter($__internal_7eb8fcc17ffba87a5f539c341470e86f5889fa096c204bd35b99632ec5dd1ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7eb8fcc17ffba87a5f539c341470e86f5889fa096c204bd35b99632ec5dd1ea9->leave($__internal_7eb8fcc17ffba87a5f539c341470e86f5889fa096c204bd35b99632ec5dd1ea9_prof);

        
        $__internal_dec61b59a7942f17c1cf4d033733c202ee9779a8ece297fd6afc951df3088b0b->leave($__internal_dec61b59a7942f17c1cf4d033733c202ee9779a8ece297fd6afc951df3088b0b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5908fdffa7f7879a5d787a8ba5c89c9640e55506569f511e52d1b6b89a9664dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5908fdffa7f7879a5d787a8ba5c89c9640e55506569f511e52d1b6b89a9664dc->enter($__internal_5908fdffa7f7879a5d787a8ba5c89c9640e55506569f511e52d1b6b89a9664dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e5ae17856dedbf1dcc46b56909eae9c2f2ce46672cbf34a6d6135cdfdb5f201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5ae17856dedbf1dcc46b56909eae9c2f2ce46672cbf34a6d6135cdfdb5f201->enter($__internal_6e5ae17856dedbf1dcc46b56909eae9c2f2ce46672cbf34a6d6135cdfdb5f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e5ae17856dedbf1dcc46b56909eae9c2f2ce46672cbf34a6d6135cdfdb5f201->leave($__internal_6e5ae17856dedbf1dcc46b56909eae9c2f2ce46672cbf34a6d6135cdfdb5f201_prof);

        
        $__internal_5908fdffa7f7879a5d787a8ba5c89c9640e55506569f511e52d1b6b89a9664dc->leave($__internal_5908fdffa7f7879a5d787a8ba5c89c9640e55506569f511e52d1b6b89a9664dc_prof);

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

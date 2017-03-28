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
        $__internal_769c89813227adcd4ff9732ccc508ed4f5e07bd93fb52bba3e6169cc087df5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769c89813227adcd4ff9732ccc508ed4f5e07bd93fb52bba3e6169cc087df5d0->enter($__internal_769c89813227adcd4ff9732ccc508ed4f5e07bd93fb52bba3e6169cc087df5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_06dc6959aff05dc2f9653375aea7ace5fab9b940605b15093412bcd37bb9e006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dc6959aff05dc2f9653375aea7ace5fab9b940605b15093412bcd37bb9e006->enter($__internal_06dc6959aff05dc2f9653375aea7ace5fab9b940605b15093412bcd37bb9e006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_769c89813227adcd4ff9732ccc508ed4f5e07bd93fb52bba3e6169cc087df5d0->leave($__internal_769c89813227adcd4ff9732ccc508ed4f5e07bd93fb52bba3e6169cc087df5d0_prof);

        
        $__internal_06dc6959aff05dc2f9653375aea7ace5fab9b940605b15093412bcd37bb9e006->leave($__internal_06dc6959aff05dc2f9653375aea7ace5fab9b940605b15093412bcd37bb9e006_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f900af8d86c5b3f57479ec2aa959db58a3704b298d934f06934f9e0ffeed32c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f900af8d86c5b3f57479ec2aa959db58a3704b298d934f06934f9e0ffeed32c0->enter($__internal_f900af8d86c5b3f57479ec2aa959db58a3704b298d934f06934f9e0ffeed32c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a15e18d502c979fb5eb2289e1a4c2ab7a43198130403110758ecd0ba3909677e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15e18d502c979fb5eb2289e1a4c2ab7a43198130403110758ecd0ba3909677e->enter($__internal_a15e18d502c979fb5eb2289e1a4c2ab7a43198130403110758ecd0ba3909677e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a15e18d502c979fb5eb2289e1a4c2ab7a43198130403110758ecd0ba3909677e->leave($__internal_a15e18d502c979fb5eb2289e1a4c2ab7a43198130403110758ecd0ba3909677e_prof);

        
        $__internal_f900af8d86c5b3f57479ec2aa959db58a3704b298d934f06934f9e0ffeed32c0->leave($__internal_f900af8d86c5b3f57479ec2aa959db58a3704b298d934f06934f9e0ffeed32c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65d8233d2d346ab232ce53d44e847698f93c37501d46e19fa1b87b8417f95434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d8233d2d346ab232ce53d44e847698f93c37501d46e19fa1b87b8417f95434->enter($__internal_65d8233d2d346ab232ce53d44e847698f93c37501d46e19fa1b87b8417f95434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f4bf78bd8afab097252c9145814f6f5fcb958d24ac732f3393505227d73cf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4bf78bd8afab097252c9145814f6f5fcb958d24ac732f3393505227d73cf16->enter($__internal_2f4bf78bd8afab097252c9145814f6f5fcb958d24ac732f3393505227d73cf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f4bf78bd8afab097252c9145814f6f5fcb958d24ac732f3393505227d73cf16->leave($__internal_2f4bf78bd8afab097252c9145814f6f5fcb958d24ac732f3393505227d73cf16_prof);

        
        $__internal_65d8233d2d346ab232ce53d44e847698f93c37501d46e19fa1b87b8417f95434->leave($__internal_65d8233d2d346ab232ce53d44e847698f93c37501d46e19fa1b87b8417f95434_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9383527c20121f5b948cecb1901972137c88e5498e6223772dfc063931af1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9383527c20121f5b948cecb1901972137c88e5498e6223772dfc063931af1e->enter($__internal_7e9383527c20121f5b948cecb1901972137c88e5498e6223772dfc063931af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af4ec60706fa1add03afa914277322c0dc8c166adfb3cc28ee4081e4bd003011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4ec60706fa1add03afa914277322c0dc8c166adfb3cc28ee4081e4bd003011->enter($__internal_af4ec60706fa1add03afa914277322c0dc8c166adfb3cc28ee4081e4bd003011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af4ec60706fa1add03afa914277322c0dc8c166adfb3cc28ee4081e4bd003011->leave($__internal_af4ec60706fa1add03afa914277322c0dc8c166adfb3cc28ee4081e4bd003011_prof);

        
        $__internal_7e9383527c20121f5b948cecb1901972137c88e5498e6223772dfc063931af1e->leave($__internal_7e9383527c20121f5b948cecb1901972137c88e5498e6223772dfc063931af1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73ed2ddb07b38e258d4ae5791ea974d395e8a2f7e8073e535b5632207b8fd5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ed2ddb07b38e258d4ae5791ea974d395e8a2f7e8073e535b5632207b8fd5aa->enter($__internal_73ed2ddb07b38e258d4ae5791ea974d395e8a2f7e8073e535b5632207b8fd5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3ec286f3e9d2675b09e7ea92393bb9d9e77fade030f5211af9ed8b0640b2a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec286f3e9d2675b09e7ea92393bb9d9e77fade030f5211af9ed8b0640b2a81->enter($__internal_a3ec286f3e9d2675b09e7ea92393bb9d9e77fade030f5211af9ed8b0640b2a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3ec286f3e9d2675b09e7ea92393bb9d9e77fade030f5211af9ed8b0640b2a81->leave($__internal_a3ec286f3e9d2675b09e7ea92393bb9d9e77fade030f5211af9ed8b0640b2a81_prof);

        
        $__internal_73ed2ddb07b38e258d4ae5791ea974d395e8a2f7e8073e535b5632207b8fd5aa->leave($__internal_73ed2ddb07b38e258d4ae5791ea974d395e8a2f7e8073e535b5632207b8fd5aa_prof);

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

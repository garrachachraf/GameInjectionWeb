<?php

/* ::base.html.twig */
class __TwigTemplate_24b59280ff59f5629e7cbc8a69f72a2c1f34e92e092a859f088665548f2ec62a extends Twig_Template
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
        $__internal_3b531e8273d9c7386d37bdc80162f23285830446871613933a8b8c2a98707f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b531e8273d9c7386d37bdc80162f23285830446871613933a8b8c2a98707f60->enter($__internal_3b531e8273d9c7386d37bdc80162f23285830446871613933a8b8c2a98707f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9f71ad642c364c5fd19e100b50fe842a9902beb82c25b6c6699b3b87ecbff297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f71ad642c364c5fd19e100b50fe842a9902beb82c25b6c6699b3b87ecbff297->enter($__internal_9f71ad642c364c5fd19e100b50fe842a9902beb82c25b6c6699b3b87ecbff297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3b531e8273d9c7386d37bdc80162f23285830446871613933a8b8c2a98707f60->leave($__internal_3b531e8273d9c7386d37bdc80162f23285830446871613933a8b8c2a98707f60_prof);

        
        $__internal_9f71ad642c364c5fd19e100b50fe842a9902beb82c25b6c6699b3b87ecbff297->leave($__internal_9f71ad642c364c5fd19e100b50fe842a9902beb82c25b6c6699b3b87ecbff297_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48d38c9f434ff17dfc1ebd6e10717cac8aa1e8a5b9c524edd246601ae8418860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d38c9f434ff17dfc1ebd6e10717cac8aa1e8a5b9c524edd246601ae8418860->enter($__internal_48d38c9f434ff17dfc1ebd6e10717cac8aa1e8a5b9c524edd246601ae8418860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bf9a8252747171e57a9c54831e2e6d00f75846c29f462146e8be5ce8043eac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf9a8252747171e57a9c54831e2e6d00f75846c29f462146e8be5ce8043eac3->enter($__internal_7bf9a8252747171e57a9c54831e2e6d00f75846c29f462146e8be5ce8043eac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7bf9a8252747171e57a9c54831e2e6d00f75846c29f462146e8be5ce8043eac3->leave($__internal_7bf9a8252747171e57a9c54831e2e6d00f75846c29f462146e8be5ce8043eac3_prof);

        
        $__internal_48d38c9f434ff17dfc1ebd6e10717cac8aa1e8a5b9c524edd246601ae8418860->leave($__internal_48d38c9f434ff17dfc1ebd6e10717cac8aa1e8a5b9c524edd246601ae8418860_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2f1c07c1a997ab5c6acc4df3fa0e002a0d048765b7dd2a55c21d217d046e034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f1c07c1a997ab5c6acc4df3fa0e002a0d048765b7dd2a55c21d217d046e034->enter($__internal_d2f1c07c1a997ab5c6acc4df3fa0e002a0d048765b7dd2a55c21d217d046e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49f3825d7be85f19c6ca3bc5d18f7e79307e5706084ab7a14dd4629abd9eb470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f3825d7be85f19c6ca3bc5d18f7e79307e5706084ab7a14dd4629abd9eb470->enter($__internal_49f3825d7be85f19c6ca3bc5d18f7e79307e5706084ab7a14dd4629abd9eb470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49f3825d7be85f19c6ca3bc5d18f7e79307e5706084ab7a14dd4629abd9eb470->leave($__internal_49f3825d7be85f19c6ca3bc5d18f7e79307e5706084ab7a14dd4629abd9eb470_prof);

        
        $__internal_d2f1c07c1a997ab5c6acc4df3fa0e002a0d048765b7dd2a55c21d217d046e034->leave($__internal_d2f1c07c1a997ab5c6acc4df3fa0e002a0d048765b7dd2a55c21d217d046e034_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e05b714a5be7e97e52aced389b55bf52f256ddcc0a81a10368eb8c7bf512ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e05b714a5be7e97e52aced389b55bf52f256ddcc0a81a10368eb8c7bf512ac->enter($__internal_c4e05b714a5be7e97e52aced389b55bf52f256ddcc0a81a10368eb8c7bf512ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60c9ea10042ad9daa2f52b3c1f7901c655f7568f418d2b778153a14571c577bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9ea10042ad9daa2f52b3c1f7901c655f7568f418d2b778153a14571c577bb->enter($__internal_60c9ea10042ad9daa2f52b3c1f7901c655f7568f418d2b778153a14571c577bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60c9ea10042ad9daa2f52b3c1f7901c655f7568f418d2b778153a14571c577bb->leave($__internal_60c9ea10042ad9daa2f52b3c1f7901c655f7568f418d2b778153a14571c577bb_prof);

        
        $__internal_c4e05b714a5be7e97e52aced389b55bf52f256ddcc0a81a10368eb8c7bf512ac->leave($__internal_c4e05b714a5be7e97e52aced389b55bf52f256ddcc0a81a10368eb8c7bf512ac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb66496510d6b7cfa2147ab3ae18b193f0d162b93f942d525e1c9a6cdcef0d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb66496510d6b7cfa2147ab3ae18b193f0d162b93f942d525e1c9a6cdcef0d20->enter($__internal_bb66496510d6b7cfa2147ab3ae18b193f0d162b93f942d525e1c9a6cdcef0d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_045d10442dc2e5af0d60b13aabc09fd1808bf20a7db2ad14b306b49c6a57965d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045d10442dc2e5af0d60b13aabc09fd1808bf20a7db2ad14b306b49c6a57965d->enter($__internal_045d10442dc2e5af0d60b13aabc09fd1808bf20a7db2ad14b306b49c6a57965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_045d10442dc2e5af0d60b13aabc09fd1808bf20a7db2ad14b306b49c6a57965d->leave($__internal_045d10442dc2e5af0d60b13aabc09fd1808bf20a7db2ad14b306b49c6a57965d_prof);

        
        $__internal_bb66496510d6b7cfa2147ab3ae18b193f0d162b93f942d525e1c9a6cdcef0d20->leave($__internal_bb66496510d6b7cfa2147ab3ae18b193f0d162b93f942d525e1c9a6cdcef0d20_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/base.html.twig");
    }
}

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
        $__internal_b60de0c0d1e3d23d3fac36c3960094ad79298ea3f8c06e0fd9b53305198d9c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60de0c0d1e3d23d3fac36c3960094ad79298ea3f8c06e0fd9b53305198d9c2d->enter($__internal_b60de0c0d1e3d23d3fac36c3960094ad79298ea3f8c06e0fd9b53305198d9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ba012c1b22e3211297b112f1f44cd12bbf7831375b776f7d9276ee50e1490f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba012c1b22e3211297b112f1f44cd12bbf7831375b776f7d9276ee50e1490f92->enter($__internal_ba012c1b22e3211297b112f1f44cd12bbf7831375b776f7d9276ee50e1490f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b60de0c0d1e3d23d3fac36c3960094ad79298ea3f8c06e0fd9b53305198d9c2d->leave($__internal_b60de0c0d1e3d23d3fac36c3960094ad79298ea3f8c06e0fd9b53305198d9c2d_prof);

        
        $__internal_ba012c1b22e3211297b112f1f44cd12bbf7831375b776f7d9276ee50e1490f92->leave($__internal_ba012c1b22e3211297b112f1f44cd12bbf7831375b776f7d9276ee50e1490f92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_095d85e5728ffe7160d09d402c6ee8b14c7ba876fc5321153b4c5a3c2467823f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095d85e5728ffe7160d09d402c6ee8b14c7ba876fc5321153b4c5a3c2467823f->enter($__internal_095d85e5728ffe7160d09d402c6ee8b14c7ba876fc5321153b4c5a3c2467823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c67cff8dd47c8ef013f914237ecff6fb0f68f2fb791a8da2f97b5b8c9fcf8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c67cff8dd47c8ef013f914237ecff6fb0f68f2fb791a8da2f97b5b8c9fcf8c1->enter($__internal_8c67cff8dd47c8ef013f914237ecff6fb0f68f2fb791a8da2f97b5b8c9fcf8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c67cff8dd47c8ef013f914237ecff6fb0f68f2fb791a8da2f97b5b8c9fcf8c1->leave($__internal_8c67cff8dd47c8ef013f914237ecff6fb0f68f2fb791a8da2f97b5b8c9fcf8c1_prof);

        
        $__internal_095d85e5728ffe7160d09d402c6ee8b14c7ba876fc5321153b4c5a3c2467823f->leave($__internal_095d85e5728ffe7160d09d402c6ee8b14c7ba876fc5321153b4c5a3c2467823f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94cf7baa278619a684dd9fef8d64a9e7e380353a77fadd28a6407a1fe9e1f0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cf7baa278619a684dd9fef8d64a9e7e380353a77fadd28a6407a1fe9e1f0e9->enter($__internal_94cf7baa278619a684dd9fef8d64a9e7e380353a77fadd28a6407a1fe9e1f0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_95a120dbd0f874dafcea29afac971f97c359a406b3051398250c1646a547700c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a120dbd0f874dafcea29afac971f97c359a406b3051398250c1646a547700c->enter($__internal_95a120dbd0f874dafcea29afac971f97c359a406b3051398250c1646a547700c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95a120dbd0f874dafcea29afac971f97c359a406b3051398250c1646a547700c->leave($__internal_95a120dbd0f874dafcea29afac971f97c359a406b3051398250c1646a547700c_prof);

        
        $__internal_94cf7baa278619a684dd9fef8d64a9e7e380353a77fadd28a6407a1fe9e1f0e9->leave($__internal_94cf7baa278619a684dd9fef8d64a9e7e380353a77fadd28a6407a1fe9e1f0e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e52f1f58cff7d63c92a2f1b5e595edd92ce467d7557288eee55f8aa4c1b19cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52f1f58cff7d63c92a2f1b5e595edd92ce467d7557288eee55f8aa4c1b19cef->enter($__internal_e52f1f58cff7d63c92a2f1b5e595edd92ce467d7557288eee55f8aa4c1b19cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_092a37064d33f17ad47ecc9813fb44b1545f182fc613c4580317c9a67fc16b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092a37064d33f17ad47ecc9813fb44b1545f182fc613c4580317c9a67fc16b45->enter($__internal_092a37064d33f17ad47ecc9813fb44b1545f182fc613c4580317c9a67fc16b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_092a37064d33f17ad47ecc9813fb44b1545f182fc613c4580317c9a67fc16b45->leave($__internal_092a37064d33f17ad47ecc9813fb44b1545f182fc613c4580317c9a67fc16b45_prof);

        
        $__internal_e52f1f58cff7d63c92a2f1b5e595edd92ce467d7557288eee55f8aa4c1b19cef->leave($__internal_e52f1f58cff7d63c92a2f1b5e595edd92ce467d7557288eee55f8aa4c1b19cef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c11b3824366890e1edcb8d0053955ac21be2eb91e1a50cbcb9379da011f46891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11b3824366890e1edcb8d0053955ac21be2eb91e1a50cbcb9379da011f46891->enter($__internal_c11b3824366890e1edcb8d0053955ac21be2eb91e1a50cbcb9379da011f46891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_47972e5787a7676a558acd79b802dcf5b38e3431fd383735130431ce136c0682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47972e5787a7676a558acd79b802dcf5b38e3431fd383735130431ce136c0682->enter($__internal_47972e5787a7676a558acd79b802dcf5b38e3431fd383735130431ce136c0682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_47972e5787a7676a558acd79b802dcf5b38e3431fd383735130431ce136c0682->leave($__internal_47972e5787a7676a558acd79b802dcf5b38e3431fd383735130431ce136c0682_prof);

        
        $__internal_c11b3824366890e1edcb8d0053955ac21be2eb91e1a50cbcb9379da011f46891->leave($__internal_c11b3824366890e1edcb8d0053955ac21be2eb91e1a50cbcb9379da011f46891_prof);

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

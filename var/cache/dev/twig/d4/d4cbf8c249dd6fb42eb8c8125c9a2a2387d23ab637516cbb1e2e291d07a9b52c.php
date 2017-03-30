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
        $__internal_b39e3f53a34a33edaa8a7f6ced6daf8a6f7cce3abfe195dd3d09c38d6aec86ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39e3f53a34a33edaa8a7f6ced6daf8a6f7cce3abfe195dd3d09c38d6aec86ae->enter($__internal_b39e3f53a34a33edaa8a7f6ced6daf8a6f7cce3abfe195dd3d09c38d6aec86ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8fd1aa626ad17ad6dc9858bbdac71a9dc92ea7f75c28a79c2e9f823b9f7cfc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd1aa626ad17ad6dc9858bbdac71a9dc92ea7f75c28a79c2e9f823b9f7cfc39->enter($__internal_8fd1aa626ad17ad6dc9858bbdac71a9dc92ea7f75c28a79c2e9f823b9f7cfc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b39e3f53a34a33edaa8a7f6ced6daf8a6f7cce3abfe195dd3d09c38d6aec86ae->leave($__internal_b39e3f53a34a33edaa8a7f6ced6daf8a6f7cce3abfe195dd3d09c38d6aec86ae_prof);

        
        $__internal_8fd1aa626ad17ad6dc9858bbdac71a9dc92ea7f75c28a79c2e9f823b9f7cfc39->leave($__internal_8fd1aa626ad17ad6dc9858bbdac71a9dc92ea7f75c28a79c2e9f823b9f7cfc39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_289df5bf787553411c851acefa703eae0918adfc2c7deab9f77e42fbde934f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289df5bf787553411c851acefa703eae0918adfc2c7deab9f77e42fbde934f6e->enter($__internal_289df5bf787553411c851acefa703eae0918adfc2c7deab9f77e42fbde934f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b903222eaa6b7680211346f65032c3f85a8397c0acc535363485285644e990a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b903222eaa6b7680211346f65032c3f85a8397c0acc535363485285644e990a->enter($__internal_7b903222eaa6b7680211346f65032c3f85a8397c0acc535363485285644e990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7b903222eaa6b7680211346f65032c3f85a8397c0acc535363485285644e990a->leave($__internal_7b903222eaa6b7680211346f65032c3f85a8397c0acc535363485285644e990a_prof);

        
        $__internal_289df5bf787553411c851acefa703eae0918adfc2c7deab9f77e42fbde934f6e->leave($__internal_289df5bf787553411c851acefa703eae0918adfc2c7deab9f77e42fbde934f6e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66e47c6f59a4fd6df59ebd19eb63ece321188ac17bf6457ec90a99b9776fcc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e47c6f59a4fd6df59ebd19eb63ece321188ac17bf6457ec90a99b9776fcc59->enter($__internal_66e47c6f59a4fd6df59ebd19eb63ece321188ac17bf6457ec90a99b9776fcc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b225028fad51a73a0712cdcbef7a82bb5a5531f4d96de01ed4bf62d6cbda7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b225028fad51a73a0712cdcbef7a82bb5a5531f4d96de01ed4bf62d6cbda7a3->enter($__internal_9b225028fad51a73a0712cdcbef7a82bb5a5531f4d96de01ed4bf62d6cbda7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b225028fad51a73a0712cdcbef7a82bb5a5531f4d96de01ed4bf62d6cbda7a3->leave($__internal_9b225028fad51a73a0712cdcbef7a82bb5a5531f4d96de01ed4bf62d6cbda7a3_prof);

        
        $__internal_66e47c6f59a4fd6df59ebd19eb63ece321188ac17bf6457ec90a99b9776fcc59->leave($__internal_66e47c6f59a4fd6df59ebd19eb63ece321188ac17bf6457ec90a99b9776fcc59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a36298807f89eb606b881d8e43f182d46b8b6a2926b69c1d98f4fd304ebcc400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36298807f89eb606b881d8e43f182d46b8b6a2926b69c1d98f4fd304ebcc400->enter($__internal_a36298807f89eb606b881d8e43f182d46b8b6a2926b69c1d98f4fd304ebcc400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b45106e828907ac95b787d79501a1334fbf8122a1c47fca615add7d99635b381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45106e828907ac95b787d79501a1334fbf8122a1c47fca615add7d99635b381->enter($__internal_b45106e828907ac95b787d79501a1334fbf8122a1c47fca615add7d99635b381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b45106e828907ac95b787d79501a1334fbf8122a1c47fca615add7d99635b381->leave($__internal_b45106e828907ac95b787d79501a1334fbf8122a1c47fca615add7d99635b381_prof);

        
        $__internal_a36298807f89eb606b881d8e43f182d46b8b6a2926b69c1d98f4fd304ebcc400->leave($__internal_a36298807f89eb606b881d8e43f182d46b8b6a2926b69c1d98f4fd304ebcc400_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c873c53801956d7795671c394db0e0195395c3e8bfd329ac785ad6bf6f615122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c873c53801956d7795671c394db0e0195395c3e8bfd329ac785ad6bf6f615122->enter($__internal_c873c53801956d7795671c394db0e0195395c3e8bfd329ac785ad6bf6f615122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef61e2432d31fe3abbe00700a1eaedee07a952313214cc11178d9cf9a71c642d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef61e2432d31fe3abbe00700a1eaedee07a952313214cc11178d9cf9a71c642d->enter($__internal_ef61e2432d31fe3abbe00700a1eaedee07a952313214cc11178d9cf9a71c642d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef61e2432d31fe3abbe00700a1eaedee07a952313214cc11178d9cf9a71c642d->leave($__internal_ef61e2432d31fe3abbe00700a1eaedee07a952313214cc11178d9cf9a71c642d_prof);

        
        $__internal_c873c53801956d7795671c394db0e0195395c3e8bfd329ac785ad6bf6f615122->leave($__internal_c873c53801956d7795671c394db0e0195395c3e8bfd329ac785ad6bf6f615122_prof);

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

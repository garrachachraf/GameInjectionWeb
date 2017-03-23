<?php

/* ::base.html.twig */
class __TwigTemplate_2dfb870c0c9ee21830f3852bbbe4de3a2c819b3bc1d9bacdf57fa07825a91bb1 extends Twig_Template
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
        $__internal_72a4c5e89bb888eab772554bf410a33e569979f48fd75f4602606bd10c3c80d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a4c5e89bb888eab772554bf410a33e569979f48fd75f4602606bd10c3c80d6->enter($__internal_72a4c5e89bb888eab772554bf410a33e569979f48fd75f4602606bd10c3c80d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2ab43331297b7622fd647dbbbb60f446d14c8cd9c511826532c357a6eb982fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab43331297b7622fd647dbbbb60f446d14c8cd9c511826532c357a6eb982fc1->enter($__internal_2ab43331297b7622fd647dbbbb60f446d14c8cd9c511826532c357a6eb982fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_72a4c5e89bb888eab772554bf410a33e569979f48fd75f4602606bd10c3c80d6->leave($__internal_72a4c5e89bb888eab772554bf410a33e569979f48fd75f4602606bd10c3c80d6_prof);

        
        $__internal_2ab43331297b7622fd647dbbbb60f446d14c8cd9c511826532c357a6eb982fc1->leave($__internal_2ab43331297b7622fd647dbbbb60f446d14c8cd9c511826532c357a6eb982fc1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59f08fa5817694d4e4799bb234f99c12a391eafe2a70e0a18c35fed30c854638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f08fa5817694d4e4799bb234f99c12a391eafe2a70e0a18c35fed30c854638->enter($__internal_59f08fa5817694d4e4799bb234f99c12a391eafe2a70e0a18c35fed30c854638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dad6857d3208962abe3cbc38c562f85e01a146e3ea34e913fbc72d61bce4af10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad6857d3208962abe3cbc38c562f85e01a146e3ea34e913fbc72d61bce4af10->enter($__internal_dad6857d3208962abe3cbc38c562f85e01a146e3ea34e913fbc72d61bce4af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dad6857d3208962abe3cbc38c562f85e01a146e3ea34e913fbc72d61bce4af10->leave($__internal_dad6857d3208962abe3cbc38c562f85e01a146e3ea34e913fbc72d61bce4af10_prof);

        
        $__internal_59f08fa5817694d4e4799bb234f99c12a391eafe2a70e0a18c35fed30c854638->leave($__internal_59f08fa5817694d4e4799bb234f99c12a391eafe2a70e0a18c35fed30c854638_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3eafeddbfe8574accbcd2eb975ae2c7a5201f2892a77471cda593e07c6ce98ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eafeddbfe8574accbcd2eb975ae2c7a5201f2892a77471cda593e07c6ce98ea->enter($__internal_3eafeddbfe8574accbcd2eb975ae2c7a5201f2892a77471cda593e07c6ce98ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd8a55290eebbf9752cbe98f66ef59cae718a6ec550a2c73a86392d1912df560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8a55290eebbf9752cbe98f66ef59cae718a6ec550a2c73a86392d1912df560->enter($__internal_bd8a55290eebbf9752cbe98f66ef59cae718a6ec550a2c73a86392d1912df560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd8a55290eebbf9752cbe98f66ef59cae718a6ec550a2c73a86392d1912df560->leave($__internal_bd8a55290eebbf9752cbe98f66ef59cae718a6ec550a2c73a86392d1912df560_prof);

        
        $__internal_3eafeddbfe8574accbcd2eb975ae2c7a5201f2892a77471cda593e07c6ce98ea->leave($__internal_3eafeddbfe8574accbcd2eb975ae2c7a5201f2892a77471cda593e07c6ce98ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1058a5a8d3e9a6ed3b39b74a3f08208d97d525b436d8c289ec0551b1b34a77aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1058a5a8d3e9a6ed3b39b74a3f08208d97d525b436d8c289ec0551b1b34a77aa->enter($__internal_1058a5a8d3e9a6ed3b39b74a3f08208d97d525b436d8c289ec0551b1b34a77aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19c357b9e459c5fc55b4ab3b6d10fb1ef43906e084c9a9dad491f2606c0b678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c357b9e459c5fc55b4ab3b6d10fb1ef43906e084c9a9dad491f2606c0b678e->enter($__internal_19c357b9e459c5fc55b4ab3b6d10fb1ef43906e084c9a9dad491f2606c0b678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19c357b9e459c5fc55b4ab3b6d10fb1ef43906e084c9a9dad491f2606c0b678e->leave($__internal_19c357b9e459c5fc55b4ab3b6d10fb1ef43906e084c9a9dad491f2606c0b678e_prof);

        
        $__internal_1058a5a8d3e9a6ed3b39b74a3f08208d97d525b436d8c289ec0551b1b34a77aa->leave($__internal_1058a5a8d3e9a6ed3b39b74a3f08208d97d525b436d8c289ec0551b1b34a77aa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a99897676a0bdfa1ac21ef82abab7ce876a7b50a70f839e4796c6cc8393f13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a99897676a0bdfa1ac21ef82abab7ce876a7b50a70f839e4796c6cc8393f13d->enter($__internal_9a99897676a0bdfa1ac21ef82abab7ce876a7b50a70f839e4796c6cc8393f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e3cfde84dd09b4f2bb604559f4c454223f04eaf383be888ed3517e14bff24c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3cfde84dd09b4f2bb604559f4c454223f04eaf383be888ed3517e14bff24c5->enter($__internal_8e3cfde84dd09b4f2bb604559f4c454223f04eaf383be888ed3517e14bff24c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e3cfde84dd09b4f2bb604559f4c454223f04eaf383be888ed3517e14bff24c5->leave($__internal_8e3cfde84dd09b4f2bb604559f4c454223f04eaf383be888ed3517e14bff24c5_prof);

        
        $__internal_9a99897676a0bdfa1ac21ef82abab7ce876a7b50a70f839e4796c6cc8393f13d->leave($__internal_9a99897676a0bdfa1ac21ef82abab7ce876a7b50a70f839e4796c6cc8393f13d_prof);

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

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
        $__internal_ebef803285b9f11fca54a5edf29df1a2aa86491dce7857ea3a5f44bcdadbf01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebef803285b9f11fca54a5edf29df1a2aa86491dce7857ea3a5f44bcdadbf01d->enter($__internal_ebef803285b9f11fca54a5edf29df1a2aa86491dce7857ea3a5f44bcdadbf01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4cc1d9afb145e5afa7d25f8c499794ac95650b513ed5c5b143d80db8aa4175b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc1d9afb145e5afa7d25f8c499794ac95650b513ed5c5b143d80db8aa4175b3->enter($__internal_4cc1d9afb145e5afa7d25f8c499794ac95650b513ed5c5b143d80db8aa4175b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ebef803285b9f11fca54a5edf29df1a2aa86491dce7857ea3a5f44bcdadbf01d->leave($__internal_ebef803285b9f11fca54a5edf29df1a2aa86491dce7857ea3a5f44bcdadbf01d_prof);

        
        $__internal_4cc1d9afb145e5afa7d25f8c499794ac95650b513ed5c5b143d80db8aa4175b3->leave($__internal_4cc1d9afb145e5afa7d25f8c499794ac95650b513ed5c5b143d80db8aa4175b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbe75b1a63391a1f34a2bb175c5660fc9eb14638b799282a0ff34a539254a612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe75b1a63391a1f34a2bb175c5660fc9eb14638b799282a0ff34a539254a612->enter($__internal_cbe75b1a63391a1f34a2bb175c5660fc9eb14638b799282a0ff34a539254a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31c7f9d86e286dfdfa5054c5d328b5e1deaace20734881240f3cb795e7d67ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c7f9d86e286dfdfa5054c5d328b5e1deaace20734881240f3cb795e7d67ea0->enter($__internal_31c7f9d86e286dfdfa5054c5d328b5e1deaace20734881240f3cb795e7d67ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31c7f9d86e286dfdfa5054c5d328b5e1deaace20734881240f3cb795e7d67ea0->leave($__internal_31c7f9d86e286dfdfa5054c5d328b5e1deaace20734881240f3cb795e7d67ea0_prof);

        
        $__internal_cbe75b1a63391a1f34a2bb175c5660fc9eb14638b799282a0ff34a539254a612->leave($__internal_cbe75b1a63391a1f34a2bb175c5660fc9eb14638b799282a0ff34a539254a612_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e5a122e25fb86546872a17643d39cd2f6736fd31564c7e0da706f774aea392c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5a122e25fb86546872a17643d39cd2f6736fd31564c7e0da706f774aea392c->enter($__internal_2e5a122e25fb86546872a17643d39cd2f6736fd31564c7e0da706f774aea392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20c8869ea576daab0ed38f49f00af2be20e09db8dc7387f1f2a00710ebb50eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c8869ea576daab0ed38f49f00af2be20e09db8dc7387f1f2a00710ebb50eb2->enter($__internal_20c8869ea576daab0ed38f49f00af2be20e09db8dc7387f1f2a00710ebb50eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_20c8869ea576daab0ed38f49f00af2be20e09db8dc7387f1f2a00710ebb50eb2->leave($__internal_20c8869ea576daab0ed38f49f00af2be20e09db8dc7387f1f2a00710ebb50eb2_prof);

        
        $__internal_2e5a122e25fb86546872a17643d39cd2f6736fd31564c7e0da706f774aea392c->leave($__internal_2e5a122e25fb86546872a17643d39cd2f6736fd31564c7e0da706f774aea392c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_414259596f215b34a0a5bdbf7e42a03595982268ab98dddd49bb7fc7c7c1dbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414259596f215b34a0a5bdbf7e42a03595982268ab98dddd49bb7fc7c7c1dbbb->enter($__internal_414259596f215b34a0a5bdbf7e42a03595982268ab98dddd49bb7fc7c7c1dbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_982ae1786582cf4a4c90534e95d87aee03754918f3925e548292a071e7e50e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982ae1786582cf4a4c90534e95d87aee03754918f3925e548292a071e7e50e1b->enter($__internal_982ae1786582cf4a4c90534e95d87aee03754918f3925e548292a071e7e50e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_982ae1786582cf4a4c90534e95d87aee03754918f3925e548292a071e7e50e1b->leave($__internal_982ae1786582cf4a4c90534e95d87aee03754918f3925e548292a071e7e50e1b_prof);

        
        $__internal_414259596f215b34a0a5bdbf7e42a03595982268ab98dddd49bb7fc7c7c1dbbb->leave($__internal_414259596f215b34a0a5bdbf7e42a03595982268ab98dddd49bb7fc7c7c1dbbb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffea534cffaedbda9fb1a5d56c02c67eac0fe9c3344fa7b1bf6ceeb6eeff8356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffea534cffaedbda9fb1a5d56c02c67eac0fe9c3344fa7b1bf6ceeb6eeff8356->enter($__internal_ffea534cffaedbda9fb1a5d56c02c67eac0fe9c3344fa7b1bf6ceeb6eeff8356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_774f78ffb6a1b4e586d8c632e96916dcfbccfdfaf82c45a6e125c92adb7629df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774f78ffb6a1b4e586d8c632e96916dcfbccfdfaf82c45a6e125c92adb7629df->enter($__internal_774f78ffb6a1b4e586d8c632e96916dcfbccfdfaf82c45a6e125c92adb7629df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_774f78ffb6a1b4e586d8c632e96916dcfbccfdfaf82c45a6e125c92adb7629df->leave($__internal_774f78ffb6a1b4e586d8c632e96916dcfbccfdfaf82c45a6e125c92adb7629df_prof);

        
        $__internal_ffea534cffaedbda9fb1a5d56c02c67eac0fe9c3344fa7b1bf6ceeb6eeff8356->leave($__internal_ffea534cffaedbda9fb1a5d56c02c67eac0fe9c3344fa7b1bf6ceeb6eeff8356_prof);

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

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
        $__internal_1c798fb98789da10746aaa3e08514cd27f6f351e32a73d458830a1e4934c6337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c798fb98789da10746aaa3e08514cd27f6f351e32a73d458830a1e4934c6337->enter($__internal_1c798fb98789da10746aaa3e08514cd27f6f351e32a73d458830a1e4934c6337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_595b0a5875e710cdea785ea74cb9d237f4380a723693840f640ec7b2d325df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595b0a5875e710cdea785ea74cb9d237f4380a723693840f640ec7b2d325df99->enter($__internal_595b0a5875e710cdea785ea74cb9d237f4380a723693840f640ec7b2d325df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1c798fb98789da10746aaa3e08514cd27f6f351e32a73d458830a1e4934c6337->leave($__internal_1c798fb98789da10746aaa3e08514cd27f6f351e32a73d458830a1e4934c6337_prof);

        
        $__internal_595b0a5875e710cdea785ea74cb9d237f4380a723693840f640ec7b2d325df99->leave($__internal_595b0a5875e710cdea785ea74cb9d237f4380a723693840f640ec7b2d325df99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b47d5f9332196d581cbd3132cff67e226122b1a675207faf01ae7290ed4e14c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47d5f9332196d581cbd3132cff67e226122b1a675207faf01ae7290ed4e14c8->enter($__internal_b47d5f9332196d581cbd3132cff67e226122b1a675207faf01ae7290ed4e14c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b412cfb2f4fe26295e529092565b681c4d8e04f27cefb4e5e100c2d0bdc571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b412cfb2f4fe26295e529092565b681c4d8e04f27cefb4e5e100c2d0bdc571->enter($__internal_50b412cfb2f4fe26295e529092565b681c4d8e04f27cefb4e5e100c2d0bdc571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50b412cfb2f4fe26295e529092565b681c4d8e04f27cefb4e5e100c2d0bdc571->leave($__internal_50b412cfb2f4fe26295e529092565b681c4d8e04f27cefb4e5e100c2d0bdc571_prof);

        
        $__internal_b47d5f9332196d581cbd3132cff67e226122b1a675207faf01ae7290ed4e14c8->leave($__internal_b47d5f9332196d581cbd3132cff67e226122b1a675207faf01ae7290ed4e14c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4c8e6fbebce08166d22f38dda23ae9fa8a67775124395eaa99de19e2eec4744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c8e6fbebce08166d22f38dda23ae9fa8a67775124395eaa99de19e2eec4744->enter($__internal_e4c8e6fbebce08166d22f38dda23ae9fa8a67775124395eaa99de19e2eec4744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b32b223810240706683ad895d7e907f3b5a61632d196e80bc56b15cfa37873e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b32b223810240706683ad895d7e907f3b5a61632d196e80bc56b15cfa37873e->enter($__internal_5b32b223810240706683ad895d7e907f3b5a61632d196e80bc56b15cfa37873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b32b223810240706683ad895d7e907f3b5a61632d196e80bc56b15cfa37873e->leave($__internal_5b32b223810240706683ad895d7e907f3b5a61632d196e80bc56b15cfa37873e_prof);

        
        $__internal_e4c8e6fbebce08166d22f38dda23ae9fa8a67775124395eaa99de19e2eec4744->leave($__internal_e4c8e6fbebce08166d22f38dda23ae9fa8a67775124395eaa99de19e2eec4744_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08b61a21ad3434894fcb39cb70efa2bf805d425ad8e41f4931d306ad90b1451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08b61a21ad3434894fcb39cb70efa2bf805d425ad8e41f4931d306ad90b1451->enter($__internal_e08b61a21ad3434894fcb39cb70efa2bf805d425ad8e41f4931d306ad90b1451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e451a4970df8a1747f03eaec2404dd8c8ea3f2a3860586d62ef56c1f418da13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e451a4970df8a1747f03eaec2404dd8c8ea3f2a3860586d62ef56c1f418da13->enter($__internal_0e451a4970df8a1747f03eaec2404dd8c8ea3f2a3860586d62ef56c1f418da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e451a4970df8a1747f03eaec2404dd8c8ea3f2a3860586d62ef56c1f418da13->leave($__internal_0e451a4970df8a1747f03eaec2404dd8c8ea3f2a3860586d62ef56c1f418da13_prof);

        
        $__internal_e08b61a21ad3434894fcb39cb70efa2bf805d425ad8e41f4931d306ad90b1451->leave($__internal_e08b61a21ad3434894fcb39cb70efa2bf805d425ad8e41f4931d306ad90b1451_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88e306f1f0e8c5d7969cd5878af9529f7f603850add587d7cbe6a45e686fffa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e306f1f0e8c5d7969cd5878af9529f7f603850add587d7cbe6a45e686fffa8->enter($__internal_88e306f1f0e8c5d7969cd5878af9529f7f603850add587d7cbe6a45e686fffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef28635c042fc8f0e0a36c9e0c59f78a373ff42a86ec30147f752c8436b3c19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef28635c042fc8f0e0a36c9e0c59f78a373ff42a86ec30147f752c8436b3c19a->enter($__internal_ef28635c042fc8f0e0a36c9e0c59f78a373ff42a86ec30147f752c8436b3c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef28635c042fc8f0e0a36c9e0c59f78a373ff42a86ec30147f752c8436b3c19a->leave($__internal_ef28635c042fc8f0e0a36c9e0c59f78a373ff42a86ec30147f752c8436b3c19a_prof);

        
        $__internal_88e306f1f0e8c5d7969cd5878af9529f7f603850add587d7cbe6a45e686fffa8->leave($__internal_88e306f1f0e8c5d7969cd5878af9529f7f603850add587d7cbe6a45e686fffa8_prof);

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

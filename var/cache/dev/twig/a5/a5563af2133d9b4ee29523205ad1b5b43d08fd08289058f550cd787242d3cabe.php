<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c2831f8526bd10544fe7d49ebe306dd0f65d3149b76ad2a93995c04da1bded2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2831f8526bd10544fe7d49ebe306dd0f65d3149b76ad2a93995c04da1bded2->enter($__internal_8c2831f8526bd10544fe7d49ebe306dd0f65d3149b76ad2a93995c04da1bded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_102939d5f1fe4718f7ad613041fa79341386be0f5e5ceb6aa680bf7d99e034d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102939d5f1fe4718f7ad613041fa79341386be0f5e5ceb6aa680bf7d99e034d8->enter($__internal_102939d5f1fe4718f7ad613041fa79341386be0f5e5ceb6aa680bf7d99e034d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c2831f8526bd10544fe7d49ebe306dd0f65d3149b76ad2a93995c04da1bded2->leave($__internal_8c2831f8526bd10544fe7d49ebe306dd0f65d3149b76ad2a93995c04da1bded2_prof);

        
        $__internal_102939d5f1fe4718f7ad613041fa79341386be0f5e5ceb6aa680bf7d99e034d8->leave($__internal_102939d5f1fe4718f7ad613041fa79341386be0f5e5ceb6aa680bf7d99e034d8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_77efcae2e607df798f2c52ba1f439e0f5642d737430f21d4e7e9b962341af6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77efcae2e607df798f2c52ba1f439e0f5642d737430f21d4e7e9b962341af6bf->enter($__internal_77efcae2e607df798f2c52ba1f439e0f5642d737430f21d4e7e9b962341af6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d52729ed177e8f4797b69f6894f65c185cd7dc584d557bd810d606017188d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d52729ed177e8f4797b69f6894f65c185cd7dc584d557bd810d606017188d82->enter($__internal_2d52729ed177e8f4797b69f6894f65c185cd7dc584d557bd810d606017188d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2d52729ed177e8f4797b69f6894f65c185cd7dc584d557bd810d606017188d82->leave($__internal_2d52729ed177e8f4797b69f6894f65c185cd7dc584d557bd810d606017188d82_prof);

        
        $__internal_77efcae2e607df798f2c52ba1f439e0f5642d737430f21d4e7e9b962341af6bf->leave($__internal_77efcae2e607df798f2c52ba1f439e0f5642d737430f21d4e7e9b962341af6bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

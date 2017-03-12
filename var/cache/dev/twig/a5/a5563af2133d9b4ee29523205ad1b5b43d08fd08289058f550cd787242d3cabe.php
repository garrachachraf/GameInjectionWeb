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
        $__internal_8240b8651349730780ec58360d0a32e113a94c610ad22bbad81e568aeb839bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8240b8651349730780ec58360d0a32e113a94c610ad22bbad81e568aeb839bfb->enter($__internal_8240b8651349730780ec58360d0a32e113a94c610ad22bbad81e568aeb839bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7beb3d47d7862dafeda8157ebbc0d1254abca8714d362060447ed0560ed913c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7beb3d47d7862dafeda8157ebbc0d1254abca8714d362060447ed0560ed913c5->enter($__internal_7beb3d47d7862dafeda8157ebbc0d1254abca8714d362060447ed0560ed913c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8240b8651349730780ec58360d0a32e113a94c610ad22bbad81e568aeb839bfb->leave($__internal_8240b8651349730780ec58360d0a32e113a94c610ad22bbad81e568aeb839bfb_prof);

        
        $__internal_7beb3d47d7862dafeda8157ebbc0d1254abca8714d362060447ed0560ed913c5->leave($__internal_7beb3d47d7862dafeda8157ebbc0d1254abca8714d362060447ed0560ed913c5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_70b3fbf6e94633c7e48b5d7446cd4e444a937a1dcafa21a5d78f1f00d5e3dad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b3fbf6e94633c7e48b5d7446cd4e444a937a1dcafa21a5d78f1f00d5e3dad6->enter($__internal_70b3fbf6e94633c7e48b5d7446cd4e444a937a1dcafa21a5d78f1f00d5e3dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21e8fc84642e74448a6db19d44df9bb7b56bed9c3ebcfd0a5899798748b129fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e8fc84642e74448a6db19d44df9bb7b56bed9c3ebcfd0a5899798748b129fc->enter($__internal_21e8fc84642e74448a6db19d44df9bb7b56bed9c3ebcfd0a5899798748b129fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_21e8fc84642e74448a6db19d44df9bb7b56bed9c3ebcfd0a5899798748b129fc->leave($__internal_21e8fc84642e74448a6db19d44df9bb7b56bed9c3ebcfd0a5899798748b129fc_prof);

        
        $__internal_70b3fbf6e94633c7e48b5d7446cd4e444a937a1dcafa21a5d78f1f00d5e3dad6->leave($__internal_70b3fbf6e94633c7e48b5d7446cd4e444a937a1dcafa21a5d78f1f00d5e3dad6_prof);

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

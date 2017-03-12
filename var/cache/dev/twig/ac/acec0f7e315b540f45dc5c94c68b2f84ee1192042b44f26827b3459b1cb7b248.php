<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c005bd478b436ddae3480bd7d92c43a001025fc0a7af8c56d1af4d7374e403b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c005bd478b436ddae3480bd7d92c43a001025fc0a7af8c56d1af4d7374e403b->enter($__internal_4c005bd478b436ddae3480bd7d92c43a001025fc0a7af8c56d1af4d7374e403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8440a7664ce1dce301ac1953562f0c8a2427b7e224c108757b0d8d570e017127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8440a7664ce1dce301ac1953562f0c8a2427b7e224c108757b0d8d570e017127->enter($__internal_8440a7664ce1dce301ac1953562f0c8a2427b7e224c108757b0d8d570e017127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4c005bd478b436ddae3480bd7d92c43a001025fc0a7af8c56d1af4d7374e403b->leave($__internal_4c005bd478b436ddae3480bd7d92c43a001025fc0a7af8c56d1af4d7374e403b_prof);

        
        $__internal_8440a7664ce1dce301ac1953562f0c8a2427b7e224c108757b0d8d570e017127->leave($__internal_8440a7664ce1dce301ac1953562f0c8a2427b7e224c108757b0d8d570e017127_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

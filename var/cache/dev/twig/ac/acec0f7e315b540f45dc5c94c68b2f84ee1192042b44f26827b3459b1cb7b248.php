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
        $__internal_a1a3e382d969ac6353856f2c44dc5be5833c0523aeb2106042f867a92ff8cc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a3e382d969ac6353856f2c44dc5be5833c0523aeb2106042f867a92ff8cc78->enter($__internal_a1a3e382d969ac6353856f2c44dc5be5833c0523aeb2106042f867a92ff8cc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8a805368143026f17b8b72bbc596b6e1d66c7b8f8b914f2bf6ce4e8cf6bcf7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a805368143026f17b8b72bbc596b6e1d66c7b8f8b914f2bf6ce4e8cf6bcf7e4->enter($__internal_8a805368143026f17b8b72bbc596b6e1d66c7b8f8b914f2bf6ce4e8cf6bcf7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a1a3e382d969ac6353856f2c44dc5be5833c0523aeb2106042f867a92ff8cc78->leave($__internal_a1a3e382d969ac6353856f2c44dc5be5833c0523aeb2106042f867a92ff8cc78_prof);

        
        $__internal_8a805368143026f17b8b72bbc596b6e1d66c7b8f8b914f2bf6ce4e8cf6bcf7e4->leave($__internal_8a805368143026f17b8b72bbc596b6e1d66c7b8f8b914f2bf6ce4e8cf6bcf7e4_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

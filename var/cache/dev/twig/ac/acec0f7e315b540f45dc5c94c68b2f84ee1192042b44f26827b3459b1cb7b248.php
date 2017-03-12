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
        $__internal_58aba5b86456b07dd4d35169ecd5e881912345d6ad5749f50fac5a5a92542e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aba5b86456b07dd4d35169ecd5e881912345d6ad5749f50fac5a5a92542e20->enter($__internal_58aba5b86456b07dd4d35169ecd5e881912345d6ad5749f50fac5a5a92542e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_200ccec09bcc065aad222cdc3e65a2721c64f9fd471a42500dd8b8721850e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200ccec09bcc065aad222cdc3e65a2721c64f9fd471a42500dd8b8721850e3f8->enter($__internal_200ccec09bcc065aad222cdc3e65a2721c64f9fd471a42500dd8b8721850e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_58aba5b86456b07dd4d35169ecd5e881912345d6ad5749f50fac5a5a92542e20->leave($__internal_58aba5b86456b07dd4d35169ecd5e881912345d6ad5749f50fac5a5a92542e20_prof);

        
        $__internal_200ccec09bcc065aad222cdc3e65a2721c64f9fd471a42500dd8b8721850e3f8->leave($__internal_200ccec09bcc065aad222cdc3e65a2721c64f9fd471a42500dd8b8721850e3f8_prof);

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

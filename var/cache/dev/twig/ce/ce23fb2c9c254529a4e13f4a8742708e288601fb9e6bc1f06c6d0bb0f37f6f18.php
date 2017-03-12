<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_a2a6b236393b5690b6a7366880fef7d6a65e6203f1323393aeae0e0f01b6bb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a6b236393b5690b6a7366880fef7d6a65e6203f1323393aeae0e0f01b6bb4b->enter($__internal_a2a6b236393b5690b6a7366880fef7d6a65e6203f1323393aeae0e0f01b6bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_465920c23e27e2c7d68906982fb631271f0a35a7894be60b06a97ee7a9798c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465920c23e27e2c7d68906982fb631271f0a35a7894be60b06a97ee7a9798c94->enter($__internal_465920c23e27e2c7d68906982fb631271f0a35a7894be60b06a97ee7a9798c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a2a6b236393b5690b6a7366880fef7d6a65e6203f1323393aeae0e0f01b6bb4b->leave($__internal_a2a6b236393b5690b6a7366880fef7d6a65e6203f1323393aeae0e0f01b6bb4b_prof);

        
        $__internal_465920c23e27e2c7d68906982fb631271f0a35a7894be60b06a97ee7a9798c94->leave($__internal_465920c23e27e2c7d68906982fb631271f0a35a7894be60b06a97ee7a9798c94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

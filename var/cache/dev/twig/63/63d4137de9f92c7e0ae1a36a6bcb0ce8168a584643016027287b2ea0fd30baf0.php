<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_307e3ab6223d9690e14cdf36c50df892f2391f6dee3a3c50005e1315017ee2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307e3ab6223d9690e14cdf36c50df892f2391f6dee3a3c50005e1315017ee2f8->enter($__internal_307e3ab6223d9690e14cdf36c50df892f2391f6dee3a3c50005e1315017ee2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fd3d45748b4b6b9d45867b0f8a81d0a935acccb2be6307a17218ebed7020d054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3d45748b4b6b9d45867b0f8a81d0a935acccb2be6307a17218ebed7020d054->enter($__internal_fd3d45748b4b6b9d45867b0f8a81d0a935acccb2be6307a17218ebed7020d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_307e3ab6223d9690e14cdf36c50df892f2391f6dee3a3c50005e1315017ee2f8->leave($__internal_307e3ab6223d9690e14cdf36c50df892f2391f6dee3a3c50005e1315017ee2f8_prof);

        
        $__internal_fd3d45748b4b6b9d45867b0f8a81d0a935acccb2be6307a17218ebed7020d054->leave($__internal_fd3d45748b4b6b9d45867b0f8a81d0a935acccb2be6307a17218ebed7020d054_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

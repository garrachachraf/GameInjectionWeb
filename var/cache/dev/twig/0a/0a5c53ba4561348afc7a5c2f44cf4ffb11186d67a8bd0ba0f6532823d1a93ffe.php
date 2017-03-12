<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_4e9f29e193b3ba1be63f2ec3e6fe751e2e0209fb872153d61f73a6af7fa85489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9f29e193b3ba1be63f2ec3e6fe751e2e0209fb872153d61f73a6af7fa85489->enter($__internal_4e9f29e193b3ba1be63f2ec3e6fe751e2e0209fb872153d61f73a6af7fa85489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6126605412b17e92449535533858e01832889f9820382ba9fee13378caebbe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6126605412b17e92449535533858e01832889f9820382ba9fee13378caebbe93->enter($__internal_6126605412b17e92449535533858e01832889f9820382ba9fee13378caebbe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e9f29e193b3ba1be63f2ec3e6fe751e2e0209fb872153d61f73a6af7fa85489->leave($__internal_4e9f29e193b3ba1be63f2ec3e6fe751e2e0209fb872153d61f73a6af7fa85489_prof);

        
        $__internal_6126605412b17e92449535533858e01832889f9820382ba9fee13378caebbe93->leave($__internal_6126605412b17e92449535533858e01832889f9820382ba9fee13378caebbe93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

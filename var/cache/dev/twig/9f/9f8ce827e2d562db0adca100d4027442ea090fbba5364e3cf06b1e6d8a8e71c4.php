<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f5a3c8bae244e1e31fd7580463c357c5072c0583e7d2b41f8af682c8ecef2cca extends Twig_Template
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
        $__internal_1e6b7916cc456ea0ebf6f3fd57aabf955207a11cc8bd751073c6c5727ab37c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6b7916cc456ea0ebf6f3fd57aabf955207a11cc8bd751073c6c5727ab37c2d->enter($__internal_1e6b7916cc456ea0ebf6f3fd57aabf955207a11cc8bd751073c6c5727ab37c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0b58a36a4f08cbd272ea993468c2c2928dc5c1de05bb6ef5a7c7e5b1bc19dbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b58a36a4f08cbd272ea993468c2c2928dc5c1de05bb6ef5a7c7e5b1bc19dbac->enter($__internal_0b58a36a4f08cbd272ea993468c2c2928dc5c1de05bb6ef5a7c7e5b1bc19dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1e6b7916cc456ea0ebf6f3fd57aabf955207a11cc8bd751073c6c5727ab37c2d->leave($__internal_1e6b7916cc456ea0ebf6f3fd57aabf955207a11cc8bd751073c6c5727ab37c2d_prof);

        
        $__internal_0b58a36a4f08cbd272ea993468c2c2928dc5c1de05bb6ef5a7c7e5b1bc19dbac->leave($__internal_0b58a36a4f08cbd272ea993468c2c2928dc5c1de05bb6ef5a7c7e5b1bc19dbac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

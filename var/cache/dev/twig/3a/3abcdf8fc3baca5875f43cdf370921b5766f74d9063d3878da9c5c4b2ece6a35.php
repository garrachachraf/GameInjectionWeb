<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_3ebacf787b2077104ac98b098bd2848cd031a7a878d431f3ce975d2726131293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebacf787b2077104ac98b098bd2848cd031a7a878d431f3ce975d2726131293->enter($__internal_3ebacf787b2077104ac98b098bd2848cd031a7a878d431f3ce975d2726131293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_039af51bcfe394a27be107c7dfcc3ca5e5f7c15a5d31751f086eeb6497ac2d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039af51bcfe394a27be107c7dfcc3ca5e5f7c15a5d31751f086eeb6497ac2d12->enter($__internal_039af51bcfe394a27be107c7dfcc3ca5e5f7c15a5d31751f086eeb6497ac2d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3ebacf787b2077104ac98b098bd2848cd031a7a878d431f3ce975d2726131293->leave($__internal_3ebacf787b2077104ac98b098bd2848cd031a7a878d431f3ce975d2726131293_prof);

        
        $__internal_039af51bcfe394a27be107c7dfcc3ca5e5f7c15a5d31751f086eeb6497ac2d12->leave($__internal_039af51bcfe394a27be107c7dfcc3ca5e5f7c15a5d31751f086eeb6497ac2d12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

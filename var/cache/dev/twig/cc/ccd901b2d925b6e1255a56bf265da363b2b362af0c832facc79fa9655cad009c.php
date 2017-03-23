<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_36fdb6866ae8a74578e27cae2f8b324358ddb8daa8a1da38827ab364bf799c46 extends Twig_Template
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
        $__internal_aa36bb63f5c8dcd9bd08a563cf7b0e8723ab7312ed7f0e2ff7319ccc7fa1a771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa36bb63f5c8dcd9bd08a563cf7b0e8723ab7312ed7f0e2ff7319ccc7fa1a771->enter($__internal_aa36bb63f5c8dcd9bd08a563cf7b0e8723ab7312ed7f0e2ff7319ccc7fa1a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_de65beeb7ca26d16c3a1f9790b1878b62e4ae5947918db1298b618eff69f628d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de65beeb7ca26d16c3a1f9790b1878b62e4ae5947918db1298b618eff69f628d->enter($__internal_de65beeb7ca26d16c3a1f9790b1878b62e4ae5947918db1298b618eff69f628d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aa36bb63f5c8dcd9bd08a563cf7b0e8723ab7312ed7f0e2ff7319ccc7fa1a771->leave($__internal_aa36bb63f5c8dcd9bd08a563cf7b0e8723ab7312ed7f0e2ff7319ccc7fa1a771_prof);

        
        $__internal_de65beeb7ca26d16c3a1f9790b1878b62e4ae5947918db1298b618eff69f628d->leave($__internal_de65beeb7ca26d16c3a1f9790b1878b62e4ae5947918db1298b618eff69f628d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

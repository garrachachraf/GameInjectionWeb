<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_ff0cc741bf2c687fa0977a738c75f9aa4bdb8822a74e5cca5a56ed2ff768156d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0cc741bf2c687fa0977a738c75f9aa4bdb8822a74e5cca5a56ed2ff768156d->enter($__internal_ff0cc741bf2c687fa0977a738c75f9aa4bdb8822a74e5cca5a56ed2ff768156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_49f8e804005ba829fe59a0688eda0add9fc5d79985289b86d7058c5d186e8e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f8e804005ba829fe59a0688eda0add9fc5d79985289b86d7058c5d186e8e6b->enter($__internal_49f8e804005ba829fe59a0688eda0add9fc5d79985289b86d7058c5d186e8e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ff0cc741bf2c687fa0977a738c75f9aa4bdb8822a74e5cca5a56ed2ff768156d->leave($__internal_ff0cc741bf2c687fa0977a738c75f9aa4bdb8822a74e5cca5a56ed2ff768156d_prof);

        
        $__internal_49f8e804005ba829fe59a0688eda0add9fc5d79985289b86d7058c5d186e8e6b->leave($__internal_49f8e804005ba829fe59a0688eda0add9fc5d79985289b86d7058c5d186e8e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

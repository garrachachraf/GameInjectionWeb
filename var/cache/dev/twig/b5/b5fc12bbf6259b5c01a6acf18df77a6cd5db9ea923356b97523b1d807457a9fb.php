<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b2ee9e4eaf94651f112d621dbe08aa1a3e4bf8912217649f978349ff76700456 extends Twig_Template
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
        $__internal_9fef5c04d260c3755e73fac5f67c860ee9794d689af4cd8678dd19c0d8d54491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fef5c04d260c3755e73fac5f67c860ee9794d689af4cd8678dd19c0d8d54491->enter($__internal_9fef5c04d260c3755e73fac5f67c860ee9794d689af4cd8678dd19c0d8d54491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_77f7e44049d3a1899baadf5c39c0dc68e059f2a9faca5458719d1f2cfff675a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f7e44049d3a1899baadf5c39c0dc68e059f2a9faca5458719d1f2cfff675a0->enter($__internal_77f7e44049d3a1899baadf5c39c0dc68e059f2a9faca5458719d1f2cfff675a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9fef5c04d260c3755e73fac5f67c860ee9794d689af4cd8678dd19c0d8d54491->leave($__internal_9fef5c04d260c3755e73fac5f67c860ee9794d689af4cd8678dd19c0d8d54491_prof);

        
        $__internal_77f7e44049d3a1899baadf5c39c0dc68e059f2a9faca5458719d1f2cfff675a0->leave($__internal_77f7e44049d3a1899baadf5c39c0dc68e059f2a9faca5458719d1f2cfff675a0_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

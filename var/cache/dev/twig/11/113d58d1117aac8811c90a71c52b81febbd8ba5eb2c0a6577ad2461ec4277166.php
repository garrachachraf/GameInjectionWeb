<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a735a2a425de12633a6bc458f9479d9bcc4dee4de6b1e2c33c41d6927dc29925 extends Twig_Template
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
        $__internal_04efa6e1df29ca08cba929167c3dbf1163da5c7a891ffee8713d33f08f57d30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04efa6e1df29ca08cba929167c3dbf1163da5c7a891ffee8713d33f08f57d30e->enter($__internal_04efa6e1df29ca08cba929167c3dbf1163da5c7a891ffee8713d33f08f57d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7e25e6aec29249f648eda51b4f7aaf0e18902ea28000d2accb1de2dc56890731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e25e6aec29249f648eda51b4f7aaf0e18902ea28000d2accb1de2dc56890731->enter($__internal_7e25e6aec29249f648eda51b4f7aaf0e18902ea28000d2accb1de2dc56890731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_04efa6e1df29ca08cba929167c3dbf1163da5c7a891ffee8713d33f08f57d30e->leave($__internal_04efa6e1df29ca08cba929167c3dbf1163da5c7a891ffee8713d33f08f57d30e_prof);

        
        $__internal_7e25e6aec29249f648eda51b4f7aaf0e18902ea28000d2accb1de2dc56890731->leave($__internal_7e25e6aec29249f648eda51b4f7aaf0e18902ea28000d2accb1de2dc56890731_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

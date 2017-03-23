<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_506aed1c3c76ae671f272d6140f2a633d67582711d01d7600f27b1cbd9d79a78 extends Twig_Template
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
        $__internal_4747af15a6cc0d5e3af32d85fbd40e068ccd69cd873d3cb3f0661fe776f4004e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4747af15a6cc0d5e3af32d85fbd40e068ccd69cd873d3cb3f0661fe776f4004e->enter($__internal_4747af15a6cc0d5e3af32d85fbd40e068ccd69cd873d3cb3f0661fe776f4004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_06b6b6657d092f9b76315b82a0b41c9819c45ced952ac4643de83f1dc0c051c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b6b6657d092f9b76315b82a0b41c9819c45ced952ac4643de83f1dc0c051c7->enter($__internal_06b6b6657d092f9b76315b82a0b41c9819c45ced952ac4643de83f1dc0c051c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4747af15a6cc0d5e3af32d85fbd40e068ccd69cd873d3cb3f0661fe776f4004e->leave($__internal_4747af15a6cc0d5e3af32d85fbd40e068ccd69cd873d3cb3f0661fe776f4004e_prof);

        
        $__internal_06b6b6657d092f9b76315b82a0b41c9819c45ced952ac4643de83f1dc0c051c7->leave($__internal_06b6b6657d092f9b76315b82a0b41c9819c45ced952ac4643de83f1dc0c051c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

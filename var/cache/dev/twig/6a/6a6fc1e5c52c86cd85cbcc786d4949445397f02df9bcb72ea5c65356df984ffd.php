<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_42769f6a7209ce6fd5df7f2506e72b09292d9df9e99a8a28b9dde6f23adf1a21 extends Twig_Template
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
        $__internal_0dbf460969df05b438e191fd2fef1dff467d9af39c21dfb66c2964db36f8efbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbf460969df05b438e191fd2fef1dff467d9af39c21dfb66c2964db36f8efbd->enter($__internal_0dbf460969df05b438e191fd2fef1dff467d9af39c21dfb66c2964db36f8efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1c3b6a6e1d6f615526f8535813f45090aa1d98402a21f221835878d2f1a8ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b6a6e1d6f615526f8535813f45090aa1d98402a21f221835878d2f1a8ead1->enter($__internal_1c3b6a6e1d6f615526f8535813f45090aa1d98402a21f221835878d2f1a8ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0dbf460969df05b438e191fd2fef1dff467d9af39c21dfb66c2964db36f8efbd->leave($__internal_0dbf460969df05b438e191fd2fef1dff467d9af39c21dfb66c2964db36f8efbd_prof);

        
        $__internal_1c3b6a6e1d6f615526f8535813f45090aa1d98402a21f221835878d2f1a8ead1->leave($__internal_1c3b6a6e1d6f615526f8535813f45090aa1d98402a21f221835878d2f1a8ead1_prof);

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

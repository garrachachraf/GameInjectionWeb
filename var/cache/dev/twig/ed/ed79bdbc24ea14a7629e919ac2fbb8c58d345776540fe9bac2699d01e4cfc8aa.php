<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8950311a0a97302ffc2cd978334442161deaa6c691d2e4ae6a776e160789542b extends Twig_Template
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
        $__internal_95b956c5ee42e4672141709f6bf5d410d0ff679ad56176580e760ca7bd487e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b956c5ee42e4672141709f6bf5d410d0ff679ad56176580e760ca7bd487e78->enter($__internal_95b956c5ee42e4672141709f6bf5d410d0ff679ad56176580e760ca7bd487e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_13320dbde81f734b77c653ac4a1a044771add85794db8ca8bd226d5b21587b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13320dbde81f734b77c653ac4a1a044771add85794db8ca8bd226d5b21587b57->enter($__internal_13320dbde81f734b77c653ac4a1a044771add85794db8ca8bd226d5b21587b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_95b956c5ee42e4672141709f6bf5d410d0ff679ad56176580e760ca7bd487e78->leave($__internal_95b956c5ee42e4672141709f6bf5d410d0ff679ad56176580e760ca7bd487e78_prof);

        
        $__internal_13320dbde81f734b77c653ac4a1a044771add85794db8ca8bd226d5b21587b57->leave($__internal_13320dbde81f734b77c653ac4a1a044771add85794db8ca8bd226d5b21587b57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

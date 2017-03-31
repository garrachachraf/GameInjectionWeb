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
        $__internal_576c47a52ce962bc261a6c73c05a97d25d6545bf9398eece6f002f3238b5d514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576c47a52ce962bc261a6c73c05a97d25d6545bf9398eece6f002f3238b5d514->enter($__internal_576c47a52ce962bc261a6c73c05a97d25d6545bf9398eece6f002f3238b5d514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d04beb80990059ddb7f72a2701fcaded2f86e0a66f4640ddf6016b0a7a93842c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04beb80990059ddb7f72a2701fcaded2f86e0a66f4640ddf6016b0a7a93842c->enter($__internal_d04beb80990059ddb7f72a2701fcaded2f86e0a66f4640ddf6016b0a7a93842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_576c47a52ce962bc261a6c73c05a97d25d6545bf9398eece6f002f3238b5d514->leave($__internal_576c47a52ce962bc261a6c73c05a97d25d6545bf9398eece6f002f3238b5d514_prof);

        
        $__internal_d04beb80990059ddb7f72a2701fcaded2f86e0a66f4640ddf6016b0a7a93842c->leave($__internal_d04beb80990059ddb7f72a2701fcaded2f86e0a66f4640ddf6016b0a7a93842c_prof);

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

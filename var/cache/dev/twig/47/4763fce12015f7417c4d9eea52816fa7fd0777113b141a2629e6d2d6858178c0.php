<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ce4f7a7f22cbf0c83200ff04c5f5106e96782bf8a45b556866e04b41c3470bd9 extends Twig_Template
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
        $__internal_2c26c9f4348cd9a27d9333404343e4ffca4f0e260d39a6926d8a334c04c4abdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c26c9f4348cd9a27d9333404343e4ffca4f0e260d39a6926d8a334c04c4abdd->enter($__internal_2c26c9f4348cd9a27d9333404343e4ffca4f0e260d39a6926d8a334c04c4abdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3a53386c56ed81fa2cc50b4286ee7459e6ef9bcc98682f8b9ce57448f0f27610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a53386c56ed81fa2cc50b4286ee7459e6ef9bcc98682f8b9ce57448f0f27610->enter($__internal_3a53386c56ed81fa2cc50b4286ee7459e6ef9bcc98682f8b9ce57448f0f27610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2c26c9f4348cd9a27d9333404343e4ffca4f0e260d39a6926d8a334c04c4abdd->leave($__internal_2c26c9f4348cd9a27d9333404343e4ffca4f0e260d39a6926d8a334c04c4abdd_prof);

        
        $__internal_3a53386c56ed81fa2cc50b4286ee7459e6ef9bcc98682f8b9ce57448f0f27610->leave($__internal_3a53386c56ed81fa2cc50b4286ee7459e6ef9bcc98682f8b9ce57448f0f27610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

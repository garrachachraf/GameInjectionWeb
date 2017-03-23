<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6b10b417d09dc2345f9a49e008fbeb8fe73d805c380c33f411002fa0eca8b262 extends Twig_Template
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
        $__internal_a2cdbab873bd835d15fc749d882bcc269e30765bb925e4144dd7bf1b037b2df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cdbab873bd835d15fc749d882bcc269e30765bb925e4144dd7bf1b037b2df1->enter($__internal_a2cdbab873bd835d15fc749d882bcc269e30765bb925e4144dd7bf1b037b2df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8f0d6f0c0563da75555b0471d5f45dc60bd736ebce5f13e826eb1b134583716c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0d6f0c0563da75555b0471d5f45dc60bd736ebce5f13e826eb1b134583716c->enter($__internal_8f0d6f0c0563da75555b0471d5f45dc60bd736ebce5f13e826eb1b134583716c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2cdbab873bd835d15fc749d882bcc269e30765bb925e4144dd7bf1b037b2df1->leave($__internal_a2cdbab873bd835d15fc749d882bcc269e30765bb925e4144dd7bf1b037b2df1_prof);

        
        $__internal_8f0d6f0c0563da75555b0471d5f45dc60bd736ebce5f13e826eb1b134583716c->leave($__internal_8f0d6f0c0563da75555b0471d5f45dc60bd736ebce5f13e826eb1b134583716c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

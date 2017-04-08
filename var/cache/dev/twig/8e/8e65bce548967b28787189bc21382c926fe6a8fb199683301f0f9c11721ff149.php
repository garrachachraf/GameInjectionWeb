<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b5af48b39de23724e6acd3fcc1f35fe0659fbbb2a1b0cfadf889a2bb028c2de6 extends Twig_Template
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
        $__internal_e2d5df10ceab3429b5fdc11d0940a4694802e5c41f7a58a9520ae6bf4a6174a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d5df10ceab3429b5fdc11d0940a4694802e5c41f7a58a9520ae6bf4a6174a3->enter($__internal_e2d5df10ceab3429b5fdc11d0940a4694802e5c41f7a58a9520ae6bf4a6174a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f4be73b00323e28c665a42449a7904d33bbd068776522cb8285aa0fb1cb01e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4be73b00323e28c665a42449a7904d33bbd068776522cb8285aa0fb1cb01e70->enter($__internal_f4be73b00323e28c665a42449a7904d33bbd068776522cb8285aa0fb1cb01e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e2d5df10ceab3429b5fdc11d0940a4694802e5c41f7a58a9520ae6bf4a6174a3->leave($__internal_e2d5df10ceab3429b5fdc11d0940a4694802e5c41f7a58a9520ae6bf4a6174a3_prof);

        
        $__internal_f4be73b00323e28c665a42449a7904d33bbd068776522cb8285aa0fb1cb01e70->leave($__internal_f4be73b00323e28c665a42449a7904d33bbd068776522cb8285aa0fb1cb01e70_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_365a5c85e7c9b80363327913d00cd96608deab5790ed8b4aa1e2615efb0bf290 extends Twig_Template
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
        $__internal_f6f66aa0a00afaa7b2a7b02e60977058b488ceec5a04f88682bb4631f355c8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f66aa0a00afaa7b2a7b02e60977058b488ceec5a04f88682bb4631f355c8a5->enter($__internal_f6f66aa0a00afaa7b2a7b02e60977058b488ceec5a04f88682bb4631f355c8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0828203a5e1a356748879cf819cb6e843abec3786454d83dd29efce52e383c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0828203a5e1a356748879cf819cb6e843abec3786454d83dd29efce52e383c29->enter($__internal_0828203a5e1a356748879cf819cb6e843abec3786454d83dd29efce52e383c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f6f66aa0a00afaa7b2a7b02e60977058b488ceec5a04f88682bb4631f355c8a5->leave($__internal_f6f66aa0a00afaa7b2a7b02e60977058b488ceec5a04f88682bb4631f355c8a5_prof);

        
        $__internal_0828203a5e1a356748879cf819cb6e843abec3786454d83dd29efce52e383c29->leave($__internal_0828203a5e1a356748879cf819cb6e843abec3786454d83dd29efce52e383c29_prof);

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

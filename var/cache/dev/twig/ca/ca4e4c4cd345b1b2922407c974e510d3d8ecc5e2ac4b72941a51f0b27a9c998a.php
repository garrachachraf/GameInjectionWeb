<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8a4e85fe726d7f92969022465857f30fed6680f80321a9ba03d0030f87720907 extends Twig_Template
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
        $__internal_7045ce9c9d270cff522eee6699ebadae8e99dedb370b324fef2f3a3daa6f7a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7045ce9c9d270cff522eee6699ebadae8e99dedb370b324fef2f3a3daa6f7a34->enter($__internal_7045ce9c9d270cff522eee6699ebadae8e99dedb370b324fef2f3a3daa6f7a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c5ee830ff759c252c815d6bb679698195315ff7026cacc0c92b9dc0ce4cf51fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ee830ff759c252c815d6bb679698195315ff7026cacc0c92b9dc0ce4cf51fa->enter($__internal_c5ee830ff759c252c815d6bb679698195315ff7026cacc0c92b9dc0ce4cf51fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7045ce9c9d270cff522eee6699ebadae8e99dedb370b324fef2f3a3daa6f7a34->leave($__internal_7045ce9c9d270cff522eee6699ebadae8e99dedb370b324fef2f3a3daa6f7a34_prof);

        
        $__internal_c5ee830ff759c252c815d6bb679698195315ff7026cacc0c92b9dc0ce4cf51fa->leave($__internal_c5ee830ff759c252c815d6bb679698195315ff7026cacc0c92b9dc0ce4cf51fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

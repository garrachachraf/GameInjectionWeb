<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09a84480f5b09e23fc3b379d181aedc9692995c4ce1868e6aa3e41c5eabe9d05 extends Twig_Template
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
        $__internal_92eed8e85a611f121b80fe0eb2487d97b1ed8555fb35e04ebfedb0b15eaf582d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92eed8e85a611f121b80fe0eb2487d97b1ed8555fb35e04ebfedb0b15eaf582d->enter($__internal_92eed8e85a611f121b80fe0eb2487d97b1ed8555fb35e04ebfedb0b15eaf582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_be8589fe2edb43537f023f0ae4f163a29f8b06a5d05f261931379d3ddaf5dd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8589fe2edb43537f023f0ae4f163a29f8b06a5d05f261931379d3ddaf5dd59->enter($__internal_be8589fe2edb43537f023f0ae4f163a29f8b06a5d05f261931379d3ddaf5dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_92eed8e85a611f121b80fe0eb2487d97b1ed8555fb35e04ebfedb0b15eaf582d->leave($__internal_92eed8e85a611f121b80fe0eb2487d97b1ed8555fb35e04ebfedb0b15eaf582d_prof);

        
        $__internal_be8589fe2edb43537f023f0ae4f163a29f8b06a5d05f261931379d3ddaf5dd59->leave($__internal_be8589fe2edb43537f023f0ae4f163a29f8b06a5d05f261931379d3ddaf5dd59_prof);

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

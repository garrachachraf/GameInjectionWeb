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
        $__internal_a9f043a9cc7eec6d659ade36f151e3fa596b22643f3f7276a4e47074b14968be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f043a9cc7eec6d659ade36f151e3fa596b22643f3f7276a4e47074b14968be->enter($__internal_a9f043a9cc7eec6d659ade36f151e3fa596b22643f3f7276a4e47074b14968be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e1da1a2c1d45329de0418927427c43c11ca7056eea468785573323ad4a627f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da1a2c1d45329de0418927427c43c11ca7056eea468785573323ad4a627f1f->enter($__internal_e1da1a2c1d45329de0418927427c43c11ca7056eea468785573323ad4a627f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a9f043a9cc7eec6d659ade36f151e3fa596b22643f3f7276a4e47074b14968be->leave($__internal_a9f043a9cc7eec6d659ade36f151e3fa596b22643f3f7276a4e47074b14968be_prof);

        
        $__internal_e1da1a2c1d45329de0418927427c43c11ca7056eea468785573323ad4a627f1f->leave($__internal_e1da1a2c1d45329de0418927427c43c11ca7056eea468785573323ad4a627f1f_prof);

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

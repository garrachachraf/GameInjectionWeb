<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0c53af1c89efe6121b763510619a9dd339e13bb4ebc12c727799a80f96eaebda extends Twig_Template
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
        $__internal_8a47b1d09034fee2d419f1bf667c52811cb68016ecd3c7a5624c0e501f3202ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a47b1d09034fee2d419f1bf667c52811cb68016ecd3c7a5624c0e501f3202ab->enter($__internal_8a47b1d09034fee2d419f1bf667c52811cb68016ecd3c7a5624c0e501f3202ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ffa9f1819e739029d67550e1e66687e9fd9d67541f76a01b9f3149575a48f190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa9f1819e739029d67550e1e66687e9fd9d67541f76a01b9f3149575a48f190->enter($__internal_ffa9f1819e739029d67550e1e66687e9fd9d67541f76a01b9f3149575a48f190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8a47b1d09034fee2d419f1bf667c52811cb68016ecd3c7a5624c0e501f3202ab->leave($__internal_8a47b1d09034fee2d419f1bf667c52811cb68016ecd3c7a5624c0e501f3202ab_prof);

        
        $__internal_ffa9f1819e739029d67550e1e66687e9fd9d67541f76a01b9f3149575a48f190->leave($__internal_ffa9f1819e739029d67550e1e66687e9fd9d67541f76a01b9f3149575a48f190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

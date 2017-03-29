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
        $__internal_13506771aacd09750928c1fbf721b0989120612056188672d4a9bea3b714b593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13506771aacd09750928c1fbf721b0989120612056188672d4a9bea3b714b593->enter($__internal_13506771aacd09750928c1fbf721b0989120612056188672d4a9bea3b714b593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_176f05daf5c61614a7d120803dfc301ea0fa03013f55bf435a72bedcbfea75ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176f05daf5c61614a7d120803dfc301ea0fa03013f55bf435a72bedcbfea75ab->enter($__internal_176f05daf5c61614a7d120803dfc301ea0fa03013f55bf435a72bedcbfea75ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_13506771aacd09750928c1fbf721b0989120612056188672d4a9bea3b714b593->leave($__internal_13506771aacd09750928c1fbf721b0989120612056188672d4a9bea3b714b593_prof);

        
        $__internal_176f05daf5c61614a7d120803dfc301ea0fa03013f55bf435a72bedcbfea75ab->leave($__internal_176f05daf5c61614a7d120803dfc301ea0fa03013f55bf435a72bedcbfea75ab_prof);

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

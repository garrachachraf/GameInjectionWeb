<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_53ee0df16a2ab39e27bb9fd3cda0abdef2b439e70dd142e7445d11d7995092c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ee0df16a2ab39e27bb9fd3cda0abdef2b439e70dd142e7445d11d7995092c3->enter($__internal_53ee0df16a2ab39e27bb9fd3cda0abdef2b439e70dd142e7445d11d7995092c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_760f129ebcbf8b41ed3025c2982d0a716b3b6a74a269bf643d4e3c203a7ebc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760f129ebcbf8b41ed3025c2982d0a716b3b6a74a269bf643d4e3c203a7ebc46->enter($__internal_760f129ebcbf8b41ed3025c2982d0a716b3b6a74a269bf643d4e3c203a7ebc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_53ee0df16a2ab39e27bb9fd3cda0abdef2b439e70dd142e7445d11d7995092c3->leave($__internal_53ee0df16a2ab39e27bb9fd3cda0abdef2b439e70dd142e7445d11d7995092c3_prof);

        
        $__internal_760f129ebcbf8b41ed3025c2982d0a716b3b6a74a269bf643d4e3c203a7ebc46->leave($__internal_760f129ebcbf8b41ed3025c2982d0a716b3b6a74a269bf643d4e3c203a7ebc46_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

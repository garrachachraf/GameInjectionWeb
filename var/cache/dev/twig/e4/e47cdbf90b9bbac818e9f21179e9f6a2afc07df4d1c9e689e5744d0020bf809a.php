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
        $__internal_8e414dcb12ecb092234189b1f3a8161e042ec8bae4ac1dd22e76bf5c1332a7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e414dcb12ecb092234189b1f3a8161e042ec8bae4ac1dd22e76bf5c1332a7d8->enter($__internal_8e414dcb12ecb092234189b1f3a8161e042ec8bae4ac1dd22e76bf5c1332a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c4e8860e4fb3532095deab5211aaa13eb01e684f14614ab517fceff1b98bc909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e8860e4fb3532095deab5211aaa13eb01e684f14614ab517fceff1b98bc909->enter($__internal_c4e8860e4fb3532095deab5211aaa13eb01e684f14614ab517fceff1b98bc909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8e414dcb12ecb092234189b1f3a8161e042ec8bae4ac1dd22e76bf5c1332a7d8->leave($__internal_8e414dcb12ecb092234189b1f3a8161e042ec8bae4ac1dd22e76bf5c1332a7d8_prof);

        
        $__internal_c4e8860e4fb3532095deab5211aaa13eb01e684f14614ab517fceff1b98bc909->leave($__internal_c4e8860e4fb3532095deab5211aaa13eb01e684f14614ab517fceff1b98bc909_prof);

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

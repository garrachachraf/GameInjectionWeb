<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dac49223f31afcca115cf0f5a215056ab0d218e3a4aaec997235e0051401e474 extends Twig_Template
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
        $__internal_b5cc1d32e2d364d585709356156ca49982346666e2db7c0d11aed5248e9ba259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cc1d32e2d364d585709356156ca49982346666e2db7c0d11aed5248e9ba259->enter($__internal_b5cc1d32e2d364d585709356156ca49982346666e2db7c0d11aed5248e9ba259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e8c750fe18966d1e1cbda6d1dfd36e51635dda7db1774df926e51913747125b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c750fe18966d1e1cbda6d1dfd36e51635dda7db1774df926e51913747125b3->enter($__internal_e8c750fe18966d1e1cbda6d1dfd36e51635dda7db1774df926e51913747125b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b5cc1d32e2d364d585709356156ca49982346666e2db7c0d11aed5248e9ba259->leave($__internal_b5cc1d32e2d364d585709356156ca49982346666e2db7c0d11aed5248e9ba259_prof);

        
        $__internal_e8c750fe18966d1e1cbda6d1dfd36e51635dda7db1774df926e51913747125b3->leave($__internal_e8c750fe18966d1e1cbda6d1dfd36e51635dda7db1774df926e51913747125b3_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

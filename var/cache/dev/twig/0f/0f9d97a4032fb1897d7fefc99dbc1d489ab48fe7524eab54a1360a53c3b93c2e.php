<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2a57a6db80c7a081032cfb13857c575042502c48d6c045cc7b86d34c5b43191a extends Twig_Template
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
        $__internal_14fcbb9525e34d894f422d0ba56ed6ec84083ad26af49a660973b6710f5303dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fcbb9525e34d894f422d0ba56ed6ec84083ad26af49a660973b6710f5303dc->enter($__internal_14fcbb9525e34d894f422d0ba56ed6ec84083ad26af49a660973b6710f5303dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d9addd5068f9cb44c78ebc2f7d45b80e708b17a7380170207488a27f182b23e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9addd5068f9cb44c78ebc2f7d45b80e708b17a7380170207488a27f182b23e6->enter($__internal_d9addd5068f9cb44c78ebc2f7d45b80e708b17a7380170207488a27f182b23e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_14fcbb9525e34d894f422d0ba56ed6ec84083ad26af49a660973b6710f5303dc->leave($__internal_14fcbb9525e34d894f422d0ba56ed6ec84083ad26af49a660973b6710f5303dc_prof);

        
        $__internal_d9addd5068f9cb44c78ebc2f7d45b80e708b17a7380170207488a27f182b23e6->leave($__internal_d9addd5068f9cb44c78ebc2f7d45b80e708b17a7380170207488a27f182b23e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

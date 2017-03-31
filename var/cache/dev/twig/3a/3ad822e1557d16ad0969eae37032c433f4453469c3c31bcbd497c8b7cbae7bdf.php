<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0bb7e6b8630edd06e7a98062ff4a9b607c09da7c736d116a38aad018ee9e694e extends Twig_Template
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
        $__internal_6fba398084c39ab1ef1d341f8884c56cef9d09ff6b1b5b4ee3c52b7de5066ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fba398084c39ab1ef1d341f8884c56cef9d09ff6b1b5b4ee3c52b7de5066ec6->enter($__internal_6fba398084c39ab1ef1d341f8884c56cef9d09ff6b1b5b4ee3c52b7de5066ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_08a3dc280ae997d2c10c796fa54368d05118a883b3757fed29e905a67f2011c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a3dc280ae997d2c10c796fa54368d05118a883b3757fed29e905a67f2011c4->enter($__internal_08a3dc280ae997d2c10c796fa54368d05118a883b3757fed29e905a67f2011c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fba398084c39ab1ef1d341f8884c56cef9d09ff6b1b5b4ee3c52b7de5066ec6->leave($__internal_6fba398084c39ab1ef1d341f8884c56cef9d09ff6b1b5b4ee3c52b7de5066ec6_prof);

        
        $__internal_08a3dc280ae997d2c10c796fa54368d05118a883b3757fed29e905a67f2011c4->leave($__internal_08a3dc280ae997d2c10c796fa54368d05118a883b3757fed29e905a67f2011c4_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

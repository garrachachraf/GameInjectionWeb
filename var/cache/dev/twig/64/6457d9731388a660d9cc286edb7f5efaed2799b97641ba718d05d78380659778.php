<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_add3672ef6a3f67a00a7458395ac57d883710e0130d84bf0171008fbedaac4da extends Twig_Template
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
        $__internal_4c27c67ec9552190a1fe1e47d6f01d63bc12e86902e84e4913f63e40cd3d2b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c27c67ec9552190a1fe1e47d6f01d63bc12e86902e84e4913f63e40cd3d2b81->enter($__internal_4c27c67ec9552190a1fe1e47d6f01d63bc12e86902e84e4913f63e40cd3d2b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cc4c40c9d553a1174818619c59479a56c63f833c003e62cc8ea9aa4830f945f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4c40c9d553a1174818619c59479a56c63f833c003e62cc8ea9aa4830f945f6->enter($__internal_cc4c40c9d553a1174818619c59479a56c63f833c003e62cc8ea9aa4830f945f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4c27c67ec9552190a1fe1e47d6f01d63bc12e86902e84e4913f63e40cd3d2b81->leave($__internal_4c27c67ec9552190a1fe1e47d6f01d63bc12e86902e84e4913f63e40cd3d2b81_prof);

        
        $__internal_cc4c40c9d553a1174818619c59479a56c63f833c003e62cc8ea9aa4830f945f6->leave($__internal_cc4c40c9d553a1174818619c59479a56c63f833c003e62cc8ea9aa4830f945f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

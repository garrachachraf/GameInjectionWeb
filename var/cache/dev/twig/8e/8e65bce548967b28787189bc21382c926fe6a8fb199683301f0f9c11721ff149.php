<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b5af48b39de23724e6acd3fcc1f35fe0659fbbb2a1b0cfadf889a2bb028c2de6 extends Twig_Template
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
        $__internal_7ce0c780ef0f1c22e52f152a1b56d2e9fff326df753de1b7c943a4738252b0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce0c780ef0f1c22e52f152a1b56d2e9fff326df753de1b7c943a4738252b0a5->enter($__internal_7ce0c780ef0f1c22e52f152a1b56d2e9fff326df753de1b7c943a4738252b0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_af473956b570f896b1a38cffb3bdec10a802b406b048d22002a2f0c1c6a2e9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af473956b570f896b1a38cffb3bdec10a802b406b048d22002a2f0c1c6a2e9dc->enter($__internal_af473956b570f896b1a38cffb3bdec10a802b406b048d22002a2f0c1c6a2e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7ce0c780ef0f1c22e52f152a1b56d2e9fff326df753de1b7c943a4738252b0a5->leave($__internal_7ce0c780ef0f1c22e52f152a1b56d2e9fff326df753de1b7c943a4738252b0a5_prof);

        
        $__internal_af473956b570f896b1a38cffb3bdec10a802b406b048d22002a2f0c1c6a2e9dc->leave($__internal_af473956b570f896b1a38cffb3bdec10a802b406b048d22002a2f0c1c6a2e9dc_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

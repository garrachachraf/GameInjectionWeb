<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a2437f496249e103dc28a053f1916611c284807327d26c68304fbc0166d61000 extends Twig_Template
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
        $__internal_44e99798862ae83ceb6ecf2db930e20d35e08a8e54cd105552a638ff88ee8d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e99798862ae83ceb6ecf2db930e20d35e08a8e54cd105552a638ff88ee8d91->enter($__internal_44e99798862ae83ceb6ecf2db930e20d35e08a8e54cd105552a638ff88ee8d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4d26063983624df0338d86e7d1972378d02c4e51a6926f614e981673ab137865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d26063983624df0338d86e7d1972378d02c4e51a6926f614e981673ab137865->enter($__internal_4d26063983624df0338d86e7d1972378d02c4e51a6926f614e981673ab137865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_44e99798862ae83ceb6ecf2db930e20d35e08a8e54cd105552a638ff88ee8d91->leave($__internal_44e99798862ae83ceb6ecf2db930e20d35e08a8e54cd105552a638ff88ee8d91_prof);

        
        $__internal_4d26063983624df0338d86e7d1972378d02c4e51a6926f614e981673ab137865->leave($__internal_4d26063983624df0338d86e7d1972378d02c4e51a6926f614e981673ab137865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

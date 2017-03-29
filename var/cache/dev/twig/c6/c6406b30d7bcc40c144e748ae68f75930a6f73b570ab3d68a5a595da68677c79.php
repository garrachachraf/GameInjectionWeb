<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bdfebe2f35f2462d0a22b73f78664045790a8ed3b94492e78b435c5a27e6ca08 extends Twig_Template
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
        $__internal_1b0fc335b251e86c4482778cd08ab439323398cf1fc7f3e07f31a5dda388f90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0fc335b251e86c4482778cd08ab439323398cf1fc7f3e07f31a5dda388f90d->enter($__internal_1b0fc335b251e86c4482778cd08ab439323398cf1fc7f3e07f31a5dda388f90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4ae6ffcd454198e3fedbbdf53ed808ef183b6a5a7d3c75ce076f93e93febc39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae6ffcd454198e3fedbbdf53ed808ef183b6a5a7d3c75ce076f93e93febc39d->enter($__internal_4ae6ffcd454198e3fedbbdf53ed808ef183b6a5a7d3c75ce076f93e93febc39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1b0fc335b251e86c4482778cd08ab439323398cf1fc7f3e07f31a5dda388f90d->leave($__internal_1b0fc335b251e86c4482778cd08ab439323398cf1fc7f3e07f31a5dda388f90d_prof);

        
        $__internal_4ae6ffcd454198e3fedbbdf53ed808ef183b6a5a7d3c75ce076f93e93febc39d->leave($__internal_4ae6ffcd454198e3fedbbdf53ed808ef183b6a5a7d3c75ce076f93e93febc39d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5f723c9b9d4bc7af794bc86c8162fb9e57f4715dd7ab157fe72ce068445cba07 extends Twig_Template
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
        $__internal_4cc30ba53d2da5741ed47b5c18395c4c047bae24c375250d7e30131d3477e398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc30ba53d2da5741ed47b5c18395c4c047bae24c375250d7e30131d3477e398->enter($__internal_4cc30ba53d2da5741ed47b5c18395c4c047bae24c375250d7e30131d3477e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5c6daf912024e7672e5c7eff748a9f09efc2408448623f874ffd5ecb99f63bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6daf912024e7672e5c7eff748a9f09efc2408448623f874ffd5ecb99f63bb0->enter($__internal_5c6daf912024e7672e5c7eff748a9f09efc2408448623f874ffd5ecb99f63bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4cc30ba53d2da5741ed47b5c18395c4c047bae24c375250d7e30131d3477e398->leave($__internal_4cc30ba53d2da5741ed47b5c18395c4c047bae24c375250d7e30131d3477e398_prof);

        
        $__internal_5c6daf912024e7672e5c7eff748a9f09efc2408448623f874ffd5ecb99f63bb0->leave($__internal_5c6daf912024e7672e5c7eff748a9f09efc2408448623f874ffd5ecb99f63bb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
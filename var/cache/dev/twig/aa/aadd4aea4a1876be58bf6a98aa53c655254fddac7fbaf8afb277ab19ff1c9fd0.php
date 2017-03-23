<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bbca4da8d2a18958e352d3587d84ed75c5d17dfb5e8897e3331ecaa8f83ed884 extends Twig_Template
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
        $__internal_01ff2e5247cc3fdda27490de5aa0519b8371c251413ac1a637b3f1b013ced12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ff2e5247cc3fdda27490de5aa0519b8371c251413ac1a637b3f1b013ced12c->enter($__internal_01ff2e5247cc3fdda27490de5aa0519b8371c251413ac1a637b3f1b013ced12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bb7706faa6936033aa12dc7b729b1e19eb4c6242fc1a9fa486ed5a8355559c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7706faa6936033aa12dc7b729b1e19eb4c6242fc1a9fa486ed5a8355559c7b->enter($__internal_bb7706faa6936033aa12dc7b729b1e19eb4c6242fc1a9fa486ed5a8355559c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_01ff2e5247cc3fdda27490de5aa0519b8371c251413ac1a637b3f1b013ced12c->leave($__internal_01ff2e5247cc3fdda27490de5aa0519b8371c251413ac1a637b3f1b013ced12c_prof);

        
        $__internal_bb7706faa6936033aa12dc7b729b1e19eb4c6242fc1a9fa486ed5a8355559c7b->leave($__internal_bb7706faa6936033aa12dc7b729b1e19eb4c6242fc1a9fa486ed5a8355559c7b_prof);

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

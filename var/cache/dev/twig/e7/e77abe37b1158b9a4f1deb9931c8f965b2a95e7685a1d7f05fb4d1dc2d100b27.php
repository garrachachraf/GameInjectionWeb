<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c9a117c0b140f92f427d6ae8d5f8ff246a253bdf3c82e35602e0dd5e9be33a1e extends Twig_Template
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
        $__internal_d08626384f00093ab4222553370b8ce88afa3ad20ca860f9ce968cca9cc34db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08626384f00093ab4222553370b8ce88afa3ad20ca860f9ce968cca9cc34db3->enter($__internal_d08626384f00093ab4222553370b8ce88afa3ad20ca860f9ce968cca9cc34db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9b653577f37c42df1c86c44df5cc03d6f8a1314d349d57c86a689ccff4fa54e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b653577f37c42df1c86c44df5cc03d6f8a1314d349d57c86a689ccff4fa54e4->enter($__internal_9b653577f37c42df1c86c44df5cc03d6f8a1314d349d57c86a689ccff4fa54e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d08626384f00093ab4222553370b8ce88afa3ad20ca860f9ce968cca9cc34db3->leave($__internal_d08626384f00093ab4222553370b8ce88afa3ad20ca860f9ce968cca9cc34db3_prof);

        
        $__internal_9b653577f37c42df1c86c44df5cc03d6f8a1314d349d57c86a689ccff4fa54e4->leave($__internal_9b653577f37c42df1c86c44df5cc03d6f8a1314d349d57c86a689ccff4fa54e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

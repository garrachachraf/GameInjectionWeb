<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c28b78d6b26471c0417b73fe6745ccf94cc04411900d7a01ebf36744a735864 extends Twig_Template
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
        $__internal_f474c397b351de383e886268186872480d148ae1471f90009df8e9f298ba644f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f474c397b351de383e886268186872480d148ae1471f90009df8e9f298ba644f->enter($__internal_f474c397b351de383e886268186872480d148ae1471f90009df8e9f298ba644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4ade6f1a9d1c372c1fdf9c40204326b7c0a9adddf33209e6715172067701ced3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ade6f1a9d1c372c1fdf9c40204326b7c0a9adddf33209e6715172067701ced3->enter($__internal_4ade6f1a9d1c372c1fdf9c40204326b7c0a9adddf33209e6715172067701ced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f474c397b351de383e886268186872480d148ae1471f90009df8e9f298ba644f->leave($__internal_f474c397b351de383e886268186872480d148ae1471f90009df8e9f298ba644f_prof);

        
        $__internal_4ade6f1a9d1c372c1fdf9c40204326b7c0a9adddf33209e6715172067701ced3->leave($__internal_4ade6f1a9d1c372c1fdf9c40204326b7c0a9adddf33209e6715172067701ced3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

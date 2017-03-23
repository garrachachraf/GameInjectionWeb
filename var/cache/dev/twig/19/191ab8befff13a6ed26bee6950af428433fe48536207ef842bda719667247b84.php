<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fbec2c376f212600105846c348f93db19590a114bdfb973bf78719d0e66c0fe7 extends Twig_Template
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
        $__internal_e238a92819945cae1d2e10df51d3e87e4afc75dbba32f49c90b7e55f58456510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e238a92819945cae1d2e10df51d3e87e4afc75dbba32f49c90b7e55f58456510->enter($__internal_e238a92819945cae1d2e10df51d3e87e4afc75dbba32f49c90b7e55f58456510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_faf14f1260dc551539f1a5504b167aacab75b3362b8875da4f5d073edd91ae9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf14f1260dc551539f1a5504b167aacab75b3362b8875da4f5d073edd91ae9d->enter($__internal_faf14f1260dc551539f1a5504b167aacab75b3362b8875da4f5d073edd91ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e238a92819945cae1d2e10df51d3e87e4afc75dbba32f49c90b7e55f58456510->leave($__internal_e238a92819945cae1d2e10df51d3e87e4afc75dbba32f49c90b7e55f58456510_prof);

        
        $__internal_faf14f1260dc551539f1a5504b167aacab75b3362b8875da4f5d073edd91ae9d->leave($__internal_faf14f1260dc551539f1a5504b167aacab75b3362b8875da4f5d073edd91ae9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

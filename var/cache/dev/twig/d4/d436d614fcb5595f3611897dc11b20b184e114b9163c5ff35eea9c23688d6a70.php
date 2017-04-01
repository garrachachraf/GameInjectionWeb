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
        $__internal_11fe5069f34fe75b93b218b59a3fa41fad2ea8266ceae167dd2b37810de3d27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fe5069f34fe75b93b218b59a3fa41fad2ea8266ceae167dd2b37810de3d27b->enter($__internal_11fe5069f34fe75b93b218b59a3fa41fad2ea8266ceae167dd2b37810de3d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_cb60040bd905a35bdabf3bc43a7634381b9a962c734016f9b450693c7e43add7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb60040bd905a35bdabf3bc43a7634381b9a962c734016f9b450693c7e43add7->enter($__internal_cb60040bd905a35bdabf3bc43a7634381b9a962c734016f9b450693c7e43add7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_11fe5069f34fe75b93b218b59a3fa41fad2ea8266ceae167dd2b37810de3d27b->leave($__internal_11fe5069f34fe75b93b218b59a3fa41fad2ea8266ceae167dd2b37810de3d27b_prof);

        
        $__internal_cb60040bd905a35bdabf3bc43a7634381b9a962c734016f9b450693c7e43add7->leave($__internal_cb60040bd905a35bdabf3bc43a7634381b9a962c734016f9b450693c7e43add7_prof);

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

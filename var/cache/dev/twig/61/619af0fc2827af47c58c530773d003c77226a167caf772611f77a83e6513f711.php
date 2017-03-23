<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3dc0418d96bc3b000e87ad5e8e6c2cf073117378e8c4b75194b6ae08c64a86b1 extends Twig_Template
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
        $__internal_91f9b4718c369618a5775607870b46f61f56da95119ee3214e612ddc902243e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f9b4718c369618a5775607870b46f61f56da95119ee3214e612ddc902243e0->enter($__internal_91f9b4718c369618a5775607870b46f61f56da95119ee3214e612ddc902243e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c487945549f5900399703d9ba38d2fdbaf1a40d6208c21db93b3f91182ea483f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c487945549f5900399703d9ba38d2fdbaf1a40d6208c21db93b3f91182ea483f->enter($__internal_c487945549f5900399703d9ba38d2fdbaf1a40d6208c21db93b3f91182ea483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_91f9b4718c369618a5775607870b46f61f56da95119ee3214e612ddc902243e0->leave($__internal_91f9b4718c369618a5775607870b46f61f56da95119ee3214e612ddc902243e0_prof);

        
        $__internal_c487945549f5900399703d9ba38d2fdbaf1a40d6208c21db93b3f91182ea483f->leave($__internal_c487945549f5900399703d9ba38d2fdbaf1a40d6208c21db93b3f91182ea483f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

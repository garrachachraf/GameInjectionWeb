<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_07d6ca50db1b4c8469dc6487ca3087f0e79ba7249e1ebbcf4153b7de1ba68463 extends Twig_Template
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
        $__internal_6aefa62fd0c4065da4f4fe6f0e835ca3535ae5cc8f8f8ae56133f4752d1317d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aefa62fd0c4065da4f4fe6f0e835ca3535ae5cc8f8f8ae56133f4752d1317d3->enter($__internal_6aefa62fd0c4065da4f4fe6f0e835ca3535ae5cc8f8f8ae56133f4752d1317d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_098958d71d8be1fed524311876db22fbe2305decbeb32d84de190898a0a17727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098958d71d8be1fed524311876db22fbe2305decbeb32d84de190898a0a17727->enter($__internal_098958d71d8be1fed524311876db22fbe2305decbeb32d84de190898a0a17727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6aefa62fd0c4065da4f4fe6f0e835ca3535ae5cc8f8f8ae56133f4752d1317d3->leave($__internal_6aefa62fd0c4065da4f4fe6f0e835ca3535ae5cc8f8f8ae56133f4752d1317d3_prof);

        
        $__internal_098958d71d8be1fed524311876db22fbe2305decbeb32d84de190898a0a17727->leave($__internal_098958d71d8be1fed524311876db22fbe2305decbeb32d84de190898a0a17727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

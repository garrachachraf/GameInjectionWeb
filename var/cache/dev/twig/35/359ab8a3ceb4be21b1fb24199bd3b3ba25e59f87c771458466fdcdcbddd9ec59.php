<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_4086afb161b03a3d929f9649ad706683060a1ae6f18374973dd95551f7bac2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4086afb161b03a3d929f9649ad706683060a1ae6f18374973dd95551f7bac2e4->enter($__internal_4086afb161b03a3d929f9649ad706683060a1ae6f18374973dd95551f7bac2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_52dac3a321c05d1ba748f7bfc4befa72385bbc66ebc4c540bab3bb5560176a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dac3a321c05d1ba748f7bfc4befa72385bbc66ebc4c540bab3bb5560176a4c->enter($__internal_52dac3a321c05d1ba748f7bfc4befa72385bbc66ebc4c540bab3bb5560176a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4086afb161b03a3d929f9649ad706683060a1ae6f18374973dd95551f7bac2e4->leave($__internal_4086afb161b03a3d929f9649ad706683060a1ae6f18374973dd95551f7bac2e4_prof);

        
        $__internal_52dac3a321c05d1ba748f7bfc4befa72385bbc66ebc4c540bab3bb5560176a4c->leave($__internal_52dac3a321c05d1ba748f7bfc4befa72385bbc66ebc4c540bab3bb5560176a4c_prof);

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
", "@Framework/Form/form_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

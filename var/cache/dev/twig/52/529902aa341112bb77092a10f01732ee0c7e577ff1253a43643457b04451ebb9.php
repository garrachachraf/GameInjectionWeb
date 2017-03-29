<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a3d668d321c94361a08a6b016b000fbb6cf2fe4320aa72ec89c2b42ce29ba02e extends Twig_Template
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
        $__internal_47764d2694cd1f8819d4b1899d468a420a8ae635a8040ded5bf8b994b958a102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47764d2694cd1f8819d4b1899d468a420a8ae635a8040ded5bf8b994b958a102->enter($__internal_47764d2694cd1f8819d4b1899d468a420a8ae635a8040ded5bf8b994b958a102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f4192fa428d89a9bec388d09d45b341302dc428f5c7e57a71828c3739210755b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4192fa428d89a9bec388d09d45b341302dc428f5c7e57a71828c3739210755b->enter($__internal_f4192fa428d89a9bec388d09d45b341302dc428f5c7e57a71828c3739210755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_47764d2694cd1f8819d4b1899d468a420a8ae635a8040ded5bf8b994b958a102->leave($__internal_47764d2694cd1f8819d4b1899d468a420a8ae635a8040ded5bf8b994b958a102_prof);

        
        $__internal_f4192fa428d89a9bec388d09d45b341302dc428f5c7e57a71828c3739210755b->leave($__internal_f4192fa428d89a9bec388d09d45b341302dc428f5c7e57a71828c3739210755b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

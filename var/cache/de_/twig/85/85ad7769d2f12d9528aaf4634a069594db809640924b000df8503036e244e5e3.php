<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_40a4e68458302436370acd4ce0be2ff1e79e71aea4d6d59f9f6737030b4ec1f7 extends Twig_Template
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
        $__internal_b4d2a7e54917458e1751745559fe5554321734372922056a83979c4c17ac7eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d2a7e54917458e1751745559fe5554321734372922056a83979c4c17ac7eac->enter($__internal_b4d2a7e54917458e1751745559fe5554321734372922056a83979c4c17ac7eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6952fb87d953e7dea1eb139849fe61e85cfcd6ac4e8d2785046787fdd30b4e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6952fb87d953e7dea1eb139849fe61e85cfcd6ac4e8d2785046787fdd30b4e20->enter($__internal_6952fb87d953e7dea1eb139849fe61e85cfcd6ac4e8d2785046787fdd30b4e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b4d2a7e54917458e1751745559fe5554321734372922056a83979c4c17ac7eac->leave($__internal_b4d2a7e54917458e1751745559fe5554321734372922056a83979c4c17ac7eac_prof);

        
        $__internal_6952fb87d953e7dea1eb139849fe61e85cfcd6ac4e8d2785046787fdd30b4e20->leave($__internal_6952fb87d953e7dea1eb139849fe61e85cfcd6ac4e8d2785046787fdd30b4e20_prof);

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

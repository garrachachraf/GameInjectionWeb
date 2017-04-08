<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b1c037c5ab5d5c35b527c47c974ce52518c99cf0bdcff6698e9b6fda739d78bd extends Twig_Template
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
        $__internal_a4a554742dddba87c2762204116782f9cb058a3d3314e6b9aa3c827a08206408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a554742dddba87c2762204116782f9cb058a3d3314e6b9aa3c827a08206408->enter($__internal_a4a554742dddba87c2762204116782f9cb058a3d3314e6b9aa3c827a08206408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_52d84837b242fb3ba552e3e4e19c110c7f751a788e900873ede7dee796482052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d84837b242fb3ba552e3e4e19c110c7f751a788e900873ede7dee796482052->enter($__internal_52d84837b242fb3ba552e3e4e19c110c7f751a788e900873ede7dee796482052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a4a554742dddba87c2762204116782f9cb058a3d3314e6b9aa3c827a08206408->leave($__internal_a4a554742dddba87c2762204116782f9cb058a3d3314e6b9aa3c827a08206408_prof);

        
        $__internal_52d84837b242fb3ba552e3e4e19c110c7f751a788e900873ede7dee796482052->leave($__internal_52d84837b242fb3ba552e3e4e19c110c7f751a788e900873ede7dee796482052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

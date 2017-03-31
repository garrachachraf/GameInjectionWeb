<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4cc805bd5ef02c77ba08c640e091a923bb68fd1f73a38e9c3ff2357edd8c8ae0 extends Twig_Template
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
        $__internal_23d12c6ed9ed89d9c22e97b6de5352a49e7d2e328fc2f647748a152cceb8faed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d12c6ed9ed89d9c22e97b6de5352a49e7d2e328fc2f647748a152cceb8faed->enter($__internal_23d12c6ed9ed89d9c22e97b6de5352a49e7d2e328fc2f647748a152cceb8faed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8b0910bd55f6e27628aed5401628ae21bed5c0a3c1e7504f2ba9327d084da497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0910bd55f6e27628aed5401628ae21bed5c0a3c1e7504f2ba9327d084da497->enter($__internal_8b0910bd55f6e27628aed5401628ae21bed5c0a3c1e7504f2ba9327d084da497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_23d12c6ed9ed89d9c22e97b6de5352a49e7d2e328fc2f647748a152cceb8faed->leave($__internal_23d12c6ed9ed89d9c22e97b6de5352a49e7d2e328fc2f647748a152cceb8faed_prof);

        
        $__internal_8b0910bd55f6e27628aed5401628ae21bed5c0a3c1e7504f2ba9327d084da497->leave($__internal_8b0910bd55f6e27628aed5401628ae21bed5c0a3c1e7504f2ba9327d084da497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

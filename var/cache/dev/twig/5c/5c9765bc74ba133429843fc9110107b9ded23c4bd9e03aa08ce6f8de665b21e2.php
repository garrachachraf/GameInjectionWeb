<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66f3a924bbe284e5e3802d8430a9147867f45d1d1b278a12314c47f973608779 extends Twig_Template
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
        $__internal_600080869a5b6cd07bac18b3a1ecc9ea4caa19f6dfdb187554c3e5f9eac6fc71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600080869a5b6cd07bac18b3a1ecc9ea4caa19f6dfdb187554c3e5f9eac6fc71->enter($__internal_600080869a5b6cd07bac18b3a1ecc9ea4caa19f6dfdb187554c3e5f9eac6fc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d7fba63d802ac4af268ef65974f1411cade87ade13e8a68676c4cc2ee64ff0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fba63d802ac4af268ef65974f1411cade87ade13e8a68676c4cc2ee64ff0ce->enter($__internal_d7fba63d802ac4af268ef65974f1411cade87ade13e8a68676c4cc2ee64ff0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_600080869a5b6cd07bac18b3a1ecc9ea4caa19f6dfdb187554c3e5f9eac6fc71->leave($__internal_600080869a5b6cd07bac18b3a1ecc9ea4caa19f6dfdb187554c3e5f9eac6fc71_prof);

        
        $__internal_d7fba63d802ac4af268ef65974f1411cade87ade13e8a68676c4cc2ee64ff0ce->leave($__internal_d7fba63d802ac4af268ef65974f1411cade87ade13e8a68676c4cc2ee64ff0ce_prof);

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

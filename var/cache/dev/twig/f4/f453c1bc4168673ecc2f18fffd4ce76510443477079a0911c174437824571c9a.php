<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_85650481f4e864a1eebaf4b3f4e5b0611e92197c9c8ce5b1f78e0539251cce27 extends Twig_Template
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
        $__internal_0eb3b04526778c75f71486c3d4613a9ba064e89b1dbd55681de100c0754cdb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb3b04526778c75f71486c3d4613a9ba064e89b1dbd55681de100c0754cdb6e->enter($__internal_0eb3b04526778c75f71486c3d4613a9ba064e89b1dbd55681de100c0754cdb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c87c9b5f7eb8e3f29a195f71da4e41707b78f37a32a7d9919c5b1151437a6c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87c9b5f7eb8e3f29a195f71da4e41707b78f37a32a7d9919c5b1151437a6c38->enter($__internal_c87c9b5f7eb8e3f29a195f71da4e41707b78f37a32a7d9919c5b1151437a6c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0eb3b04526778c75f71486c3d4613a9ba064e89b1dbd55681de100c0754cdb6e->leave($__internal_0eb3b04526778c75f71486c3d4613a9ba064e89b1dbd55681de100c0754cdb6e_prof);

        
        $__internal_c87c9b5f7eb8e3f29a195f71da4e41707b78f37a32a7d9919c5b1151437a6c38->leave($__internal_c87c9b5f7eb8e3f29a195f71da4e41707b78f37a32a7d9919c5b1151437a6c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3de5f78f9eb4cc47f605f5264e246094a09aaca6af48a5384159db0fe7cabce9 extends Twig_Template
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
        $__internal_2a56a632bf4908d0d3d1fbc3f45698cc2267e6406d3f89e5d32a595a833de9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a56a632bf4908d0d3d1fbc3f45698cc2267e6406d3f89e5d32a595a833de9fd->enter($__internal_2a56a632bf4908d0d3d1fbc3f45698cc2267e6406d3f89e5d32a595a833de9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9730255eb3f1a6faeb64eb2af6c40aa6c26b46f78516819ee8eba946798898b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9730255eb3f1a6faeb64eb2af6c40aa6c26b46f78516819ee8eba946798898b6->enter($__internal_9730255eb3f1a6faeb64eb2af6c40aa6c26b46f78516819ee8eba946798898b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2a56a632bf4908d0d3d1fbc3f45698cc2267e6406d3f89e5d32a595a833de9fd->leave($__internal_2a56a632bf4908d0d3d1fbc3f45698cc2267e6406d3f89e5d32a595a833de9fd_prof);

        
        $__internal_9730255eb3f1a6faeb64eb2af6c40aa6c26b46f78516819ee8eba946798898b6->leave($__internal_9730255eb3f1a6faeb64eb2af6c40aa6c26b46f78516819ee8eba946798898b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

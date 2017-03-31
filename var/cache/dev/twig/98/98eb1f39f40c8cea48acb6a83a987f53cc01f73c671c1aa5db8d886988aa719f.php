<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7b6b24dad2c3d09f0721cbbae4f095fbbe739271ec7e70aef6fd1ae7a24a029 extends Twig_Template
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
        $__internal_3cc5f1390728cc4c53e718a05dc8d2eac888020cb6d86c34efbfd680aeacfd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc5f1390728cc4c53e718a05dc8d2eac888020cb6d86c34efbfd680aeacfd4f->enter($__internal_3cc5f1390728cc4c53e718a05dc8d2eac888020cb6d86c34efbfd680aeacfd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fdd5e2df1e70ed1568d755d8b3ce77811373915831840174002ec56617c5592b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd5e2df1e70ed1568d755d8b3ce77811373915831840174002ec56617c5592b->enter($__internal_fdd5e2df1e70ed1568d755d8b3ce77811373915831840174002ec56617c5592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3cc5f1390728cc4c53e718a05dc8d2eac888020cb6d86c34efbfd680aeacfd4f->leave($__internal_3cc5f1390728cc4c53e718a05dc8d2eac888020cb6d86c34efbfd680aeacfd4f_prof);

        
        $__internal_fdd5e2df1e70ed1568d755d8b3ce77811373915831840174002ec56617c5592b->leave($__internal_fdd5e2df1e70ed1568d755d8b3ce77811373915831840174002ec56617c5592b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

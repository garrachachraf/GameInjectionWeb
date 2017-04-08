<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3add72b5d93c9d5ccf50277f381abfcc319082ec45028f5627792ac71d4006e7 extends Twig_Template
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
        $__internal_c384c24bb0a3eb2ad8eb59e1bb3f05dc42fc776d3502ec1975b8e5cbf8cabbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c384c24bb0a3eb2ad8eb59e1bb3f05dc42fc776d3502ec1975b8e5cbf8cabbce->enter($__internal_c384c24bb0a3eb2ad8eb59e1bb3f05dc42fc776d3502ec1975b8e5cbf8cabbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5eec21c97f631ba8f5218c8f3ee36f49951df9351b3ed9d75c2fe698a5f2be40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eec21c97f631ba8f5218c8f3ee36f49951df9351b3ed9d75c2fe698a5f2be40->enter($__internal_5eec21c97f631ba8f5218c8f3ee36f49951df9351b3ed9d75c2fe698a5f2be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c384c24bb0a3eb2ad8eb59e1bb3f05dc42fc776d3502ec1975b8e5cbf8cabbce->leave($__internal_c384c24bb0a3eb2ad8eb59e1bb3f05dc42fc776d3502ec1975b8e5cbf8cabbce_prof);

        
        $__internal_5eec21c97f631ba8f5218c8f3ee36f49951df9351b3ed9d75c2fe698a5f2be40->leave($__internal_5eec21c97f631ba8f5218c8f3ee36f49951df9351b3ed9d75c2fe698a5f2be40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

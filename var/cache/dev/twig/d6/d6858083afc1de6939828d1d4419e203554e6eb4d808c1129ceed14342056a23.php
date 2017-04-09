<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3f7cc90ea24bfb0a67c31a8780d09bf4f7115fa089c8c230bca800e61beaf2d8 extends Twig_Template
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
        $__internal_effe14156924ffe1311e2bf4ff80609dfedaddea6731a68cd121fcd2a916ebbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effe14156924ffe1311e2bf4ff80609dfedaddea6731a68cd121fcd2a916ebbd->enter($__internal_effe14156924ffe1311e2bf4ff80609dfedaddea6731a68cd121fcd2a916ebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f1f5edc2a9434fecf0267fe1429561209b09ad09b961b817c5044383930794c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f5edc2a9434fecf0267fe1429561209b09ad09b961b817c5044383930794c6->enter($__internal_f1f5edc2a9434fecf0267fe1429561209b09ad09b961b817c5044383930794c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_effe14156924ffe1311e2bf4ff80609dfedaddea6731a68cd121fcd2a916ebbd->leave($__internal_effe14156924ffe1311e2bf4ff80609dfedaddea6731a68cd121fcd2a916ebbd_prof);

        
        $__internal_f1f5edc2a9434fecf0267fe1429561209b09ad09b961b817c5044383930794c6->leave($__internal_f1f5edc2a9434fecf0267fe1429561209b09ad09b961b817c5044383930794c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
